<?php

namespace App\Controllers\Admin;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Arr;
use Session,Cache;
use Auth, Hash;
use App\Models\Users;
Use App\Models\Inquiry;
Use App\Models\Course;
Use App\Models\Training;
Use App\Models\Certificate;
Use App\Models\Internship;
use DB;

class AdminController extends Controller
{
    public function signin()
    {
        if(Auth::check())
        {
            return redirect()->route('admin.dashboard');
        }else{
            return view('admin.pages.login');
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        	//return $credentials; 
        if (Auth::attempt(['username' => $credentials['username'] , 'password' => $credentials['password'] , 'status' => '1'])) {
            // Authentication passed... 
            return redirect()->route('admin.dashboard');
    }
    else {
           // Authentication failed...
           return redirect()->back()->with('error','Incorrect Username/Password! Please try again');
         }
    }

    public function signout(){
        Auth::logout();
        Session::flush();
        Cache::flush();           
        return redirect('/admin/signin');        
    }    

    public function dashboard(){
        $inquiry = Inquiry::where('is_read',0)->where('status',1)->count();
        $train   = Training::whereNull('complete')->count();
        $certi   = Certificate::where('status',0)->where('type','REQUEST')->count();
        $course  = Course::where('status','1')->count();
        $inter = Internship::where('is_read',0)->count();
        $trainc   = Training::where('complete',1)->count();
        
        return view('admin.pages.dashboard',[
            'inq'   => $inquiry,
            'cou'   => $course,
            'train' => $train,
            'certi' => $certi,
            'intern' => $inter,
            'trainc' => $trainc,
            
        ]);
    }

    public function media(Request $request)
    {
        if($request->isMethod('post'))
        {
            $input    = $request->all();
            $image    = $request->file('image');
            $destination = public_path('/uploads/media/');
            $filename    = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->fit($input['width'],$input['height'])->save($destination.$filename, 80);
            return redirect()->back()->withSuccess($filename);
        }
        else
        {
            return view('admin.pages.media.new');
        }
    }

}