@extends('frontend.layout.main')
@section('title','Inquire Course')
@section('content')
 <!-- Start Apply Area -->
 

 <section class="apply-area admission-area ptb-100">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="text">
                            <p>Course Inquiry</p>
                        </div>
                    </div>
                   
                    <div class="col-lg-6 col-md-12">
                        <div class="apply-form">
                            <h3>Call Me Back</h3>
                            <form method="POST" action="{{ route('inquiry.form') }}">
                                @csrf
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name')}}" required>
                                    {!! $errors->first('name', '<p style="color:red; font-size:14px; margin-bottom:-40px;">:message</p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email')}}" required>
                                    {!! $errors->first('email', '<p style="color:red; font-size:14px; margin-bottom:-40px;">:message</p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                    <input type="text" name="phone" class="form-control" placeholder="Your Phone"  pattern="[0-9]{10}" value="{{ old('phone')}}" required>
                                    {!! $errors->first('phone', '<p style="color:red; font-size:14px; margin-bottom:-40px;">:message</p>') !!}
                                </div>  
                                
                                 <input type="hidden" name="recaptcha" id="inquiry-recaptcha">
                                
                                <button type="submit" class="btn btn-primary">Apply Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Apply Area -->
@endsection

@push('captcha')
    grecaptcha.execute('6LejhKoUAAAAAEbSD2YBjtK8VyPa6HwpTjQmrLuI', {action: 'inquiry'}).then(function(token)
      {
        if(token){
            document.getElementById('inquiry-recaptcha').value = token;
        }
     });
@endpush