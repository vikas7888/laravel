<?php

namespace App\Controllers\Admin;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Arr;
use Auth, Hash;
use App\Models\Coupon;

class CouponController extends Controller
{ 
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('admin.pages.coupon.index',[
            'coupons'=> $coupons,
        ]);
    }
    
    public function create()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $coupon = '';
        for ($i = 0; $i < 4; $i++) {
            $coupon .= $characters[rand(0, $charactersLength - 1)];
        }
        return view('admin.pages.coupon.new',[
            'coupon' => strtoupper($coupon)
        ]);
    }
    
    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return view('admin.pages.coupon.edit',[
            'coupon' => $coupon
        ]);
    }
    
    
    
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'code' => 'required',
            'value' => 'required',
            'commision' => 'required',
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        
        $coupon = Coupon::create($request->all());
        return redirect()->route('coupons.index')->with(['success' => 'New Coupon created']);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'code' => 'required',
            'value' => 'required',
            'commision' => 'required',
            'name' => 'required',
            'company' => 'required',
            'phone' => 'sometimes|required|unique:coupons,phone,'.$id,
            'email' => 'required',
        ]);
        
        $coupon = Coupon::find($id)->update($request->all());
        return redirect()->route('coupons.index')->with(['success' => 'Coupon Updated']);
    }


    public function show(Request $request,$id)
    {
        $coupon = Coupon::find($id);
        return view('admin.pages.coupon.show',[
            'coupon' => $coupon,
        ]);
    }

    public function destroy($id)
    {
        $inquiry = Coupon::where('id',$id)->delete();
        return redirect()->route('coupons.index')->with(['status' => 'Coupon Deleted Successfuly']);
    }
}
