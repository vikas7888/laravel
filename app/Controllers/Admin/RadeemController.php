<?php

namespace App\Controllers\Admin;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Arr;
use Auth;
use App\Models\Coupon;
use App\Models\Internship;

class RadeemController extends Controller
{ 
    public function index()
    {
        $coupons = Coupon::latest()->get()->groupBy(['phone']);
    
        return view('admin.pages.coupon.radeem_index',[
            'coupons'=> $coupons,
        ]);
    }
    
    
    public function show($id)
    {
        $coupons   = Coupon::where('phone',$id)->get()->pluck('code');
        $radeems   = Internship::whereIn('code', $coupons)->get();
        
        return view('admin.pages.coupon.radeem_show',[
            'radeems'=> $radeems,
            'phone'  => $id,
        ]);
    }
    
    public function edit($id)
    {
        $inter = Internship::find($id);
        if($inter->com_paid == 1)
        {
            $inter->update(['com_paid' => 0]);
        }
        else
        {
            $inter->update(['com_paid' => 1]);
        }
        return redirect()->back()->with(['status','Operation Completed']);
    }
    
}
