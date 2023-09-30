<div class="containe-fluid" id="mobileappview">
    <div class="row">
        <div class="col-lg-6 whatsappdiv">
            <p class="text-center"><a href="https://wa.me/917415151523?text=Hi I am interested in A2IT Training. Please contact me as soon as possible"><img src="{{asset(config('app.prefix').'assets/img/whatsapp-icon2.gif')}}" width="40px" height="40px" alt="partner"><span>WhatsApp</span></a></p>
        </div>
        <div class="col-lg-6 callappdiv">
              <p class="text-center"><a href="tel:+917415151523"><img src="{{asset(config('app.prefix').'assets/img/callme.gif')}}" width="30px" height="30px" alt="partner"><span>Call Now<span></a></p>
        </div>
    </div>
</div>
<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-footer">
                    <h3>Contact Us</h3>
                    <ul class="footer-contact-info">
                        <li>C-124, Industrial Area, Phase 8, <br>Mohali- Punjab 160 071 – INDIA.</li>
                        <li><a href="tel:7814141400">(+91) 7814141400</a></li>
                        <li><a href="tel:7415151523">(+91) 7415151523</a></li>
                        <li><a href="mailto:info@a2itsoft.com">info@a2itsoft.com</a></li>
                    </ul>
                    
                    <ul class="social">
                        <li><a href="https://www.facebook.com/A2itonline/" target="_blank"><i class="icofont-facebook"></i></a></li>
                        <li><a href="https://twitter.com/a2itsoft" target="_blank"><i class="icofont-twitter"></i></a></li>
                        <li><a href="https://in.linkedin.com/company/zcc-group-a2itsoft" target="_blank"><i class="icofont-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/u/5/+ZccIndia" target="_blank"><i class="icofont-google-plus"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC_CFtLvMWkRuE93b99SloGQ" target="_blank"><i class="icofont-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single-footer">
                    <h3>Research</h3>
                    
                    <ul class="list">
                        <li><a href="/placements">Placements</a></li>
                        <li><a href="/why-a2it">Why A2IT</a></li>
                        <li><a href="/blog">Our Blog</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/free-app">Download Free APP</a></li>
                        <li><a href="/faq">FAQs</a></li>
                         <li><a href="https://app.a2itsoft.com/">Member Login</a></li>
                        <li><a href="https://play.google.com/store/apps/details?id=co.bran.fwxzc&hl=en_IN&gl=US"  target=”_blank”>Download "Android App"</a></li>
                        <li><a href="https://apps.apple.com/in/app/myinstitute/id1472483563" target=”_blank”>Download "iOS App"</a></li>
                        <li><a href="https://pages.razorpay.com/pl_GVVrbUCqKILjV6/view" STYLE="color:red; Font-weight:700;"  target=”_blank”><img src="{{asset(config('app.prefix').'assets/img/pay-now.png')}}" alt="Payment"> </a></li>
                    </ul>
                </div>

            </div>
            
            <div class="col-lg-2 col-md-6">
                <div class="single-footer">
                    <h3>Pages</h3>
                    <ul class="list">
                        <li><a href="/">Home</a></li>
                        <li><a href="/career">Career</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/all-categories">Courses</a></li>
                        <li><a href="/verify-certificate">Verify Certificate</a></li>
                         <li><a href="/international-certificate">International Certificate</a></li>
                        <li><a href="/contact">Contact</a></li> 
                        <li><a href="/partner-with-us">Partner with Us</a></li>
                        <li><a href="/training-registration">Training Registration</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="register-content">
                        <h3>Apply Scholarship</h3>
                        <h6>"Fill to Get upto 100% Scholarship"</h6>
                    <form method="POST" action="{{ route('inquiry.form') }}" style="margin-top:10px;">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                    {!! $errors->first('name', '<p style="color:red; font-size:14px;">:message</p>') !!}
                                </div>
                            </div>
                
                            
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                    {!! $errors->first('email', '<p style="color:red; font-size:14px; margin-bottom:-40px;">:message</p>') !!}
                                </div>
                            </div>
                               
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                    <input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" placeholder="Phone" required>
                                </div>
                            </div>
                             <div class="col-lg-12 col-sm-12">
                                        <div class="form-group  {{ $errors->has('course') ? 'has-error' : ''}}">
                                            <input type="text" name="course" class="form-control" placeholder="Course/Training" required>
                                        </div>
                                    </div>
                            
                            <input type="hidden" name="recaptcha" id="footer-recaptcha">
                            <div class="col-lg-12 col-md-12">
                                <button class="btn btn-primary" id="btn-validate-footer" type="submit">Apply</button>
                            </div>
                            
                        </div>
                    </form>
                   
                </div>

            </div>
        </div>
    </div>
    
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <p>Copyright <i class="icofont-copyright"></i> {{ date('Y') }} A2IT by <a href="http://a2itonline.com/" target="_blank" style="color: white">A2IT</a>. All rights reserved</p>
                    <div data-pro-badge-shopper-uuid=882aa4a2-b6c1-4c95-8bf7-e6aa5044dbb4 data-pro-badge-mode=light style="width:200px; margin-left: -10px"></div>
                </div>
                
                <div class="col-lg-5 col-md-5">
                    <ul>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-conditions">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

@push('captcha')
    grecaptcha.execute('6LejhKoUAAAAAEbSD2YBjtK8VyPa6HwpTjQmrLuI', {action: 'footer'}).then(function(token)
      {
        if(token){
            document.getElementById('footer-recaptcha').value = token;
        }
     });
@endpush
