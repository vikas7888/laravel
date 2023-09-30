<?php

namespace App\Controllers\Admin;

use Illuminate\Http\Request;
use App\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Arr;
use Intervention\Image\Facades\Image;
use Auth, Hash;
use App\Models\Certificate;
use DB;

class CertificateController extends Controller
{
    public function index()
    {
        $certificate = Certificate::latest()->get();
        return view('admin.pages.certificate.index',[
            'certificate' => $certificate,
        ]);
    }

    public function create()
    {
        return view('admin.pages.certificate.new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'certificate_id' => 'unique:certificate,certificate_id',
            'course'         => 'required',
            'student_name'   => 'required|min:3',
            'email'          => 'required',
            'phone'          => 'required',
            'project_name'   => 'required',
            'transcript'     => 'required',
            'course_from'    => 'required',
            'course_to'      => 'required',
            'issued_by'      => 'required',
            'issued_on'      => 'required',
            'status'         => 'required',
        ]);
        
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        //
        $carrier = Certificate::create([
            'certificate_id' => $input['certificate_id'],
            'course'         => $input['course'],
            'student_name'   => $input['student_name'],
            'email'          => $input['email'],
            'phone'          => $input['phone'],
            'project_name'   => $input['project_name'],
            'transcript'     => $input['transcript'],
            'course_from'    => date('Y-m-d',strtotime($input['course_from'])),
            'course_to'      => date('Y-m-d',strtotime($input['course_to'])),
            'issued_by'      => $input['issued_by'],
            'issued_on'      => date('Y-m-d',strtotime($input['issued_on'])),
            'status'         => $input['status'],
            'remarks'        => $input['remarks'],
            'type'           => ($input['status']==1) ? 'ADMIN' : 'REQUEST',
        ]);
        
        return redirect()->route('certificate.index')->with(['status'=>'Certificate Issued successfully.']);
    }

    public function show($id)
    {
        $certificate = Certificate::where('id', $id)->first();
        return view('admin.pages.certificate.show',[
            'certificate' => $certificate,
        ]);
    }

    public function edit($id)
    {
        $certificate = Certificate::where('id', $id)->first();
        return view('admin.pages.certificate.edit',[
            'certificate' => $certificate,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'certificate_id' => 'required',
            'course'         => 'required',
            'student_name'   => 'required',
            'email'          => 'required',
            'phone'          => 'required',
            'project_name'   => 'required',
            'transcript'     => 'required',
            'course_from'    => 'required',
            'course_to'      => 'required',
            'issued_by'      => 'required',
            'issued_on'      => 'required',
            'status'         => 'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //
        $input = $request->all();
        //return $input;
        
        $certificate = Certificate::where('id', $id)->first();
        $certificate->update([
           'certificate_id' => $input['certificate_id'],
            'course'         => $input['course'],
            'student_name'   => $input['student_name'],
            'email'          => $input['email'],
            'phone'          => $input['phone'],
            'project_name'   => $input['project_name'],
            'transcript'     => $input['transcript'],
            'course_from'    => date('Y-m-d',strtotime($input['course_from'])),
            'course_to'      => date('Y-m-d',strtotime($input['course_to'])),
            'issued_by'      => $input['issued_by'],
            'issued_on'      => date('Y-m-d',strtotime($input['issued_on'])),
            'remarks'        => $input['remarks'],
            'status'         => $input['status'],
            'type'           => ($input['status']==1) ? 'ADMIN' : 'REQUEST',
        ]);
        return redirect()->route('certificate.index')->with(['status'=>'Certificate Updated successfully.']);
    }

    public function destroy($id)
    {
        $certificate = Certificate::where('id', $id)->first();
        $certificate->delete();
        return redirect()->route('certificate.index')->with(['status'=>'Certificate Deleted successfully.']);
    }
    
    public function getCertificate($id)
    {
        $certificate = Certificate::find($id);
        //return $certificate;
        
		$img = Image::make(public_path('uploads/certificate/base-certificate.jpg'));

        $img->text(strtoupper($certificate->student_name), 70, 450, function($font) {
            $font->file(public_path('uploads/font/Calibri-Bold.TTF'));
            $font->size(32);
            $font->color('#0c0c0c');
            $font->align('left');
            $font->valign('top');
            $font->angle(0);
        });
        
        $img->text('has successfully completed the internship requirements to be recognized as a certified Professional of:', 70, 500, function($font) {
            $font->file(public_path('uploads/font/Calibri-Regular.ttf'));
            $font->size(22);
            $font->color('#0c0c0c');
            $font->align('left');
            $font->valign('top');
            $font->angle(0);
        });
        
        $img->text(ucwords($certificate->course), 70, 550, function($font) {
            $font->file(public_path('uploads/font/Calibri-Bold.TTF'));
            $font->size(32);
            $font->color('#0c0c0c');
            $font->align('left');
            $font->valign('top');
            $font->angle(0);
        });
        
        $img->text('From: '.date('d M Y',strtotime($certificate->course_from)).' to '.date('d M Y',strtotime($certificate->course_to)).' | Registration Number: A2ITMH-'.$certificate->certificate_id, 70, 610, function($font) {
            $font->file(public_path('uploads/font/Calibri-Regular.ttf'));
            $font->size(22);
            $font->color('#0c0c0c');
            $font->align('left');
            $font->valign('top');
            $font->angle(0);
        });
        
        if($certificate->remarks != NULL){
            $img->text($certificate->remarks, 70, 670, function($font) {
                $font->file(public_path('uploads/font/Calibri-Regular.ttf'));
                $font->size(22);
                $font->color('#0c0c0c');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });
        }
        
        $name = str_replace(' ', '_', $certificate->student_name).'-'.$certificate->certificate_id;
        $path = public_path('uploads/certificate/'.$name.'.png');
        $img->save($path);
        return view('admin.pages.certificate.certificate',[
            'file_name' => $name
        ]);
    }

}
