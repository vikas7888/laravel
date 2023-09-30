<?php

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Program;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Web', 'prefix' => '/'], function(){
    Route::get('/','WebController@index')->name('homepage');
    Route::get('/about','WebController@about');
    Route::get('/why-a2it','WebController@why');
    Route::get('/gallery','WebController@gallery');
    Route::get('/faq','WebController@faq');
    Route::get('/privacy-policy','WebController@privacyPolicy');
    Route::get('/terms-conditions','WebController@termsConditions');
    Route::get('/verify-certificate','WebController@certificate');
    Route::get('/regular-course','WebController@regularcourse');
    Route::get('/international-certification','WebController@internationalcertificate');
    Route::get('/free-app','WebController@freeapp');
    Route::get('/placements','WebController@placements');
    Route::get('/services','WebController@services');
    Route::get('/international-certificate','WebController@international');
    Route::match(['get','post'],'/contact','WebController@contact')->name('contact.store');
    Route::get('/all-categories','WebController@allcategory');
    Route::get('/course/{category}/{course?}','WebController@details');
    Route::post('/course/search','WebController@search'); 
    Route::post('/inquire','WebController@inquiryPop')->name('inquiries.pop');
    Route::post('/inquiry','WebController@homePop')->name('home.pop');
    Route::get('/success','WebController@success');
    Route::match(['get','post'],'course-inquiry','WebController@inquire')->name('inquiry.form');
    Route::match(['get','post'],'faq','WebController@faqForm')->name('faq.form');
    Route::match(['get','post'],'career','WebController@career')->name('carrier.form');
    Route::get('job-details/{id}','WebController@jobDetail')->name('job.details');
    Route::get('refresh-captcha','WebController@refresh_captcha');
    Route::post('subscribe','WebController@subscribe');
    Route::match(['get','post'],'a2it-landing','WebController@landing')->name('form.landing');
    
    Route::post('verify/certificate','WebController@certiVerify');
    Route::post('apply/certificate','WebController@applycertificate')->name('apply.certificate');
    Route::get('/sitemap', function()
    {
        $content = View::make('frontend.pages.sitemap');
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    });
    
    //Save Guests for Sending Push Notification.
    Route::post('/push','WebController@storePushSubscription');
    
    //
    Route::any('partner-with-us','WebController@partner')->name('partnership.store');
    Route::any('training-registration','WebController@training')->name('webtraining.store');
    Route::any('training-thanks','WebController@trainingThanks')->name('webtraining.thanks');
    
    Route::get('sitemap.xml', function(){
        return response()->view('frontend.pages.sitemap')->header('Content-Type', 'text/xml');
    });
    
    Route::get('robots.txt', function(){
        $content = File::get(public_path('robots.txt'));
        return response($content, 200, ['Content-Type' => 'text/plain']);
    });
    
    //
    Route::match(['get','post'],'apply-summer-internship','WebController@onlineTraining')->name('online.training');
    Route::post('/registration-done','WebController@registrationDone')->name('registration.done');
    
    Route::post('get-programs',function(Request $request){
        //
        $id = $request->category_id;
        $programs = Program::where('intern_id',$id)->get();
        return response()->json([
            'programs' => $programs
        ]);
    })->name('programs');
    
    //
    Route::get('/validate-coupon/{code}/{type}','WebController@validateCoupon')->name('coupon');
    Route::get('/claims/{code}/{type}','WebController@validateCoupon')->name('coupon');
    
    Route::match(['get','post'],'participation-certificate','WebController@participateCertificate');
    
    Route::match(['get','post'],'claims','WebController@viewClaims')->name('claim');
    
    Route::get('/six-months-internship','WebController@internship');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    //Route::get('/','AdminController@index');
    Route::get('signin','AdminController@signin')->name('admin.login');
    Route::post('login','AdminController@authenticate');
    Route::get('signout','AdminController@signout');
    
    
    Route::get('dashboard','AdminController@dashboard')->middleware(['auth'])->name('admin.dashboard');
    Route::match(['get','post'],'media','AdminController@media')->middleware(['auth'])->name('media.store');
    Route::resource('inquiry','InquiriesController')->middleware(['auth']);
    Route::resource('training','TrainingController')->middleware(['auth']);
    Route::post('/training2/{id}', 'TrainingController@updatestatus')->name('training2');
    Route::get('show_complete','TrainingController@indexcomp')->middleware(['auth'])->name('admin.show_complete');
    Route::resource('category','CategoryController')->middleware(['auth']);
    Route::resource('course','CourseController')->middleware(['auth']);
    Route::resource('testimonial','TestimonialController')->middleware(['auth']);
    Route::resource('carriers','CarrierController')->middleware(['auth']);
    Route::match(['get','post'],'landing','CarrierController@landing')->name('landing.form')->middleware(['auth']);
    
    Route::get('certificate/print/{id}','CertificateController@getCertificate')->middleware(['auth'])->name('certificate.print');
    Route::resource('certificate','CertificateController')->middleware(['auth']);
    
    Route::resource('notification','NotificationController')->middleware(['auth']);
    Route::resource('internship','InternshipController')->middleware(['auth']);
    Route::resource('branch','BranchController')->middleware(['auth']);
    Route::resource('branch-courses','BranchCourseController')->middleware(['auth']);
    Route::resource('coupons','CouponController')->middleware(['auth']);
    Route::resource('radeem','RadeemController')->middleware(['auth']);
    Route::resource('participate','ParticipateController')->middleware(['auth']);
});
