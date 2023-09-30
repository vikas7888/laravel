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
use App\Models\Course;
Use App\Models\Category;
use DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('category')->get();
        //return $courses;
        return view('admin.pages.course.index',[
            'course' => $courses,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.course.new',[
            'category' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'     => 'required',
            'banner'   => 'required',
            'banner.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'top_search'=> 'required',
            //'price'    => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        //return $input;
        $image = $request->file('banner');
        $input['banner'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/');
        Image::make($image)->fit('800','425')->save($destinationPath.$input['banner'],80);
        //$image->move($destinationPath, $input['banner']);

        $course = Course::create([
            'name'        => $input['name'],
            'category_id' => $input['category_id'],
            //'price'       => $input['price'],
            'description' => $input['description'],
            'banner'      => $input['banner'],
            'url'         => $input['url'],
            'top_search'  => $input['top_search'],
            'seo_keywords'    => $input['seo_keywords'],
            'seo_description' => $input['seo_description'],
            'seo_tags'        => $input['seo_tags'],
        ]);
        return redirect()->route('course.index')->with(['status'=> 'Course Added successully']);
    }

    public function show($id)
    {
        $course = Course::with('category')->where('id',$id)->first();
        return view('admin.pages.course.show',[
            'cou' => $course,
        ]);
    }

    public function edit($id)
    {
        $course = Course::with('category')->where('id',$id)->first();
        $category =Category::all();
        return view('admin.pages.course.edit',[
            'cou' => $course,
            'cat' => $category,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'     => 'required',
            //'banner'   => 'required',
            'banner.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'top_search'=> 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $input = $request->all();
        $course= Course::find($id);
       
        
        if ($request->hasFile('banner'))
        {//return $input;
        $image = $request->file('banner');
        $input['banner'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/');
        Image::make($image)->fit('800','425')->save($destinationPath.$input['banner'],80);
        //$image->move($destinationPath, $input['banner']);
        }
        else
        {
            $input['banner'] = $course->banner;
        }
        
        
        $course->update([
            'name'        => $input['name'],
            'category_id' => $input['category_id'],
            //'price'       => $input['price'],
            'description' => $input['description'],
            'banner'      => $input['banner'],
            'url'         => $input['url'],
            'top_search'  => $input['top_search'],
            'seo_keywords'    => $input['seo_keywords'],
            'seo_description' => $input['seo_description'],
            'seo_tags'        => $input['seo_tags'],
        ]);
        return redirect()->route('course.index')->with(['status'=> 'Course Updated successully']);
    }

    public function destroy($id)
    {
        $course = Course::where('id',$id)->delete();
        return redirect()->route('course.index')->with(['status' => 'Course Deleted Successfuly']);
    }
}