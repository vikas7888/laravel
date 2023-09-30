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
use App\Models\Inquiry;
use DB;

class InquiriesController extends Controller
{ 
    public function index()
    {
        $inquiries = Inquiry::latest()->get();
        return view('admin.pages.inquiry.index',[
            'inquiry'=> $inquiries,
        ]);
    }

    public function show(Request $request,$id)
    {
        $inquiry = Inquiry::find($id);
        $inquiry->update([
            'is_read' => '1',
        ]);
        return view('admin.pages.inquiry.show',[
            'inq' => $inquiry,
        ]);
    }

    public function destroy($id)
    {
        $inquiry = Inquiry::where('id',$id)->delete();
        return redirect()->route('inquiry.index')->with(['status' => 'Inquiry Deleted Successfuly']);
    }
}