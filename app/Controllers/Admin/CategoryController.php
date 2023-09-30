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
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.category.index',[
            'category' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.pages.category.new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required|unique:category',
            'banner'  => 'required',
            'banner.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        $image = $request->file('banner');
        $input['banner'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/');
        //return $destinationPath;
        Image::make($image)->fit('340','340')->save($destinationPath.$input['banner'],80);
        //$image->move($destinationPath, $input['banner']);
        $category = Category::create([
            'name'    => $input['name'],
            'details' => $input['details'],
            'banner'  => $input['banner'],
            'status'  => $input['status'],
            'seo_keywords'    => $input['seo_keywords'],
            'seo_description' => $input['seo_description'],
            'seo_tags'        => $input['seo_tags'],
        ]);
        return redirect()->route('category.index')->with(['status'=>'Course Category created successfully.']);
    }

    public function show($id)
    {
        $category = category::find($id);
        return view('admin.pages.category.show',[
            'cat' => $category,
        ]);
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('admin.pages.category.edit',[
            'cat' => $categories,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required',
            'banner.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input = $request->all();
        $category = Category::find($id);
        if ($request->hasFile('banner'))
        {//return $input;
        $image = $request->file('banner');
        $input['banner'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/');
        Image::make($image)->fit('340','340')->save($destinationPath.$input['banner'],80);
        //$image->move($destinationPath, $input['banner']);
        }
        else
        {
            $input['banner'] = $category->banner;
        }
        $category->update([
            'name'    => $input['name'],
            'details' => $input['details'],
            'banner'  => $input['banner'],
            'status'  => $input['status'],
            'seo_keywords'    => $input['seo_keywords'],
            'seo_description' => $input['seo_description'],
            'seo_tags'        => $input['seo_tags'],
        ]);
        return redirect()->route('category.index')->with(['status'=>'Course Category updated successfully.']);
    }


}