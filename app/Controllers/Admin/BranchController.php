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
use App\Models\Branch;
use DB;

class BranchController extends Controller
{
    public function index()
    {
        $categories = Branch::all();
        return view('admin.pages.branch.index_branch',[
            'category' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.pages.branch.new_branch');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required|unique:category',
            'status' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $branch = Branch::create([
            'name'    => $request->name,
            'slug'    => str_replace(' ','-',$request->name),
            'status'  => $request->status,
        ]);
        return redirect()->route('branch.index')->with(['status'=>'New Branch created successfully.']);
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
        $categories = Branch::find($id);
        return view('admin.pages.branch.edit_branch',[
            'cat' => $categories,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required',
            'status' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $category = Branch::find($id);
       
        $category->update([
            'name'    => $request->name,
            'slug'    => str_replace(' ','-',$request->name),
            'status'  => $request->status,
        ]);
        return redirect()->route('branch.index')->with(['status'=>'Branch updated successfully.']);
    }


}
