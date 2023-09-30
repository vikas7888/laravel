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
use App\Models\Trainer;


class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        //return $courses;
        return view('admin.pages.trainer.index',[
            'trainer' => $trainers,
        ]);
    }

    public function create()
    {
        return view('admin.pages.trainer.new'); 
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'     => 'required',
            'status'   => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        //return $input;
        $trainer = Trainer::create([
            'name'   => $input['name'],
            'status' => $input['status'],
        ]);
        return redirect()->route('trainer.index')->with(['status'=> 'Trainer Added successully']);
    }

    
    public function edit($id)
    {
        $trainer = Trainer::find($id);
        return view('admin.pages.trainer.edit',[
            'trnr' => $trainer,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'   => 'required',
            'status' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $input = $request->all();
        $trainer= Trainer::find($id);
       
        $trainer->update([
            'name'   => $input['name'],
            'status' => $input['status'],
        ]);
        return redirect()->route('trainer.index')->with(['status'=> 'Trainer Updated successully']);
    }

    public function destroy($id)
    {
        $trainer = Trainer::where('id',$id)->delete();
        return redirect()->route('trainer.index')->with(['status' => 'Trainer Deleted Successfully']);
    }
}