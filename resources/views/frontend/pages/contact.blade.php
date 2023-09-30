@extends('frontend.layout.main')
@section('title','Contact')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 80px">Contact Us</h3>
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
            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-phone"></i>
                    </div>
                    
                    <div class="content">
                        <h4>Phone / Fax</h4>
                        <p><a href="tel:7415151523"> 7415151523</a></p>
                        <p><a href="tel:7814141400">7814141400</a></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-envelope"></i>
                    </div>
                    
                    <div class="content">
                        <h4>E-mail</h4>
                        <p><a href="mailto:info@a2itsoft.com"> info@a2itsoft.com</a></p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-google-map"></i>
                    </div>
                    
                    <div class="content">
                        <h4>Location</h4>
                        <p>C-124, Industrial Area, Phase 8, Mohali- Punjab 160 071 –  <span>INDIA.</span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 col-md-12">
                <!-- Map Area -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13720.105045841952!2d76.70479019807279!3d30.717662112553306!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee5fbc762811%3A0xc6d1a6a58b6b314d!2sA2IT+Pvt.+Ltd.+-+ZCC+Group!5e0!3m2!1sen!2sin!4v1533551272727" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- End Map Area -->
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="leave-your-message">
                    <h3>Leave Your Message</h3>
                    <p>If you have any questions about the services we provide simply use the form below. We try and respond to all queries and comments within 24 hours.</p>
                    
                    <div class="stay-connected">
                        <h3>Stay Connected</h3>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/A2itonline/" target="_blank">
                                    <i class="icofont-facebook"></i>
                                    
                                    <span>Facebook</span>
                                </a>
                            </li>
                            
                            <li>
                                <li><a href="https://www.youtube.com/channel/UC_CFtLvMWkRuE93b99SloGQ" target="_blank">
                                    <i class="icofont-youtube"></i>
                                    
                                    <span>Youtube</span>
                                </a>
                            </li>
                            
                            <li>
                                <li><a href="https://in.linkedin.com/company/zcc-group-a2itsoft" target="_blank">
                                    <i class="icofont-linkedin"></i>
                                    
                                    <span>Linkedin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8 col-md-12">
            <form id="contactForm" method="POST" action="{{ route('contact.store') }}">
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
                                <label for="message">Message*</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message"></textarea>
                            </div>
                        </div>
                        
                        <input type="hidden" name="recaptcha" id="contact-recaptcha">
                        
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Send Message</button>
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







