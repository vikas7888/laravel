<?php

namespace App\Controllers\Admin;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Arr;
use Auth, Hash;
use App\Models\Testimonial;
use DB;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin.pages.testimonial.index',[
            'testimonial' => $testimonial,
        ]);
    }

    public function create()
    {
        return view('admin.pages.testimonial.new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required',
            'image'   => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviews' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/testimonial/');
        //return $destinationPath;
        Image::make($image)->fit('250','250')->save($destinationPath.$input['image'],80);
        //$image->move($destinationPath, $input['banner']);
        $testimonial = Testimonial::create([
            'name'    => $input['name'],
            'reviews' => $input['reviews'],
            'image'   => $input['image'],
            'status'  => $input['status'],
        ]);
        return redirect()->route('testimonial.index')->with(['status'=>'Testimonial created successfully.']);
    }

    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.pages.testimonial.show',[
            'tes' => $testimonial,
        ]);
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.pages.testimonial.edit',[
            'tes' => $testimonial,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviews' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input = $request->all();
        $testimonial = Testimonial::find($id);
        if ($request->hasFile('image'))
        {//return $input;
        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/testimonial');
        Image::make($image)->fit('250','250')->save($destinationPath.$input['image'],80);
        //$image->move($destinationPath, $input['banner']);
        }
        else
        {
            $input['image'] = $testimonial->image;
        }
        $testimonial->update([
            'name'    => $input['name'],
            'reviews' => $input['reviews'],
            'image'   => $input['image'],
            'status'  => $input['status'],
        ]);
        return redirect()->route('testimonial.index')->with(['status'=>'Testimonial updated successfully.']);
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::where('id',$id)->delete();
        return redirect()->route('testimonial.index')->with(['status'=>'Testimonial Deleted successfully.']);
    }

}