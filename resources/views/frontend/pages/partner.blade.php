@extends('frontend.layout.main')
@section('title','Partner with Us')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 80px">Partner with Us</h3>
            </div>
        </div>
    </div>
</div>
<h1>open indutrial training centre at your place</h1>
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
            
        
            <div class="col-lg-4 col-md-12">
                <div class="leave-your-message">
                    <h3>Partner with Us</h3>
                    <p>Partnership with A2IT gives organizations the ability to promote and distribute Microsoft Office Specialist, Microsoft Technology Associate, Adobe, International University Certifications, Tally and HPE Certification exams. To learn more about how to partner with us, fill in the below mentioned details and we will get back to you.</p>
                </div>
            </div>
            
            <div class="col-lg-8 col-md-12">
            <form id="contactForm" method="POST" action="{{ route('partnership.store') }}">
                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name">Name*</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}" required data-error="Please enter your name">
                                {!! $errors->first('name', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email')}}" required data-error="Please enter your email">
                                {!! $errors->first('email', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                <label for="number">Phone Number*</label>
                                <input type="text" class="form-control" name="phone" id="number"pattern="[0-9]{10}" value="{{ old('phone')}}" required data-error="Please enter your number">
                                {!! $errors->first('phone', '<p style="color:red; font-size:14px;">:message</p>') !!}
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="message">Any Message*</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message"></textarea>
                            </div>
                        </div>
                        
                        <input type="hidden" name="recaptcha" id="contact-recaptcha">
                        
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Apply for Franchise</button>
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






