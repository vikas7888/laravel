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
use App\Models\Internship;
use DB;

class InternshipController extends Controller
{ 
    public function index()
    {
        $inquiries = Internship::latest()->get();
        return view('admin.pages.internship.index',[
            'internships'=> $inquiries,
        ]);
    }

    public function show(Request $request,$id)
    {
        $inquiry = Internship::find($id);
        $inquiry->update([
            'is_read' => 1,
        ]);
        return view('admin.pages.internship.show',[
            'inq' => $inquiry,
        ]);
    }

    public function destroy($id)
    {
        $inquiry = Internship::where('id',$id)->delete();
        return redirect()->route('internship.index')->with(['status' => 'Internship Deleted Successfuly']);
    }
}
