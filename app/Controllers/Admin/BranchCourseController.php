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
use App\Models\Program;
use DB;

class BranchCourseController extends Controller
{
    public function index()
    {
        $categories = Program::with('branch')->get();
        return view('admin.pages.branch.index_program',[
            'category' => $categories,
        ]);
    }

    public function create()
    {
        $interns = \App\Models\Branch::all();
        return view('admin.pages.branch.new_program',compact('interns'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required',
            'intern'  => 'required',
            'status' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $branch = Program::create([
            'name'    => $request->name,
            'intern_id' => $request->intern,
            'slug'    => str_replace(' ','-',$request->name),
            'status'  => $request->status,
        ]);
        return redirect()->route('branch-courses.index')->with(['status'=>'New Course created successfully.']);
    }

    public function show($id)
    {
        $category = Branch::find($id);
        return view('admin.pages.branch.show_branch',[
            'cat' => $category,
        ]);
    }

    public function edit($id)
    {
        $interns = \App\Models\Branch::all();
        $categories = Program::find($id);
        
        return view('admin.pages.branch.edit_program',[
            'cat' => $categories,
            'interns' => $interns,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required',
            'intern'  => 'required',
            'status' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $category = Program::find($id);
       
        $category->update([
            'name'    => $request->name,
            'intern_id' => $request->intern,
            'slug'    => str_replace(' ','-',$request->name),
            'status'  => $request->status,
        ]);
        return redirect()->route('branch-courses.index')->with(['status'=>'Course updated successfully.']);
    }


}
