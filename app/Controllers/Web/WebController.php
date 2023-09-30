<?php

namespace App\Controllers\Web;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Arr;
use Auth, Hash;
use Intervention\Image\Facades\Image;
use App\Models\Category;
use App\Models\Course;
use App\Models\Inquiry;
use App\Models\Testimonial;
use App\Models\Carrier;
use App\Models\Internship;
use Newsletter;
use App\Models\Landing;
use App\Models\Certificate;
use Notification;
use App\Notifications\SendPush;
use App\Models\Guest;
use App\Models\Training;
use App\Models\Branch;
use Razorpay\Api\Api;
use App\Models\Coupon;
use App\Models\Participant;
use DB;


class WebController extends Controller
{
    public function index()
    {
        $testimonials  = Testimonial::where('status',1)->orderBy('id','asc')->take(8)->get();
        $category  = Category::where('status',1)->orderBy('id','asc')->take(8)->get();

        return view('frontend.pages.home',[
            'testimonials' => $testimonials,
            'cate' => $category,
        ]);
    }

    public function allcategory()
    {
        $category = Category::where('status',1)->get();
        return view('frontend.pages.category',[
            'cate' => $category,
        ]);
    }

    public function contact(Request $request)
    {
        if($request->isMethod('post'))
        {
            $input = $request->all();
            
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required',
                'phone' => 'required|min:10',
            ]);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            if(!$this->verifyCaptcha($request->recaptcha)){
                return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
            }
            
            if (!Newsletter::isSubscribed($request->email)) 
            {
                Newsletter::subscribe($request->email);
            }
            
            $inquiry = Inquiry::create([
                'name'    => $input['name'],
                'email'   => $input['email'],
                'phone'   => $input['phone'],
                'message' => $input['message'],
                'type'  => 'CONTACT',
            ]);
            return redirect()->route('contact.store')->with(['status'=> TRUE]);
        }
        else
        {
            return view('frontend.pages.contact');


        }
    }

    public function placements()
    {
        $placement = Testimonial::where('status',1)->get();
        return view('frontend.pages.placement',[
            'placement' => $placement
        ]);
    }

    public function international()
    {
        $course = Course::with('category')->where('category_id',40)->get();
        return view('frontend.pages.international-certi',[
            'course' => $course
        ]);
    }
    
    public function services()
    {
        return redirect('/course/services');
    }

    public function certificate(Request $request)
    {
        return view('frontend.pages.applycertificate',[
            'data' => $request
        ]);
    }
    public function freeapp()
    {
        return view('frontend.pages.freeapp');
    }
    
    public function regularcourse()
    {
        $branch = Branch::all();
        return view('frontend.pages.regularcourse',[
             'branch' => $branch,
        ]);
    }
     public function internationalcertificate()
    {
        $branch = Branch::all();
        return view('frontend.pages.internationalcertificate',[
             'branch' => $branch,
        ]);
        //return view('frontend.pages.internationalcertificate');
    }
    
    public function internship()
    {
        $branch = Branch::all();
        return view('frontend.pages.internship',[
             'branch' => $branch,
        ]);
    }
    
    public function about()
    {
        return view('frontend.pages.about');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }

    public function why()
    {
        return view('frontend.pages.whyait');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function privacyPolicy()
    {
        return view('frontend.pages.privacyPolicy');
    }

    public function termsConditions()
    {
        return view('frontend.pages.termsConditions');
    }

    public function details($category, $course = NULL)
    {
        if($course == NULL){
            $cat   = Category::with('course')->where('slug',$category)->first();
            return view('frontend.pages.course',[
                'category' => $cat,
            ]);
        }else{
            $category  = Category::where('status',1)->get();
            $cou   = Course::with('category.course')->where('slug',$course)->first();
            //return $cou;
            return view('frontend.pages.course_details',[
            'course'   => $cou,
            'category' => $category,
            
        ]);
        }
        
    }

    public function search(Request $request)
    {
        $input = $request->all();
        $qry   = $input['query'];

        $category  = Category::where('status',1)->get();
        $courses   = Course::search($qry)->with('category')->get();
        
        return view('frontend.pages.search',[
            'category'  => $category,
            'courses'   => $courses,
        ]);
    }

    public function inquiryPop(Request $request)
    {
            $input = $request->all();
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required',
                'phone' => 'required|min:10',
               
            ]);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            if(!$this->verifyCaptcha($request->recaptcha)){
                return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
            }
            
            if (!Newsletter::isSubscribed($request->email)) 
            {
                Newsletter::subscribe($request->email);
            }

            $inquiry = Inquiry::create([
                'name'  => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'city'  => $input['city'],
                'type'  => 'INQUIRY',
            ]);
            
            // $task = new Inquiry;
            // $task->name = $request->input("name");
            // $task->email = $request->input("email");
            // $task->city = $request->input("phone");
            // $task->type = 'INQUIRY';
            // $task->save();
            return redirect('/success')->with(['status'=> TRUE]);
        
        
    }

    public function homePop(Request $request)
    {
            $input = $request->all();
          
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required',
                'phone' => 'required|min:10',
            ]);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            if(!$this->verifyCaptcha($request->recaptcha)){
                return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
            }
            
            if (!Newsletter::isSubscribed($request->email)) 
            {
                Newsletter::subscribe($request->email);
            }

            $inquiry = Inquiry::create([
                'name'  => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'course'=> $input['course'],
                'city'  => $input['city'],
                'type'  => 'INQUIRY',
            ]);
            return redirect('/success')->with(['status'=> TRUE]);
        
    }


    public function success()
    {
        return view('frontend.pages.success');
    }

    public function inquire(Request $request)
    {
        if($request->isMethod('post'))
        {
            $input = $request->all();
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required|',
                'phone' => 'required|min:10',
                'course'=> 'required|',
            ]);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            if(!$this->verifyCaptcha($request->recaptcha)){
                return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
            }
            
            if (!Newsletter::isSubscribed($request->email)) 
            {
                Newsletter::subscribe($request->email);
            }

            $inquiry = Inquiry::create([
                'name'  => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'course'=> $input['course'],
                'type'  => 'INQUIRY',
            ]);

            return redirect('/success')->with(['status'=> TRUE]);
        }
        else
        {
            return view('frontend.pages.buynow');


        }
    }
    
    public function faqForm(Request $request){
        if($request->isMethod('post')){
        $input = $request->all();
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required',
                'phone' => 'required',
            ]);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
                        
            if(!$this->verifyCaptcha($request->recaptcha)){
                return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
            }
            
            if (!Newsletter::isSubscribed($request->email)) 
            {
                Newsletter::subscribe($request->email);
            }

            
            $inquiry = Inquiry::create([
                'name'  => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'course'=> $input['course'],
                'message'=> $input['message'],
                'type'  => 'FAQ',
            ]);
            return redirect('/success')->with(['status'=> TRUE]);
        }
        else
        {
            return view('frontend.pages.faq');
        }
    }

    public function career(Request $request)
    {
            if($request->isMethod('post'))
            {
                $input = $request->all();
                $validator = Validator::make($request->all(),[
                    'job_id' => 'required',
                    'name'   => 'required|min:3',
                    'email'  => 'required|',
                    'phone'  => 'required|min:10',
                ]);
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                
                // if(!$this->verifyCaptcha($request->recaptcha)){
                // return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
                // }
            
                $inquiry = Inquiry::create([
                    'job_id'=> $input['job_id'],
                    'name'  => $input['name'],
                    'email' => $input['email'],
                    'phone' => $input['phone'],

                    'type'  => 'CARRIER',
                ]);
                return redirect('/success')->with(['status'=> TRUE]);
            }
            else
            {
                $carrier = Carrier::where('status',1)->get();
                return view('frontend.pages.carriers',[
                    'carrier' => $carrier
                ]);
            }
    }
    
    public function jobDetail($id)
    {
        $carrier = Carrier::find($id);
        return view('frontend.pages.job_details',[
            'job' => $carrier
        ]);
    }

    public function refresh_captcha()
    {
        return response()->json(['captcha'=> captcha_img('flat')]);
    }
    
    public function subscribe(Request $request)
    {
        if (!Newsletter::isSubscribed($request->email)) 
        {
            Newsletter::subscribe($request->email);
            return redirect()->back()->with('success', 'Thanks For Subscribe');
        }
        return redirect()->back()->with('error', 'Sorry! You have already subscribed');
    }
    
    public function landing(Request $request)
    {
        if($request->isMethod('post')){
            $input = $request->all();
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required',
                'phone' => 'required|min:10',
            ]);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            if(!$this->verifyCaptcha($request->recaptcha)){
                return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
            }
            
            if (!Newsletter::isSubscribed($request->email)) 
            {
                Newsletter::subscribe($request->email);
            }

            $inquiry = Inquiry::create([
                'name'  => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'message'=> $input['message'],
                'type'  => 'LANDING',
            ]);
            return redirect('/success')->with(['status'=> TRUE]);
        }
        else
        {
            $landing = Landing::where('id',1)->first();
            return view('frontend.pages.landing',[
                'landing' => $landing
            ]);
        }
    }
    
    private function verifyCaptcha($recaptcha)
    {
        $url  = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => '6LejhKoUAAAAAEK5gHn5vULZnf79aM2JChr3nLdL',
            'response' => $recaptcha
        ];
        
        $options = [
            'http' => [
                'header'  => 'Content-type: application/x-www-form-urlencoded\r\n',
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        
        $context  = stream_context_create($options);
        $result   = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);
        
        if($resultJson->success != true){
            return false;
        }else{
            return true;
        }
    }
    
    public function certiVerify(Request $request)
    {
        //return  response()->json(['status' => false, 'data' =>  $request->certi_code]);
        
        if(strtoupper($request->certi_code) === 'A2ITMH')
        {
            $certificate = Certificate::where('certificate_id', $request->certi_id)->where('status',1)->first();
            if($certificate)
            {
                return response()->json(['status' => true, 'certificate' => $certificate]);
            }
            else
            {
                return response()->json(['status' => false, 'message' => 'Invalid Certificate Code!']);
            }
        }
        else
        {
            return response()->json(['status' => false,'message' => 'Invalid Center Code!']);
        }
    }

    public function applycertificate(Request $request)
    {
       
        //'certificate_id' => 'unique:certificate,certificate_id',
        $validator = Validator::make($request->all(),[
            'certificate_id' => 'required',
            'student_name'   => 'required|min:3',
            'phone'          => 'required|min:10',
            'email'          => 'required',
            'course'         => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input = $request->all();
        $certificate = Certificate::create([
            'certificate_id' => substr($input['certificate_id'],6),
            'student_name'   => $input['student_name'],
            'email'          => $input['email'],
            'phone'          => $input['phone'],
            'course'         => $input['course'],
            'project_name'   => $input['project_name'],
            'transcript'     => $input['transcript'],
            'course_from'    => $input['course_from'],
            'course_to'      => $input['course_to'],
            'type'           => 'Request',
            'status'         => 0,
        ]);
        return redirect('/success')->with(['status'=> TRUE]);
    }
    
    /**
     * Store the PushSubscription.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storePushSubscription(Request $request)
    {
        $this->validate($request,[
            'endpoint'    => 'required',
            'keys.auth'   => 'required',
            'keys.p256dh' => 'required'
        ]);

        $endpoint = $request->endpoint;
        $token = $request->keys['auth'];
        $key   = $request->keys['p256dh'];
        $user  = Guest::firstOrCreate([
            'endpoint' => $endpoint
        ]);
        $user->updatePushSubscription($endpoint, $key, $token);

        return response()->json(['success' => true],200);
    }

    /**
     * Send Push Notifications to all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendPushMessage()
    {
        // $params = [
        //     'title' => 'Sample Text',
        // ];
        // Notification::send(Guest::all(),new SendPush($params));
        $user  = Guest::firstOrCreate([
            'endpoint' => '89237498723987498234'
        ]);
        return Guest::all();
        //return redirect()->back();
    }
    
    public function partner(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $input = $request->all();
            
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required',
                'phone' => 'required|min:10',
            ]);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            if(!$this->verifyCaptcha($request->recaptcha)){
                return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
            }
            
            if (!Newsletter::isSubscribed($request->email)) 
            {
                Newsletter::subscribe($request->email);
            }
            
            $inquiry = Inquiry::create([
                'name'    => $input['name'],
                'email'   => $input['email'],
                'phone'   => $input['phone'],
                'message' => $input['message'],
                'type'    => 'Franchise',
            ]);
            return redirect()->route('partnership.store')->with(['status'=> TRUE]);
        }else{
            return view('frontend.pages.partner');
        }
    }
    
    public function training(Request $request){
        //
        if($request->isMethod('POST'))
        {
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required',
                'phone' => 'required|min:10',
                'father_name'      => 'required',
                'training_intrest' => 'required',
                'address'          =>'required',
                'college_name'     => 'required',
                'college_semester' => 'required',
                'college_roll'     => 'required',
                'training_duration'=> 'required',
                'training_start'   => 'required',
                'training_end'     => 'required',
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            if(!$this->verifyCaptcha($request->recaptcha)){
                return redirect()->back()->withErrors(['recaptcha' => 'Unable to verify recaptcha! Looks like you are a Bot or Spammer!'])->withInput();
            }
            
            $request->training_start = date('Y-m-d',strtotime($request->training_start));
            $request->training_end   = date('Y-m-d',strtotime($request->training_end));

            $training = new Training;
            $training->create($request->except(['_token','recaptcha']));
            return redirect()->route('webtraining.thanks')->with(['status'=> TRUE]);
        }else{
            return view('frontend.pages.training');
        }
    }

    public function trainingThanks(){
        return view('frontend.pages.training_thanks');
    }
    
    public function onlineTraining(Request $request) {
        //
        if($request->isMethod('POST'))
        {
            $validator = Validator::make($request->all(),[
                'name'  => 'required|min:3',
                'email' => 'required',
                'phone' => 'required|min:10',
                'course' => 'required',
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $api_key = env('RAZORPAY_KEY');
            $api_secret = env('RAZORPAY_SECRET');
            
            $rzp = new Api($api_key, $api_secret);
            $order = $rzp->order->create(array(
                'receipt' => rand(1,9999),
                'amount' => $request->amount,
                'currency' => 'INR'
                )
            );
            
            $intership = Internship::create([
                'order_id'=> $order['id'],
                'name'    => $request->name,
                'phone'   => $request->phone,
                'email'   => $request->email,
                'college' => $request->college,
                'branch'  => $request->branch,
                'course'  => ($request->course == 'other') ? $request->other : $request->course,
                'payment' => $request->amount/100,
                'code'    => $request->code,
                'start_date' => date('Y-m-d',strtotime($request->start_date)),
                'status'  => false,
            ]);
            
            return response()->json([
                'status' => true,
                'order_id' => $order['id']
            ]);
            //return redirect()->route('webtraining.thanks')->with(['status'=> TRUE]);
        }
        else
        {
            $branch = Branch::all();
            
            return view('frontend.pages.online_training',[
                
                'branch' => $branch,
            ]);
        }
    }
    
    public function registrationDone(Request $request)
    {
        //
        if($request->has('error')){
            
            return view('frontend.pages.internship_success',[
                'status' => false,
            ]);
            
        }else
        {
            $intern = Internship::where('order_id',$request->razorpay_order_id)->first();
            $intern->update([
                'status' => 1,
                'razorpay_payment_id' => $request->razorpay_payment_id
            ]);
            return view('frontend.pages.internship_success',[
                'status' => true,
            ]);
        }
    }
    
    public function validateCoupon($coupon, $type)
    {
        $coupons = Coupon::where('code',$coupon)
                    ->where('type',$type)
                    ->first();
                    
        if($coupons)
        {
            return response()->json([
                'status' => true,
                'coupon' => $coupons->value
            ]); 
        }
        else{
            return response()->json([
               'status' => false,
               'data'   => compact('coupon', 'type')
            ]);
        }
    }
    
    public function viewClaims(Request $request){
        //
        if($request->isMethod('POST'))
        {
            $coupons = Coupon::where('phone',$request->phone)->get()->pluck('code');
            $results = Internship::with('program')->whereIn('code',$coupons)->latest()->get();
            
            $earning = DB::table('internships')
                        ->join('coupons', 'internships.code', '=', 'coupons.code')
                        ->where('internships.status', '=', 1)
                        ->sum('coupons.commision');
                        
            session()->flashInput($request->input());
            return view('frontend.pages.claims',compact('results','earning'));
        }
        return view('frontend.pages.claims');
    
    }
    
    public function participateCertificate(Request $request){
        if($request->isMethod('POST')){
            //
            DB::table('participation')->increment('issued');
            $template = Participant::find(1);
            
            
            $img = Image::make(public_path('uploads/certificate/base-participate.jpg'));

            $img->text(strtoupper($request->student_name), 500, 290, function($font) {
                $font->file(public_path('uploads/font/Calibri-Bold.TTF'));
                $font->size(32);
                $font->color('#0c0c0c');
                $font->align('center');
                $font->valign('top');
                $font->angle(0);
            });
            
            $img->text($template->detail, 170, 330, function($font) {
                $font->file(public_path('uploads/font/Calibri-Regular.ttf'));
                $font->size(22);
                $font->color('#0c0c0c');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });
            
            $img->text(strtoupper($template->name), 500, 370, function($font) {
                $font->file(public_path('uploads/font/Calibri-Bold.TTF'));
                $font->size(32);
                $font->color('#0c0c0c');
                $font->align('center');
                $font->valign('top');
                $font->angle(0);
            });
            
            $img->text($template->conducted, 500, 410, function($font) {
                $font->file(public_path('uploads/font/Calibri-Regular.ttf'));
                $font->size(22);
                $font->color('#0c0c0c');
                $font->align('center');
                $font->valign('top');
                $font->angle(0);
            });
            
            $img->text(strtoupper($template->location), 500, 450, function($font) {
                $font->file(public_path('uploads/font/Calibri-Bold.TTF'));
                $font->size(32);
                $font->color('#0c0c0c');
                $font->align('center');
                $font->valign('top');
                $font->angle(0);
            });
            
            $img->text(strtoupper($template->location2), 500, 490, function($font) {
                $font->file(public_path('uploads/font/Calibri-Bold.TTF'));
                $font->size(32);
                $font->color('#0c0c0c');
                $font->align('center');
                $font->valign('top');
                $font->angle(0);
            });
            
            $path = public_path('uploads/certificate/participation-certificate.png');
            $img->save($path);
            
            return view('frontend.pages.participant',[
                'downloads' => $template->issued,
                'status' => $template->status,
                'certificate' => $path
            ]);

        }else{
            //
            $template = Participant::find(1);
            return view('frontend.pages.participant',[
                'status' => $template->status
            ]);
        }
    }
    
} 
