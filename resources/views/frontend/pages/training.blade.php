@extends('frontend.layout.main')
@section('title','Training Registration Form')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 80px">Training Registration Form</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
@if(session('status'))
<section class="padding-y-20 border-bottom border-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">

                <div class="alert bg-warning text-white px-4 py-3 alert-dismissible fade show" role="alert">
                    <strong> Thanks</strong> We got your message we will revert as soon as possible.
                    <button type="button" class="close font-size-14 absolute-center-y" data-dismiss="alert">
                        <i class="ti-close"></i>
                    </button>
                </div>

            </div> <!-- END col-lg-8-->
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>
@endif
<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="leave-your-message">
                    <h3>TRAINING REGISTRATION FORM</h3>
                </div>    
            </div>
            
            <div class=" col-md-12">
            <form id="contactForm" method="POST" action="{{ route('webtraining.store') }}">
                @csrf
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name">Name*</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}" required data-error="Please enter your name">
                                {!! $errors->first('name', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email')}}" required data-error="Please enter your email">
                                {!! $errors->first('email', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                <label for="number">Phone Number*</label>
                                <input type="text" class="form-control" name="phone" id="number"pattern="[0-9]{10}" value="{{ old('phone')}}" required data-error="Please enter your number">
                                {!! $errors->first('phone', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('father_name') ? 'has-error' : ''}}">
                                <label for="number">Father Name*</label>
                                <input type="text" class="form-control" name="father_name" value="{{ old('father_name')}}" required data-error="Please enter your Father Name">
                                {!! $errors->first('phone', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>
                        

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('father_name') ? 'has-error' : ''}}">
                                <label for="number">Training/Internship</label>
                                <input type="text" class="form-control" name="training_intrest" value="{{ old('training_intrest')}}" placeholder="Course name you are interested" required data-error="Please enter Training Name">
                                {!! $errors->first('training_intrest', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                                <label for="number">Address*</label>
                                <textarea class="form-control" name="address" required data-error="Please enter your Address">{{ old('address')}}</textarea>
                                {!! $errors->first('training', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('college') ? 'has-error' : ''}}">
                                <label>Uni/College Name*</label>
                                <input type="text" class="form-control" name="college_name" value="{{ old('college')}}" required data-error="Please enter your College Name">
                                {!! $errors->first('college', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('college_semester') ? 'has-error' : ''}}">
                                <label>Branch & Semester*</label>
                                <input type="text" class="form-control" name="college_semester" value="{{ old('college_semester')}}" required data-error="Please enter your College Semester">
                                {!! $errors->first('college_semester', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('college_roll') ? 'has-error' : ''}}">
                                <label> Roll Number*</label>
                                <input type="text" class="form-control" name="college_roll" value="{{ old('college_roll')}}" required data-error="Please enter your College Roll Number">
                                {!! $errors->first('college_roll', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('training_duration') ? 'has-error' : ''}}">
                                <label>Training/Intership Duration*</label>
                                <input type="text" class="form-control" name="training_duration" value="{{ old('training_duration')}}" required placeholder="(in Days/Months)" data-error="Please enter your training duration">
                                {!! $errors->first('training_duration', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('training_start') ? 'has-error' : ''}}">
                                <label>Training Starting Date*</label>
                                <input type="date" class="form-control" name="training_start" value="{{ old('training_start')}}" required data-error="Please enter your training starting date">
                                {!! $errors->first('training_start', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('training_end') ? 'has-error' : ''}}">
                                <label>Training End Date*</label>
                                <input type="date" class="form-control" name="training_end" value="{{ old('training_end')}}" required data-error="Please enter your training end date">
                                {!! $errors->first('training_end', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>

                        <input type="hidden" name="recaptcha" id="contact-recaptcha">
                        
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">APPLY</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
@endsection

@push('captcha')
    grecaptcha.execute('6LejhKoUAAAAAEbSD2YBjtK8VyPa6HwpTjQmrLuI', {action: 'contact'}).then(function(token)
      {
        if(token){
            document.getElementById('contact-recaptcha').value = token;
        }
     });
@endpush