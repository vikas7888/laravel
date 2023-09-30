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
use App\Models\Carrier;
use App\Models\Landing;
use DB;

class CarrierController extends Controller
{
    public function index()
    {
        $carrier = Carrier::all();
        return view('admin.pages.carrier.index',[
            'carrier' => $carrier,
        ]);
    }

    public function create()
    {
        return view('admin.pages.carrier.new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'       => 'required',
            'description' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
       
        $carrier = Carrier::create([
            'title'       => $input['title'],
            'description' => $input['description'],
            'status'      => $input['status'],
        ]);
        return redirect()->route('carriers.index')->with(['status'=>'Carrier created successfully.']);
    }

    public function edit($id)
    {
        $carrier = Carrier::find($id);
        return view('admin.pages.carrier.edit',[
            'carrier' => $carrier,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title'       => 'required',
            'description' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $carrier = Carrier::find($id);
        $input = $request->all();
        $carrier->update([
            'title'       => $input['title'],
            'description' => $input['description'],
            'status'      => $input['status'],
        ]);
        return redirect()->route('carriers.index')->with(['status'=>'Carrier updated successfully.']);
    }

    public function destroy($id)
    {
        $carriers = Carrier::where('id',$id)->delete();
        return redirect()->route('carriers.index')->with(['status'=>'Carrier Deleted successfully.']);
    }
    
    public function landing(Request $request)
    {
        if($request->isMethod('post'))
        {
            $landing = Landing::find(1);
            $input = $request->all();
            $landing->update([
                'title'       => $input['title'],
                'description' => $input['description'],
            ]);
            return redirect()->back()->with(['status' => 'Updated Successfully']);
        }
        else
        {
            $landing = Landing::find(1);
            return view('admin.pages.landing.index',[
                'landing' => $landing,
            ]);
        }
    }

}