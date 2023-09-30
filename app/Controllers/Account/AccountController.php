<?php
namespace App\Controllers\Account;

use Illuminate\Http\Request;
use App\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use Request as urlRequest;
use Session,Cache;

class AccountController extends Controller
{
    //
    public function index(){
        return redirect()->intended('account/signin');        
    } 

    /**
    * Authenticate user and Logged in
    */
    public function authenticate(Request $request)
    {
        $credentials = (object)$request->only('username', 'password');
    		 
        if (Auth::attempt(['email' => $credentials->username , 'password' => $credentials->password , 'status' => 'active'])) {
            // Authentication passed... 
            return redirect()->intended('account/app/dashboard');      
        }
		else {
           // Authentication failed...
           return redirect()->back()->with('error','Incorrect Username/Password! Please try again');
         }
    }


    /**
     * Open User signin form
     */
    public function signin(){
        if(Auth::check()){
            return redirect()->intended('account/app/dashboard');    
        }else{
            return view('app.pages.login');
        }            
    }

    /**
    * Signout current signed in user
    */
    public function signout(){
        Auth::logout();
        Session::flush();
        Cache::flush();           
        return redirect(urlRequest::root().'/account/signin');        
    }    

}
