<?php

namespace App\Controllers\Admin;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use App\Http\Requests;
use App\Models\Participant;
use DB;

class ParticipateController extends Controller
{ 
    public function index()
    {
        $participant = Participant::find(1);
        return view('admin.pages.participant.index',[
            'part'=> $participant,
        ]);
    }

    public function update(Request $request,$id)
    {
        $participant = Participant::find($id)->update([
            'detail'    =>  $request->detail,
            'name'      =>  $request->name,
            'conducted' =>  $request->conducted,
            'location'  =>  $request->location,
            'status'    =>  $request->status,
        ]);
        return redirect()->back()->with(['status' => 'Updated Successfuly']);
    }

    public function destroy($id)
    {
        $training = Training::where('id',$id)->delete();
        return redirect()->route('training.index')->with(['status' => 'Training Registration Deleted Successfuly']);
    }
}