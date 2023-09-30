<?php

namespace App\Controllers\Admin;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use App\Http\Requests;
use App\Models\Training;
use DB;

class TrainingController extends Controller
{ 
    public function index()
    {
        $training = Training::where('status',1)->latest()->get(); 
        return view('admin.pages.training.index',[
            'training'=> $training,
        ]);
    }
    
    
    public function indexcomp()
    {
        $training = Training::where('complete',1)->latest()->get();
        return view('admin.pages.training.show_complete',[
            'training'=> $training,
        ]);
    }

    public function show(Request $request,$id)
    {
        $training = Training::find($id);
        return view('admin.pages.training.show',[
            'inq' => $training,
        ]);
    }
    
    public function updatestatus(Request $request,$id)
    {   
        $training = Training::find($id);
        
        $training->update([
            'complete' => 1,
        ]);
        return view('admin.pages.training.show',[
            'inq' => $training,
        ]);
    }

    public function destroy($id)
    {
        $training = Training::where('id',$id)->delete();
        return redirect()->route('training.index')->with(['status' => 'Training Registration Deleted Successfuly']);
    }
}