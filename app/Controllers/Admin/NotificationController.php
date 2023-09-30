<?php

namespace App\Controllers\Admin;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Notification;
use App\Notifications\SendPush;
use App\Models\Guest;
use App\Models\NotificationLog;
use App\Models\Subscription;

class NotificationController extends Controller
{
    public function index()
    {
        return view('admin.pages.notification.index',[
            'log' =>  NotificationLog::find(1)
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
            'title'     => 'required',
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body'      => 'required',
            //'url'       => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imgName = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->fit('800','425')->save(public_path('/uploads/notification/').$imgName,80);
        }
        //
        $params = [
            'title' => $request->title,
            'image' => ($request->hasFile('image')) ? $imgName : '',
            'body'  => $request->body,
            // 'url'   => $request->url,
        ];
        $guests = Guest::all();
        $log    = NotificationLog::find(1);
        $last   = ($log->sent_last == 0) ? $guests->count() : $log->sent_last;
        $log->update([
            'sent_now'  => $guests->count(),
            'sent_last' => $last,
        ]);
        
        Notification::send($guests, new SendPush($params));
        return redirect()->route('notification.index')->with(['status'=> $guests->count()]);
    }
}