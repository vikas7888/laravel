<?php
    use App\Models\Category;
    use App\Models\Course;
?>
@extends('frontend.layout.main')
@push('title')
    <title>Best Industrial Training Company in Mohali Chandigarh | A2IT</title>
@endpush
@section('content')

<style type="text/css">
.main-part{
width:80%;
margin:0 auto;
text-align: center;
padding: 0px 5px;
}
.cpanel{
width:32%;
display: inline-block;
background-color:#34495E;
color:#fff;
margin-top: 50px;
}
.icon-part i{
font-size: 30px;
padding:10px;
border:1px solid #fff;
border-radius:50%;
margin-top:-25px;
margin-bottom: 10px;
background-color:#34495E;
}
.icon-part p{
margin:0px;
font-size: 20px;
padding-bottom: 10px;
}
.card-content-part{
background-color: #2F4254;
padding: 5px 0px;
}
.cpanel .card-content-part:hover{
background-color: #5a5a5a;
cursor: pointer;
}
.card-content-part a{
color:#fff;
text-decoration: none;
}
.cpanel-green .icon-part,.cpanel-green .icon-part i{
background-color: #16A085;
}
.cpanel-green .card-content-part{
background-color: #149077;
}
.cpanel-orange .icon-part,.cpanel-orange .icon-part i{
background-color: #F39C12;
}
.cpanel-orange .card-content-part{
background-color: #DA8C10;
}
.cpanel-blue .icon-part,.cpanel-blue .icon-part i{
background-color: #2980B9;
}
.cpanel-blue .card-content-part{
background-color:#2573A6;
}
.cpanel-red .icon-part,.cpanel-red .icon-part i{
background-color:#E74C3C;
}
.cpanel-red .card-content-part{
background-color:#CF4436;
}
.cpanel-skyblue .icon-part,.cpanel-skyblue .icon-part i{
background-color:#8E44AD;
}
.cpanel-skyblue .card-content-part{
background-color:#803D9B;
}
</style>


<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="homemodal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body modal-bg">
            <div class="container">
                <div class="row marginrowcss">
                    <div class="col-lg-12 col-md-12">
                        
                        <button type="button" data-dismiss="modal" style="
                                position:fixed;
                                background-color: #4CAF50;
                                z-index:99;
                                border: none;
                                color: white;
                                padding: 10px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;`
                                font-size: 12px;
                                border-radius: 90%;
                                right: 5px !important;
                              ">X</button>
                        <div class="row popupbgimgrow">
                            <div class="col-lg-6">
                        <div class="modal-content1">
                            <div class="heading" style="margin-top:20px;">
                               <h2 style="color:black;"><b>Apply For Scholarship</b></h2>
                                <p style="color:black; font-size:20px; font-weight: 400 !important; margin-top: 2px;">"Fill to get upto 100% scholarship"</p>
                                
                            </div>
                            <form method="POST" action="{{ route('home.pop')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                            {!! $errors->first('name', '<p style="color:red; font-size:14px;">:message</p>') !!}
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                            {!! $errors->first('email', '<p style="color:red; font-size:14px;">:message</p>') !!}
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                            <input type="phone" name="phone" class="form-control" placeholder="Phone Number" required>
                                            {!! $errors->first('phone', '<p style="color:red; font-size:14px;">:message</p>') !!}
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="course" class="form-control" placeholder="Course/Training" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control" placeholder="City" required>
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" name="recaptcha" id="popup-recaptcha">
                                   
                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-danger" type="submit">Apply</button>
                                        
                                    </div>
                                    
                                </div>
                            </form>
                          
                        </div>
                        </div>
                        <div class="col-lg-6 popupbgimg">
                            <h2 class="text-center"><b>Get In Touch</b></h2>
                            <p class="text-center">Let's talk About your ideas and concept.</p>
                            <div class="row text">
                                <div class="col-lg-2"><i class="fa fa-phone"></i></div>
                                <div class="col-lg-10">
                                    <p class="gettouchus"><a href="tel:7415151523">(+91) 7415151523</a> <br><span>Mon-Sat 9am-6pm</span></p>
                                </div>
                            </div>
                             <div class="row text">
                                <div class="col-lg-2"><i class="fa fa-whatsapp"></i></div>
                                <div class="col-lg-10">
                                    <p class="gettouchus"><a href="http://api.whatsapp.com/send?phone=917415151523">917415151523</a> <br><span>Whatsapp</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"><i class="fa fa-envelope"></i></div>
                                <div class="col-lg-10">
                                    <p class="gettouchus"><a href="mailto:info@a2itsoft.com">info@a2itsoft.com<br><a><span>online support</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"><i class="fa fa-address-book-o"></i></div>
                                <div class="col-lg-10">
                                    <p class="gettouchus">Mohali, Chandigarh<br><span>C-124, Industrial Area, Phase 8</span></p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>
        </div>  
      </div>
    </div>   
</div>
  
<!-- Start Main Banner Area -->
<section class="newsletter-area ptb-100">
    <div class="container">
        <div class="newsletter front-main-area-home-hed">
            <h1 class="text-center"><b>Learn anywhere anytime with A2IT <br> iOS and Android App</b></h1>
            <h4 class="text-center">Now Get Free Video Courses, E-Books, Event Updates & Class Notes Anywhere Anytime </h4>
            <p class="text-center">Free Download Educational App with Step-by-Step Guide To Learn or Teach in Smarter Way</p>
            <a href="https://play.google.com/store/apps/details?id=co.bran.fwxzc&hl=en_IN&gl=US" class="linkhogh12"  target="_blank"><img src="{{asset(config('app.prefix').'assets/img/google2-btn.png')}}"></a>
            <a href="https://apps.apple.com/in/app/myinstitute/id1472483563" class="linkhogh13"  target="_blank"><img src="{{asset(config('app.prefix').'assets/img/apple-btn.png')}}"></a>
            <h1 class="text-center newsheadmlast"><b>A2IT - You Dream : We Build</b></h1>   
        </div>
    </div>
</section>
<!-- End Main Banner Area -->

<!--main video-->
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-lg-6 a2itadvertise">
                <h1 class="text-center">Download Our Free Video Courses</h1>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT  Free Video Courses of CCNA.<a href="https://www.a2itsoft.com/public/assets/Free_Courses_data/CCNAFreeFullCourse.pdf"  target="_blank" class="free-video-courses"> Download Now.</a></p>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT Free Video Courses of C & C++. <a href="#"  target="_blank" class="free-video-courses"> Download Now.</a></p>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT Free Video Courses of HTML. <a href="#"  target="_blank" class="free-video-courses"> Download Now.</a></p>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT Free Video Courses of CSS. <a href="#"  target="_blank" class="free-video-courses"> Download Now.</a></p>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT Free Video Courses of JAVA SCRIPT. <a href="#"  target="_blank" class="free-video-courses"> Download Now.</a></p>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT Free Video Courses of BOOTSTRAP. <a href="#"  target="_blank" class="free-video-courses">  Download Now.</a></p>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT Free Video Courses of PYTHON. <a href="#"  target="_blank" class="free-video-courses">Download Now.</a></p>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT Free Video Courses of PHP. <a href="#"  target="_blank" class="free-video-courses"> Download Now.</a></p>
                <p class=""><i class="fa fa-arrows"></i> Now Get A2IT Free Video Courses of REACT JS. <a href="#"  target="_blank" class="free-video-courses"> Download Now.</a></p>

            <div class="view-all text-center">
                    <a href="tel:+917415151523" class="btn btn-primary">Contact us<i class="icofont-rounded-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <center>
                     <div class="single-about project-course videobghomes3">
                    <h3><br><br> <a href="https://www.youtube.com/embed/PmrE1xeg7Xk?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                </div>
            </center>
            </div>
        </div>
    </div>
<!--main video-->

<!-- Start App area-->
<div class="main-part" style="margin-bottom:10px">
    
<div class="cpanel">
    <div class="icon-part">
    <i class="fa fa-users" aria-hidden="true"></i><br>
    <small class="summerinhome">Summer Internship</small>
    <p >Get upto 80% discount</p>
    </div>
    <div class="card-content-part">
    <a href="https://a2itsoft.com/apply-summer-internship">More Details </a>
    </div>
</div>

<div class="cpanel cpanel-green">
    <div class="icon-part">
    <i class="fa fa-graduation-cap" aria-hidden="true"></i><br>
    <small class="summerinhome">Six Months Internship</small>
    <p> Get upto 80% discount</p>
    </div>
    <div class="card-content-part">
    <a href="https://a2itsoft.com/six-months-internship">More Details </a>
    </div>
</div>

<div class="cpanel cpanel-orange">
    <div class="icon-part">
    <i class="fa fa-laptop" aria-hidden="true"></i><br>
    <small class="summerinhome">Regular Courses</small>
    <p>Get upto 80% discount</p>
    </div>
    <div class="card-content-part">
    <a href="https://www.a2itsoft.com/regular-course">More Details </a>
    </div>
</div>

<div class="cpanel cpanel-blue">
    <div class="icon-part">
    <i class="fa fa-address-card-o" aria-hidden="true"></i><br>
    <small class="summerinhome">Verify Your Certificate</small>
    <p>Online Verification</p>
    </div>
    <div class="card-content-part">
    <a href="https://www.a2itsoft.com/verify-certificate">Verify Certificate</a>
    </div>
</div>

<div class="cpanel cpanel-red">
    <div class="icon-part">
    <i class="fa fa-certificate" aria-hidden="true"></i><br>
    <small class="summerinhome">Apply Your Certificate</small>
    <p>Apply Online</p>
    </div>
    <div class="card-content-part">
    <a href="https://www.a2itsoft.com/verify-certificate?type=apply">Apply Certificate </a>
    </div>
</div>

<div class="cpanel cpanel-skyblue">
    <div class="icon-part">
    <i class="fa fa-cloud-download" aria-hidden="true"></i><br>
    <small class="summerinhome">Download A2IT App </small>
    <p>Android & IOS</p>
    </div>
    <div class="card-content-part">
    <a href="https://www.a2itsoft.com/free-app">Download App</a>
    </div>
</div>

<div class="cpanel cpanel-orange">
    <div class="icon-part">
    <i class="fa fa-flag-checkered" aria-hidden="true"></i><br>
    <small class="summerinhome">International Certifcate</small>
    <p>Microsoft Autodesk</p>
    </div>
    <div class="card-content-part">
    <a href="https://www.a2itsoft.com/international-certification">Apply Now</a>
    </div>
</div>

<div class="cpanel">
    <div class="icon-part">
    <i class="fa fa-wifi" aria-hidden="true"></i><br>
    <small class="summerinhome">Domain & Hosting</small>
    <p>Book With A2IT Server</p>
    </div>
    <div class="card-content-part">
    <a href="https://www.a2itlive.in">Book Now </a>
    </div>
</div>

<div class="cpanel cpanel-green">
    <div class="icon-part">
    <i class="fa fa-money" aria-hidden="true"></i><br>
    <small class="summerinhome">A2IT Online Store</small>
    <p>Learn With Video Courses</p>
    </div>
    <div class="card-content-part">
    <a href="https://fwxzc.courses.store/">Visit Now</a>
    </div>
</div>

</div>
<!-- End App area-->

     <!-- start social media line-->     
<div class="container-fluid">
    <div class="row" id="sociallinksmedia">
        <div class="text-center" style="background-color:#3A589B"><a href="https://www.facebook.com/A2itonline"><i class="fa fa-facebook"> <span> Facebook (20K)</span></i></a></div>
        <div class="text-center" style="background-color:#08ACEE"><a href="https://twitter.com/a2itsoft"><i class="fa fa-twitter"><span> Twitter (2K)</span></i></a></div>
        <div class="text-center" style="background-color:#007BB6"><a href="https://in.linkedin.com/company/zcc-group-a2itsoft"><i class="fa fa-linkedin"><span> Linkedin (5K)</span></i></a></div>
        <div class="text-center" style="background-color:#EA4335"><a href="https://www.youtube.com/channel/UC_CFtLvMWkRuE93b99SloGQ"><i class="fa fa-youtube"><span>Youtube (10K)</span></i></a></div>
        <div class="text-center" style="background-color:#CA2127"><a href="https://a2itsoft.com/free-app"><i class="fa fa-google"><span>A2IT App (10K)</span></i></a></div>
    </div>
</div>
<!-- end social media line-->

<div class="container-fluide videomainhome">
    <div class="row">
        <div class="col-lg-6">
            <center>
            <div class="single-about project-course videobghome">
                    <h3><br><br> <a href="https://youtube.com/embed/t7uLIK8SnME?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
               </div>
            </center>
        </div>
        <div class="col-lg-6">
            <center>
            <div class="single-about project-course videobghome2">
                    <h3><br><br> <a href="https://youtube.com/embed/Kmi6t5OJU1U?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
               </div>
            </center>
        </div>
    </div>
</div>
     

<!-- End App Area-->
<!-- Start Popular Courses Area -->
<section class="popular-courses-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3>Popular Categories</h3>   
        </div>
        <div class="row">
            @foreach($cate as $cat)
            <div class="col-lg-3 col-md-6">
                <div class="single-courses-item">
                    <a href="/course/{{ $cat->slug }}">
                    <div class="courses-img">
                        <img src="{{asset(config('app.prefix').'uploads/').'/'.$cat->banner}}" alt="course">
                    </div>
                    <div class="courses-content">
                    <h3><a href="/course/{{ $cat->slug }}">{{ strtoupper($cat->name)}}</a></h3>      
                    </div>   
                    </a>
                    <p class="text-center">
                    <span class="fa fa-star checkedstr"></span>
                    <span class="fa fa-star checkedstr"></span>
                    <span class="fa fa-star checkedstr"></span>
                    <span class="fa fa-star checkedstr"></span>
                    <span class="fa fa-star checkedstr"></span>
                    </p>
                    
                </div>
            </div>
            @endforeach
            <div class="col-lg-12 col-md-12">
                <div class="view-all text-center">
                    <a href="/all-categories" class="btn btn-primary">View All Categories <i class="icofont-rounded-double-right"></i></a>
                </div>
            </div>
        
        </div>
    </div>
</section>
<!-- End Popular Courses Area -->

 <!-- Start Partner Area -->
 <div class="partner-area ptb-100" id="mainplacement">
        <div class="container">
            <div class="section-title">
                <h3>Student Placements</h3>
                <p>A2IT offers technical courses that build your 
                career and make you "employable". this ensures that students get 
                a better understanding of the corporate world and are prepared to work in the industry. The Institute focuses
                on student employment in the industry, so a robust "Employment Assistance System" has been established for the students.</p>
            </div>
        </div>

        <div class="container-fluid" id="mainplacement2">
            <div class="row m-0">
                <div class="partner-slider">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                        <div class="single-about project-course caputure1">
                                            <h3><br><br> <a href="https://youtube.com/embed/znJZXhbOT6w?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure2">
                                            <h3><br><br> <a href="https://youtube.com/embed/C5FidDYvmtA?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure3">
                                            <h3><br><br> <a href="https://youtube.com/embed/VKrI0DBZpAc?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure4">
                                            <h3><br><br> <a href="https://youtube.com/embed/7xXZyGUm-is?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                   <div class="single-about project-course caputure5">
                                            <h3><br><br> <a href="https://youtube.com/embed/d72tsc0Fqoo?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure6">
                                            <h3><br><br> <a href="https://youtube.com/embed/LW8jonIfoxM?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure7">
                                            <h3><br><br> <a href="https://youtube.com/embed/J4T_jzBR66A?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure8">
                                            <h3><br><br> <a href="https://youtube.com/embed/3A5xR6BqPXE?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                   <div class="single-about project-course caputure9">
                                            <h3><br><br> <a href="https://youtube.com/embed/iAeAuMwHfF4?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                   <div class="single-about project-course caputure10">
                                            <h3><br><br> <a href="https://youtube.com/embed/AyZYQiasjc4?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure11">
                                            <h3><br><br> <a href="https://youtube.com/embed/KiTBx3Z_sUI?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                  <div class="single-about project-course caputure12">
                                            <h3><br><br> <a href="https://youtube.com/embed/dUkcbyJFv_I?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure13">
                                            <h3><br><br> <a href="https://youtube.com/embed/M9V7-WFampE?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                    <div class="single-about project-course caputure14">
                                            <h3><br><br> <a href="https://youtube.com/embed/HuVgcgfypDs?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell caputure">
                                   <div class="single-about project-course caputure15">
                                            <h3><br><br> <a href="https://youtube.com/embed/_Pi5NFHo2zg?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End placements Area -->
    
    <!-- Start placements Area mobile views-->
    <div class="continer mobileviewvideos">
        <div class="row">
            <div class="col-lg-4">
                <div class="caputure1">
                    <h3><br><br> <a href="https://youtube.com/embed/znJZXhbOT6w?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="caputure2">
                    <h3><br><br> <a href="https://youtube.com/embed/C5FidDYvmtA?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="caputure3">
                    <h3><br><br> <a href="https://youtube.com/embed/VKrI0DBZpAc?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="caputure4">
                    <h3><br><br> <a href="https://youtube.com/embed/7xXZyGUm-is?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                </div>
            </div>
             <div class="col-lg-4">
                <div class="caputure5">
                    <h3><br><br> <a href="https://youtube.com/embed/d72tsc0Fqoo?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                </div>
            </div>
             <div class="col-lg-4">
                <div class="caputure6">
                    <h3><br><br> <a href="https://youtube.com/embed/LW8jonIfoxM?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                </div>
            </div>
             <div class="col-lg-4">
                <div class="caputure7">
                    <h3><br><br> <a href="https://youtube.com/embed/J4T_jzBR66A?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a></h3>
                </div>
            </div>
        </div>
    </div>
<!-- End placements Area mobile views-->

<section class="featured-courses ptb-100">
    <div class=container>
        <div class=section-title>
            <h3>Featured Courses</h3>
            <h2>Career- Oriented 45 days 6 Months Industrial Training In Mohali Chandigarh With Placement Assistance &
            also you can apply for free Internship.</h2>
        </div>
        
        <div class=row>
            <div class="col-lg-6 col-md-6">
                
                <div class="single-courses single-courses13">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="icon bg-1"> <i class=icofont-pen-holder></i> </div>
                    </div>
                    <div class="col-lg-10 maininpad">
                        <h3>Internship</h3>
                    <p class="subp">A2IT Private Limited is a leading company offering pioneering solutions in Network Integration, 
                    Mechanical Engineering Solutions, Software Engineering Solutions, AutomationEngineering Solutions, Application Development, 
                    Enterprise Business Solutions, and Business Applications and Consulting pan globe.</p><a href="https://a2itsoft.com/training-registration" class=read-more> <span class=left><i
                                class=icofont-rounded-double-right></i></span> Apply Now Free <span class=right><i
                                class=icofont-rounded-double-right></i></span> </a>
                    </div>
                </div>
                 </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class=single-courses>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="icon bg-2"> <i class=icofont-architecture-alt></i> </div>
                        </div>
                        <div class="col-lg-10 maininpad">
                                <h3>Training</h3>
                                <p class="subp">We are also an established organization catering to professional and career-oriented industrial training 
                                programs in Chandigarh, Mohali suburbs across specializations for 19+ years with Live Projects.We are providing the best
                                industrial training in Mohali from best-in-industry trainers and a fast-paced environment to help you 
                                grow to your full potential. 
                                </p><a href="https://a2itsoft.com/training-registration" class=read-more> <span class=left><i
                                class=icofont-rounded-double-right></i></span> Apply Now Free <span class=right><i
                                class=icofont-rounded-double-right></i></span> </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 maininpad1">
                <div class=single-courses>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="icon bg-3"> <i class=icofont-database></i> </div>
                        </div>
                        <div class="col-lg-10 maininpad">
                            <h3>Career</h3>
                    <p class="subp">While others assure their finances through industrial training, we aim to provide you with modern 
                    of learning to help strive in the long corporate-run.Here what makes you stand out from the competition.
                    Get mentored by professionals bearing 25+ years of expertise in their demonstrated fields in designing & 
                    development. 
                    specialization.</p><a href="https://a2itsoft.com/career" class=read-more> <span class=left><i
                                class=icofont-rounded-double-right></i></span> Apply for JOB <span class=right><i
                                class=icofont-rounded-double-right></i></span> </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 maininpad1">
                <div class="single-courses single-courses13">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="icon bg-4"> <i class=icofont-fax></i> </div>
                        </div>
                        <div class="col-lg-10 maininpad">
                             <h3>Project Management</h3>
                                <p class="subp">We are an ever-growing hub of industry-specific experts helping aspirants to secure their future in IT & Digital World competency. 
                                learn on Live clients projects like CRM, Lead management software, Digital marketing, web developnt, software development etc. Depending upon your needs, we are offering specialized industrial training programs with varying expertise and tenure.</p><a href="https://a2itsoft.com/training-registration" class=read-more> <span class=left><i
                                            class=icofont-rounded-double-right></i></span> Apply Now Free <span class=right><i
                                            class=icofont-rounded-double-right></i></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Tfab Area -->
<section class="popular-courses-area ptb-20">
    <div class="container">
        <div class="section-title">
            <h3>Popular Courses</h3>   
        </div> 
        <div class="row">
            <div class="course-details-tabs">
                <ul id="tabs">
                    <li class="active" id="tab_1">Projects</li>
                    <li class="inactive" id="tab_2">Web Development</li>
                    <li class="inactive" id="tab_3">Networking</li>
                    <li class="inactive" id="tab_4">Programming</li>
                    <li class="inactive" id="tab_5">Marketing</li>
                </ul> 
                <div class="content show" id="tab_1_content">
                    <div class="row">
                        <?php
                         $course_nt = Course::with('category')->where('category_id','46')->take(8)->get();
                            ?>
                        @foreach($course_nt as $course)
                            <div class="col-lg-3 col-md-6">
                                <div class="single-courses-item">
                                    <a href="/course/{{ $course->category->slug }}">
                                    <div class="courses-img">
                                        <img src="{{asset(config('app.prefix').'uploads/').'/'.$course->banner}}" alt="course">
                                    </div>
                                    <div class="courses-content">
                                    <h3><a href="/course/{{ $course->category->slug }}/{{ $course->slug }}">{{ strtoupper($course->name)}}</a></h3>     
                                    </div> 
                                    </a>  
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="content" id="tab_2_content">
                    <div class="row">
                            <?php
                            $course_wb = Course::with('category')->where('category_id','16')->take(8)->get();
                               ?>
                           @foreach($course_wb as $course)
                               <div class="col-lg-3 col-md-6">
                                   <div class="single-courses-item">
                                        <a href="/course/{{ $course->category->slug }}">
                                       <div class="courses-img">
                                           <img src="{{asset(config('app.prefix').'uploads/').'/'.$course->banner}}" alt="course">
                                       </div>
                                       <div class="courses-content">
                                       <h3><a href="/course/{{ $course->category->slug }}/{{ $course->slug }}">{{ strtoupper($course->name)}}</a></h3>     
                                       </div> 
                                        </a>  
                                   </div>
                               </div>
                           @endforeach
                        
                    </div>
                </div>
                <div class="content" id="tab_3_content">
                    <div class="row">
                            <?php
                            $course_cb = Course::with('category')->where('category_id','15')->take(8)->get();
                                ?>
                            @foreach($course_cb as $course)
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-courses-item">
                                        <a href="/course/{{ $course->category->slug }}">
                                        <div class="courses-img">
                                            <img src="{{asset(config('app.prefix').'uploads/').'/'.$course->banner}}" alt="course">
                                        </div>
                                        <div class="courses-content">
                                        <h3><a href="/course/{{ $course->category->slug }}/{{ $course->slug }}">{{ strtoupper($course->name)}}</a></h3>     
                                        </div>  
                                        </a> 
                                    </div>
                                </div>
                            @endforeach
                        
                    </div>
                </div>
                <div class="content" id="tab_4_content">
                    <div class="row">
                            <?php
                            $course_pg = Course::with('category')->where('category_id','19')->take(8)->get();
                                ?>
                            @foreach($course_pg as $course)
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-courses-item">
                                        <a href="/course/{{ $course->category->slug }}">
                                        <div class="courses-img">
                                            <img src="{{asset(config('app.prefix').'uploads/').'/'.$course->banner}}" alt="course">
                                        </div>
                                        <div class="courses-content">
                                        <h3><a href="/course/{{ $course->category->slug }}/{{ $course->slug }}">{{ strtoupper($course->name)}}</a></h3>     
                                        </div>
                                        </a>   
                                    </div>
                                </div>
                            @endforeach
                        
                    </div>
                </div>
                <div class="content" id="tab_5_content">
                    <div class="row">
                            <?php
                                $course_mt = Course::with('category')->where('category_id','37')->take(8)->get();
                            ?>
                            @foreach($course_mt as $course)
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-courses-item">
                                        <a href="/course/{{ $course->category->slug }}">
                                        <div class="courses-img">
                                            <img src="{{asset(config('app.prefix').'uploads/').'/'.$course->banner}}" alt="course">
                                        </div>
                                        <div class="courses-content">
                                        <h3><a href="/course/{{ $course->category->slug }}/{{ $course->slug }}">{{ strtoupper($course->name)}}</a></h3>     
                                        </div>
                                        </a>   
                                    </div>
                                </div>
                            @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Tab Area -->

<!-- Start Fun Facts Area -->
<section class="fun-facts-area facts-bg-two ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="fun-fact">
                    <div class="icon bg-1">
                        <img src="{{asset(config('app.prefix').'assets/img/icon5.png')}}" alt="icon">
                    </div>
                    <h3><span class="count">19</span>+</h3>
                    <h5>years experience-Quality education</h5>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3">
                <div class="fun-fact">
                    <div class="icon bg-2">
                        <img src="{{asset(config('app.prefix').'assets/img/icon2.png')}}" alt="icon">
                    </div>
                    
                    <h3><span class="count">50</span>+</h3>
                    <h5>Expert Trainers – online certificate verification</h5>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3">
                <div class="fun-fact">
                    <div class="icon bg-3">
                        <img src="{{asset(config('app.prefix').'assets/img/icon3.png')}}" alt="icon">
                    </div>
                    
                    <h3><span class="count">500</span>+</h3>
                    <h5>Globally Recognized Certifications </h5>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3">
                <div class="fun-fact">
                    <div class="icon bg-4">
                        <img src="{{asset(config('app.prefix').'assets/img/icon4.png')}}" alt="icon">
                    </div>
                    
                    <h3><span class="count">20</span>+</h3>
                    <h5>International Educational partners</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3>Testimonials</h3>
        </div>
    </div>
    
    <div class="row m-0">
        <div class="testimonials-slider" style="width: 65%; margin: 0 auto;">
            
            @foreach ($testimonials as $testimonial)
                <div class="testimonial">
                    <div class="pic">
                        <img src="{{asset(config('app.prefix').'uploads/testimonial/'.$testimonial->image)}}" alt="">
                    </div>
                    <p class="description">
                        {{ $testimonial->reviews }}
                    </p>
                    <h3 class="title">{{ $testimonial->name }}</h3>
                    <p class="text-center">
                    <span class="fa fa-star checkedstr"></span>
                    <span class="fa fa-star checkedstr"></span>
                    <span class="fa fa-star checkedstr"></span>
                    <span class="fa fa-star checkedstr"></span>
                    <span class="fa fa-star checkedstr"></span>
                    </p>
                </div>
            @endforeach
            
        </div>
    </div>
</section>
<!-- End Testimonials Area -->

 <!-- Start Partner Area -->
 <div class="partner-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h3>Our key Supporters</h3>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row m-0">
                <div class="partner-slider">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/airtel.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/godrej.jpg')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/hdfc.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/reliancejio.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/microsoft.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/philips.jpg')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/tech_mahindra.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/lnt.jpg')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/infosys.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/jaypee.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/genpact.jpg')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/connect.jpg')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/cognizant.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/byju.jpg')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-partner">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset(config('app.prefix').'assets/img/companies/accenture.png')}}" alt="partner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->


<!-- Start NewsLetter Area -->
<section class="newsletter-area ptb-100">
    <div class="container">
        <div class="newsletter">
            <h3>Learn anywhere with A2IT </br>iOS and Android App</h3>
            <p>Now Get Free Video Courses, E-Books, Event Updates & Class Notes Anywhere Anytime </p>
            <a href="https://play.google.com/store/apps/details?id=co.bran.fwxzc&hl=en_IN&gl=US" class="linkhogh12" target="_blank"><img src="{{asset(config('app.prefix').'assets/img/google2-btn.png')}}"></a>
               <a href="https://apps.apple.com/in/app/myinstitute/id1472483563" class="linkhogh13" target="_blank"><img src="{{asset(config('app.prefix').'assets/img/apple-btn.png')}}"></a>
                
        </div>
    </div>
</section>
<!-- End NewsLetter Area -->
@endsection

@push('styles')
<style>
.testimonial{
    padding: 70px 30px 50px;
    margin: 50px 50px 30px;
    border: 1px solid #ea816b;
    position: relative;
}
.testimonial .pic{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 5px solid #c7373c;
    overflow: hidden;
    margin: 0 auto;
    position: absolute;
    top: -50px;
    left: 0;
    right: 0;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}
.testimonial .description{
    font-size: 15px;
    color: #5e595b;
    line-height: 27px;
    text-align: center;
    margin: 0;
    position: relative;
}

.testimonial .title{
    display: inline-table;
    padding: 10px;
    margin: 0 auto;
    background: #fff;
    border: 1px solid #ea816b;
    font-size: 20px;
    font-weight: 700;
    color: #c7373c;
    letter-spacing: 1px;
    text-transform: uppercase;
    position: absolute;
    bottom: -22px;
    left: 0;
    right: 0;
}
.testimonial .post{
    font-size: 15px;
    color: #671a36;
}

@media only screen and (max-width: 479px){
    .testimonial{ padding: 70px 10px 30px; }
    .testimonial .description:before{ top: -20px }
    .testimonial .title{ font-size: 12px; }
    .testimonial .post{ font-size: 11px; }
}

.modal-bg {
        background:#80bdf4;
    }

.modal-content1 {
padding: 25px;
text-align: center;
box-shadow: 0px 15px 30px 0px rgba(0,0,0,0.1);
max-width: 550px;
margin: 0 auto;
}
.modal-content1 .heading {
	color: #fff;
	text-align: center;
	padding: 15px 0;
    background: #e60c3d;
	font-weight: 600;
	font-size: 20px;
	margin-bottom: 30px;
}
.modal-content1 .form-control {
	border: 1px solid #eee;
}
.modal-content1 .btn {
	display: block;
	width: 100%;
	text-transform: uppercase;

}
.modal-content1 h4 {
	color: #777777;
	margin-top: 20px;
	font-size: 18px;
	font-weight: 400;
}
.modal-content1 h4 a {
	text-decoration: underline;
}
</style>

<meta name="title" content="Best Industrial Training Company in Mohali & Chandigarh | A2IT">
<meta name="description" content="A2IT Company is the best industrial training company in Mohali & Chandigarh. Live project based 6 weeks/ months industrial training by our IT Professional.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://a2itsoft.com/">
<meta property="og:title" content="Best Industrial Training Company in Mohali & Chandigarh | A2IT">
<meta property="og:description" content="A2IT Company is the best industrial training company in Mohali & Chandigarh. Live project based 6 weeks/ months industrial training by our IT Professional.">


<!-- Twitter -->
<meta property="twitter:url" content="https://a2itsoft.com/">
<meta property="twitter:title" content="Best Industrial Training Company in Mohali & Chandigarh | A2IT">
<meta property="twitter:description" content="A2IT Company is the best industrial training company in Mohali & Chandigarh. Live project based 6 weeks/ months industrial training by our IT Professional.">

<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "A2IT Pvt. Ltd.",
  "alternateName": "A2IT",
  "url": "https://www.a2itsoft.com",
  "logo": "https://www.a2itsoft.com/public/assets/img/a2it.png",
  "sameAs": [
    "https://www.facebook.com/A2itonline/",
    "https://twitter.com/a2itsoft",
    "https://www.youtube.com/channel/UC_CFtLvMWkRuE93b99SloGQ"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "A2IT Pvt. Ltd.",
  "image": "https://www.a2itsoft.com/public/assets/img/a2it.png",
  "@id": "",
  "url": "https://www.a2itsoft.com/",
  "telephone": "7814141400",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "C-124, Industrial Area, Phase 8",
    "addressLocality": "Mohali",
    "postalCode": "160071",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 30.7141106,
    "longitude": 76.7086923
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Monday",
    "opens": "09:00",
    "closes": "19:00"
  },
  "sameAs": [
    "https://www.facebook.com/A2itonline/",
    "https://twitter.com/a2itsoft",
    "https://www.youtube.com/channel/UC_CFtLvMWkRuE93b99SloGQ"
  ] 
  },
  "url" : "http://www.a2itsoft.com/",
  "aggregateRating" : {
    "@type" : "AggregateRating",
    "ratingValue" : "5 Stars",
    "bestRating" : "5 Stars",
    "reviewCount": "90918"
  },
  "review" : {
    "@type" : "Review",
    "author" : {
      "@type" : "Person",
      "name" : "by Sandeep Sharma CU"
    },
    "datePublished" : "2021-02-17",
    "reviewRating" : {
      "@type" : "Rating",
      "ratingValue" : "5 Stars"
    },
    "reviewBody" : "It's a best industrial training company in mohali for python, machine learning, digital marketing hr training"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "A2IT Pvt. Ltd.",
  "url": "https://www.a2itsoft.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.a2itsoft.com/course/search{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Service",
  "serviceType": "Internet marketing service provider",
  "provider": {
    "@type": "LocalBusiness",
    "telephone": "+91 7814141400",
    "priceRange": "$$",
    "address":"C-124, Industrial Area, Phase 8, Mohali- Punjab 160 071 – INDIA ",
    "image": "https://www.a2itsoft.com/public/assets/img/a2it.png",
    "name": "A2IT Pvt. Ltd."
  },
  "areaServed": {
    "@type": "Country",
    "name": "India"
  },
  "hasOfferCatalog":{
    
        "@type": "OfferCatalog",
        "name": "Industrial Training provider in mohali",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Website Designing
"
            }
          },
           {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Mobile App Designing "
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Web Development"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Data Scraping and Data Mining"
            }
            },
            {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "SEO, SEM, PPC, Social Media Marketing"
           }
                         },
{
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Mobile App Development"
           }
                         },
{
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Game Development"
           }
                         },
{
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Content Writing for Website"
           
                         }
          }
        ]
      }
   
  }
}
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '512827933048755');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=512827933048755&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Ads: 939174394 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-939174394"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-939174394');
</script>
<script>
  gtag('event', 'page_view', {
    'send_to': 'AW-939174394',
    'value': 'replace with value',
    'items': [{
      'id': 'replace with value',
      'location_id': 'replace with value',
      'google_business_vertical': 'education'
    }]
  });
</script>

@endpush

@push('scripts')
<script>
    $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>
@endpush
@push('scripts')
<script type="text/javascript">
    $(window).on('load',function(){
        setTimeout(function(){
        $('#homemodal').modal('show');
    },8000);
    });
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "A2IT",
  "url": "https://www.a2itsoft.com",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://a2itsoft.com/course/search{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '374396614006074');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=374396614006074&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
@endpush

@push('captcha')
    grecaptcha.execute('6LejhKoUAAAAAEbSD2YBjtK8VyPa6HwpTjQmrLuI', {action: 'popup'}).then(function(token)
      {
        if(token){
            document.getElementById('popup-recaptcha').value = token;
        }
     });
@endpush