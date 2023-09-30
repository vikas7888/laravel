
@extends('frontend.layout.main')
@section('title','Six Months Internship')
@section('content')
<style>
    .red{
        color:red;
        margin-top:15px;
        margin-bottom:15px;
    
    }
</style>
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

<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 10px">Six Months Internship</h3>
            </div>
        </div>
    </div>
</div>

@section('title','Apply Six Months Intership Training in Mohali 2021')
@section('meta_desc','A2IT provides you best six months internship & training  in Mohali / Training Offer for all Engineering Branch: Limited Time Offer')
@section('meta_keywords','Six Months Internship, Six months internship in Mohali, six Months training, MBA BBA Internship, digital marketing internship, Networking internship, python internship, free internship, internship fee, Civil Internship')
@push('seo')
    
@endpush
@section('content')
  <div class="discount">
            <h1>Register now and get a 
             discount upto<span> 80% </span> until 28 MAR 22</h1>
             <h2 style="color:white;font-size:5px;">Six months internship in Mohali. A2IT provides you six months online internship as well as offline. </h2>
        </div>
       <section class="apply-area admission-area ptb-100">
      
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container online-text">
             
            <div class="row">
               <div class="col-lg-6 col-md-12 Intern-text">
                 <h2>INTERNSHIP</h2>
                 <hr>
                 <p>Build a strong foundation for your career by 
                 working on real world projects using cutiing edge technologies</p><br>
                 <span style="font-weight:700;color:#fff;border:1px yellow solid; color:black;background-color:yellow; font-size:20px;">Benefits to an internship with us</span><br>
                 <ul class="p-3">
                     <li>Life Time Access</li>
                     <li>Valid Certificate with starting & ending date</li>
                     <li>Certificate with online verification</li>
                     <li>Pick project & Synopsis of your choice</li>
                     <li>Practice Test, Assignments & Quizzes</li>
                     <li>Online/Offline doubts & project support</li>
                 </ul> 
                 <br>
                 <span>Discount Offer <span><del> Rs.12000/-</del> &nbsp;&nbsp;&nbsp;2999/- </span></span> <br><br>                 
                 <span>Only for 6 Months Online Internship</span><br><br>
                 <span>Need any Help Call: <b>+917415151523</b> </span><br><br>
                  <p>Limited time offer - <b>Book Now</b> </p>
               </div> 
                <div class="col-lg-6 col-md-12">
                     <div class="apply-form" style="padding: 15px 30px 15px 30px; margin-left: 5px" x-data="{
                    email: '',
                    phone: '',
                    course: '',
                    code: '',
                  }">
                     <form id="internship" method="POST" action="https://api.razorpay.com/v1/checkout/embedded">
                         @csrf
                        <input type="hidden" id="type" value="summer-training"> 
                        <input type="hidden" name="key_id" value="{{ env('RAZORPAY_KEY') }}">
                        <input type="hidden" name="order_id" id="order" required>
                        <input type="hidden" name="callback_url" value="{{ route('registration.done') }}">
                        <input type="hidden" name="cancel_url" value="{{ URL::current() }}">
                        <input type="hidden" name="name" value="A2IT">
                        <input type="hidden" name="description" value="Book Internship">
                        <input type="hidden" name="prefill[email]" x-bind:value="email">
						<input type="hidden" name="prefill[contact]" x-bind:value="phone">
                        <input type="hidden" id="amount" name="amount" value="299900">

                        <div class="form-group">
                           <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="phone" x-model="phone" placeholder="Your Phone" required />
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control" name="email" x-model="email" placeholder="Your Email" required />
                        </div>
                        
                        <div class="form-group">
                           <input type="text" class="form-control" name="college" placeholder="Your College/Uni Name" required />
                        </div>
                        
                        <div class="row">
                        
                        <div class="col-md-6">
                        
                        <div class="form-group">
                           <select class="form-control" id="branch-dropdown" placeholder="Select Branch" name="branch" style="height: 52px !important;" required>
                               <option value="">Select Branch...</option>
                               @foreach($branch as $brnch)
                                <option value="{{ $brnch->id }}">{{ ucwords($brnch->name) }}</option>
                               @endforeach
                           </select>
                        </div>
                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-group">
                           <select class="form-control" id="program-dropdown" x-model="course" placeholder="Select Course" name="course" style="height: 52px !important;" required style="text-transform: capitalize !important">
                               <option value="">Choose your program...</option>
                           </select>
                        </div>
                        </div>
                        
                        </div>
                        
                        <div class="form-group" x-show="course === 'other'">
                           <input type="text" class="form-control" name="other" placeholder="Enter your Course" x-bind:required="course === 'other'" />
                        </div>
                        
                        <div class="input-group">
                           <input type="text" class="form-control" id="datetimepicker" name="start_date" placeholder="Choose Start Date" required autocomplete="off" />
                           <div class="input-group-append">
                                <span class="input-group-text"><i class="icofont-calendar"></i></span>
                            </div>
                        </div>
                        
                      
                      <div class="input-group">
                        <input type="text" class="form-control p-1 mt-4" x-model="code" id="coupon" name="code" style="font-weight: bold; border: 2px dotted red; text-transform: uppercase" placeholder="Have Coupon?" />
                        <div class="input-group-append">
                            <button class="btn btn-secondary btn-sm" x-on:click="applyCoupon()" x-bind:disabled="code === ''" type="button">Apply</button>
                        </div>
                      </div>
                      
                      <div class="alert alert-success mt-1 text-left status" style="display: none" role="alert">
                        Great! You saved Rs <span id="disc">0</span>/-
                      </div>
                      
                      <div class="alert alert-danger mt-1 text-left error" style="display: none" role="alert">
                        Opps! Invalid coupon code!
                      </div>
                        
                        
                        <button type="button" onclick="validateOrder()" class="btn btn-primary">Register and Pay <span id="amount-text">2999</span>/-</button>
                     </form>
                  </div>
            </div>
             </div>
         </div>
      </div>
   </div>
</section>
<section class="container">
    <div class="certificate">
        <h3>Industry recognized certificate: ISO 9001:2000 with Online Verification</h3>
        <img src="{{ asset(config('app.prefix').'assets/img/A2iT_Certificate.jpg') }}" alt="Free Certificate"> 
    </div>
</section>

<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--         <h3 style="text-align:center;color:blue;">Computer Science Internship Course's</h3>-->
<!--        <h4 style="font-size:5px; color:blue;"> Six Months Internship in Mohali for CSE</h4>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Start App area-->
<div class="main-part mainpart9999" style="margin-bottom:10px; margin-top:50px;">
<h3>Computer Science Internship Course's</h3>
<div class="cpanel">
    <div class="icon-part">
    <i class="fa fa-users" aria-hidden="true"></i><br>
    <small class="summerinhome">Networking</small>
    <p>
        (CCNA + CCNP)
    </p>
    </div>
    <div class="card-content-part">
    <p class="main-part99">
       <a href="https://youtube.com/embed/MvHdzyS3J1g?autoplay=1" class="video-link">
        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video">
        </a> 
        <a href="https://www.a2itsoft.com/course/networking-training/microsoft_networking_fundamentals">
        Syllabus</a> <a href="https://www.a2itsoft.com/course/networking-training/networking_projects">Projects</a>
    </p>
    </div>
</div>

<div class="cpanel cpanel-green">
<div class="icon-part">
<i class="fa fa-wifi" aria-hidden="true"></i><br>
<small class="summerinhome">CCNA+Ethical</small>
<p>
    Hacking
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
        <a href="https://youtube.com/embed/3a3WEd2IOi4?autoplay=1"  
        class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}"
        alt="Demo Class Video"></a> <a href="https://www.a2itsoft.com/course/cyber-security-training/ethical_hacking_associate"
    target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-orange">
<div class="icon-part main-part99">
<i class="fa fa-laptop" aria-hidden="true"></i><br>
<small class="summerinhome">Manual Software</small>
<p>
    Testing
</p>
</div>
<div class="card-content-part">
    <p class="main-part99">
    <a href="https://youtube.com/embed/ZvUyJd7dj40?autoplay=1" class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
    <a href="https://a2itsoft.com/course/software-testing-training/software_testing_course" target="_blank">Syllabus</a>
    <a href="" target="_blank">Projects</a>
    </p>
</div>
</div>

<div class="cpanel cpanel-blue">
<div class="icon-part main-part99">
<i class="fa fa-address-card-o" aria-hidden="true"></i><br>
<small class="summerinhome">Core Python + Adv. Python</small>
<p>
    Data Science
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href=" https://youtube.com/embed/cBvfZvjLlfg?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video">
    </a> <a href="https://www.a2itsoft.com/course/programming-training/python_training" target="_blank">Syllabus</a> 
    <a href="https://www.a2itsoft.com/course/web-development-training/python_programming_projects" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-red">
<div class="icon-part">
<i class="fa fa-certificate" aria-hidden="true"></i><br>
<small class="summerinhome">JAVA Programming</small>
<p>
    (Core & Advance)
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href="https://www.youtube.com/embed/NJGNPuaFBJA?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
    <a href="https://a2itsoft.com/course/marketing-training/digital_marketing_course_training_in_mohali_chandigarh" target="_blank">Syllabus</a>
    <a href="https://www.a2itsoft.com/course/marketing-training/digital_marketing_projects" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-skyblue">
<div class="icon-part">
<i class="fa fa-briefcase" aria-hidden="true"></i><br>
<small class="summerinhome"> Digital Marketing</small>
<p>
    <b>(SEO SEM SMO etc.)</b>
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href="https://youtube.com/embed/ZX3IKN091-0?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a>
    <a href="https://a2itsoft.com/course/marketing-training/digital_marketing_course_training_in_mohali_chandigarh" target="_blank">Syllabus</a>
    <a href="https://www.a2itsoft.com/course/marketing-training/digital_marketing_projects" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-orange">
<div class="icon-part">
<i class="fa fa-cc" aria-hidden="true"></i><br>
<small class="summerinhome">C & C++</small>
<p>
Programming
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href="https://youtube.com/embed/71uyXlL3nNk?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a>
    <a href="" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel">
<div class="icon-part">
<i class="	fa fa-life-bouy" aria-hidden="true"></i><br>
<small class="summerinhome">Full Stack Course</small>
<p>
(Front End+ Back End)
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href="https://youtube.com/embed/gfAaAfmE05M?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
    <a href="https://a2itsoft.com/course/web-development-training" target="_blank">Syllabus</a> 
    <a href="https://www.a2itsoft.com/course/web-designing-training/web_designing_projects">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-green">
<div class="icon-part">
<i class="fa fa-arrows" aria-hidden="true"></i><br>
<small class="summerinhome">Web Development</small>
<p>
    (Python with Django)
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href="https://youtube.com/embed/gfAaAfmE05M?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
    <a href="https://a2itsoft.com/course/web-development-training" target="_blank">Syllabus</a>
    <a href="https://www.a2itsoft.com/course/web-designing-training/web_designing_projects">Projects</a>
</p>
</div>
</div>

</div>
<!-- start2 App area-->
<div class="main-part" style="margin-bottom:10px; margin-top:50px;">
<h3>Business & Management Internship Course's</h3>

<div class="cpanel cpanel-blue">
<div class="icon-part main-part99">
<i class="fa fa-address-card-o" aria-hidden="true"></i><br>
<small class="summerinhome">Digital Marketing</small>
<p>
    Learn With A2it
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
     <a href="https://youtube.com/embed/ZX3IKN091-0?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
    <a href="https://a2itsoft.com/course/marketing-training/digital_marketing_course_training_in_mohali_chandigarh" target="_blank">Syllabus</a>
    <a href="https://www.a2itsoft.com/course/marketing-training/digital_marketing_projects" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-red">
<div class="icon-part">
<i class="	fa fa-group" aria-hidden="true"></i><br>
<small class="summerinhome">HR Management</small>
<p>
    Learn With A2It
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
        <a href="https://youtube.com/embed/AqJ9a-iwYOI?autoplay=1" class="video-link">
        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
    <a href="https://a2itsoft.com/course/business-training/hr_management_training" target="_blank">Syllabus</a> 
    <a href="" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-skyblue">
<div class="icon-part">
<i class="fa fa-home" aria-hidden="true"></i><br>
<small class="summerinhome">Finance & Accounting </small>
<p>
   <b> Management </b>
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
        <a href="https://youtube.com/embed/JEz394C8vTc?autoplay=1" class="video-link">
        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
        <a href="https://www.a2itsoft.com/course/business-training/finance_training_internship" target="_blank">Syllabus</a> 
        <a href="" target="_blank">Projects</a>
</p>
</div>
</div>
</div>
<!-- End App area-->
<!-- start3 App area-->
<div class="main-part" style="margin-bottom:10px; margin-top:50px;">
<h3>Civil Engineering Internship Course's</h3>

<div class="cpanel">
<div class="icon-part main-part99">
<i class="fa fa-check-circle-o" aria-hidden="true"></i><br>
<small class="summerinhome">AutoCAD</small>
<p>
    Learn  AutoCAD With Course
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href="https://youtube.com/embed/724iGqxle7E?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
    <a href="https://a2itsoft.com/course/civil-training/autocad_civil_training" target="_blank">Syllabus</a> 
    <a href="https://a2itsoft.com/course/civil-training/civil_engineering_project_reports" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-green">
<div class="icon-part">
<i class="fa fa-certificate" aria-hidden="true"></i><br>
<small class="summerinhome">Ravit Architecture</small>
<p>
    Learn With A2It
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href="#"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video">
    </a> <a href="https://a2itsoft.com/course/civil-training/revit_training" target="_blank">Syllabus</a>
    <a href="https://a2itsoft.com/course/civil-training/civil_engineering_project_reports" target="_blank">Projects</a>
</p>
</div>
</div>

<div class="cpanel cpanel-orange">
<div class="icon-part">
<i class="fa fa-child" aria-hidden="true"></i><br>
<small class="summerinhome">3D Max</small>
<p>
    Learn With Video Courses
</p>
</div>
<div class="card-content-part">
<p class="main-part99">
    <a href="https://youtube.com/embed/ZX3IKN091-0?autoplay=1"  class="video-link">
    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> 
    <a href="https://a2itsoft.com/course/civil-training/3ds_max_training_in_chandigarh" target="_blank">Syllabus</a> 
    <a href="https://a2itsoft.com/course/civil-training/civil_engineering_project_reports" target="_blank">Projects</a>
</p>
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
<!--<section class="about-area ptb-100">-->
<!--    <div class="container">-->
<!--        <h3 style="text-align:center;color:blue;">Computer Science Internship Course's</h3>-->
<!--        <h4 style="font-size:5px; color:#fff;"> Six Months Internship in Mohali for CSE</h4>-->
<!--        <div class="row">-->
<!--             <div class="col-lg-4 col-md-6">-->
<!--                <div class="single-about project-course bg-color">-->
<!--                    <h3>Networking (CCNA + CCNP)<br><br> -->
<!--                    <a href="https://youtube.com/embed/MvHdzyS3J1g?autoplay=1" class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video">-->
<!--                    </a> -->
<!--                    <a href="https://www.a2itsoft.com/course/networking-training/microsoft_networking_fundamentals">-->
<!--                        Syllabus</a> <a href="https://www.a2itsoft.com/course/networking-training/networking_projects">Projects</a></h3>-->
<!--                </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                <div class="single-about project-course bg-color">-->
<!--                    <h3> CCNA+Ethical Hacking<br><br> <a href="https://youtube.com/embed/3a3WEd2IOi4?autoplay=1"  -->
<!--                    class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}"-->
<!--                    alt="Demo Class Video"></a> <a href="https://www.a2itsoft.com/course/cyber-security-training/ethical_hacking_associate"-->
<!--                    target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>-->
<!--               </div>-->
<!--            </div>-->
<!--             <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">-->
<!--                <div class="single-about project-course bg-color">-->
<!--                    <h3>Manual Software Testing<br><br>-->
<!--                    <a href="https://youtube.com/embed/ZvUyJd7dj40?autoplay=1" class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> -->
<!--                    <a href="https://a2itsoft.com/course/software-testing-training/software_testing_course" target="_blank">Syllabus</a>-->
<!--                    <a href="" target="_blank">Projects</a>-->
<!--                    </h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--               <div class="single-about project-course bg-color">-->
<!--                    <h3>Core Python + Adv. Python + Data Science<br><br> <a href=" https://youtube.com/embed/cBvfZvjLlfg?autoplay=1"  class="video-link">-->
<!--                    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video">-->
<!--                    </a> <a href="https://www.a2itsoft.com/course/programming-training/python_training" target="_blank">Syllabus</a> -->
<!--                    <a href="https://www.a2itsoft.com/course/web-development-training/python_programming_projects" target="_blank">Projects</a>-->
<!--                    </h3>-->
<!--               </div>-->
<!--             </div>-->
             
<!--             <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">-->
<!--                <div class="single-about project-course bg-color">-->
<!--                    <h3> JAVA Programming<br>(Core & Advance)<br><br> -->
<!--                    <a href="https://www.youtube.com/embed/NJGNPuaFBJA?autoplay=1"  class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> -->
<!--                        <a href="https://a2itsoft.com/course/marketing-training/digital_marketing_course_training_in_mohali_chandigarh" target="_blank">Syllabus</a>-->
<!--                        <a href="https://www.a2itsoft.com/course/marketing-training/digital_marketing_projects" target="_blank">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
<!--             <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">-->
<!--                <div class="single-about project-course bg-color">-->
<!--                    <h3> Digital Marketing<br>(SEO SEM SMO etc.)<br><br>-->
<!--                    <a href="https://youtube.com/embed/ZX3IKN091-0?autoplay=1"  class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a>-->
<!--                        <a href="https://a2itsoft.com/course/marketing-training/digital_marketing_course_training_in_mohali_chandigarh" target="_blank">Syllabus</a>-->
<!--                        <a href="https://www.a2itsoft.com/course/marketing-training/digital_marketing_projects" target="_blank">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">-->
<!--                <div class="single-about project-course bg-color">-->
<!--                    <h3>C & C++ Programming<br><br>-->
<!--                    <a href="https://youtube.com/embed/71uyXlL3nNk?autoplay=1"  class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a>-->
<!--                        <a href="" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>-->
<!--               </div>-->
<!--            </div>-->
            
<!--            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">-->
<!--                <div class="single-about project-course bg-color">-->
<!--                    <h3>Full Stack Course<br>(Front End+ Back End)<br><br> -->
<!--                    <a href="https://youtube.com/embed/gfAaAfmE05M?autoplay=1"  class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> -->
<!--                        <a href="https://a2itsoft.com/course/web-development-training" target="_blank">Syllabus</a> -->
<!--                        <a href="https://www.a2itsoft.com/course/web-designing-training/web_designing_projects">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">-->
<!--                <div class="single-about project-course bg-color">-->
<!--                    <h3>Web Development<br>(Python with Django)<br><br> -->
<!--                    <a href="https://youtube.com/embed/gfAaAfmE05M?autoplay=1"  class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> -->
<!--                        <a href="https://a2itsoft.com/course/web-development-training" target="_blank">Syllabus</a>-->
<!--                        <a href="https://www.a2itsoft.com/course/web-designing-training/web_designing_projects">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
                
            
<!--        </div>-->
<!--    </div>-->
<!--     <div class="container internship-course">-->
<!--        <h3 style="text-align:center;color:#97b106;">Business & Management Internship Course's</h3>-->
<!--         <h4 style="text-align:center;color:#fff;font-size:10px;">Six Months Internhsip in Mohali/ HR Internship work from home</h4>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="single-about project-course bg-color1">-->
<!--                    <h3>Digital Marketing<br><br> <a href="https://youtube.com/embed/ZX3IKN091-0?autoplay=1"  class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> -->
<!--                        <a href="https://a2itsoft.com/course/marketing-training/digital_marketing_course_training_in_mohali_chandigarh" target="_blank">Syllabus</a>-->
<!--                        <a href="https://www.a2itsoft.com/course/marketing-training/digital_marketing_projects" target="_blank">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="single-about project-course bg-color1">-->
<!--                    <h3> HR Management <br><br> <a href="https://youtube.com/embed/AqJ9a-iwYOI?autoplay=1" class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> -->
<!--                        <a href="https://a2itsoft.com/course/business-training/hr_management_training" target="_blank">Syllabus</a> -->
<!--                        <a href="" target="_blank">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
<!--           <div class="col-lg-4 col-md-6">-->
<!--                <div class="single-about project-course bg-color1">-->
<!--                    <h3>Finance & Accounting Management<br><br> <a href="https://youtube.com/embed/JEz394C8vTc?autoplay=1" class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> -->
<!--                        <a href="https://www.a2itsoft.com/course/business-training/finance_training_internship" target="_blank">Syllabus</a> -->
<!--                        <a href="" target="_blank">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--     <div class="container internship-course">-->
<!--        <h3 style="text-align:center;color:red;">Civil Engineering Internship Course's</h3>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-6 col-md-6">-->
<!--                <div class="single-about project-course bg-color2">-->
<!--                    <h3>AutoCAD + Stadd Pro + Ravit<br><br> <a href="https://youtube.com/embed/724iGqxle7E?autoplay=1"  class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a>-->
<!--                        <a href="https://a2itsoft.com/course/civil-training/autocad_civil_training" target="_blank">Syllabus</a>-->
<!--                        <a href="https://a2itsoft.com/course/civil-training/civil_engineering_project_reports" target="_blank">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
           
<!--            <div class="col-lg-6 col-md-6">-->
<!--                <div class="single-about project-course bg-color2">-->
<!--                    <h3>AutoCad + 3D Max<br><br> <a href=""  class="video-link">-->
<!--                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> -->
<!--                        <a href="https://a2itsoft.com/course/civil-training/3ds_max_training_in_chandigarh" target="_blank">Syllabus</a> -->
<!--                        <a href="https://a2itsoft.com/course/civil-training/civil_engineering_project_reports" target="_blank">Projects</a></h3>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    
<!--</section>   -->
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.9/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.9/jquery.datetimepicker.full.min.js" integrity="sha512-hDFt+089A+EmzZS6n/urree+gmentY36d9flHQ5ChfiRjEJJKFSsl1HqyEOS5qz7jjbMZ0JU4u/x1qe211534g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        jQuery('#datetimepicker').datetimepicker({
            timepicker: false,
            format:'d-m-Y',
            formatDate:'Y-m-d',
            minDate: 0,
        });
        
        $('#branch-dropdown').on('change', function() {
            var category_id = this.value;
            $.ajax({
                url: "{{ route('programs') }}",
                type: "POST",
                data: {
                    _token : "{{ csrf_token() }}",
                    category_id: category_id
                },
                cache: false,
                success: function(result) {
                    $('#program-dropdown').empty();
                    $('#program-dropdown').append('<option value="">Select Program...</option>');
                    $.each(result.programs, function(index, subcategory) 
                    {
                        $('#program-dropdown').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                    });
                    $('#program-dropdown').append('<option value="other">Other...</option>');
                }
            });
        });
    });
    
    function validateOrder(){
    //$('#internship').on('submit', function(e) {
        //  e.preventDefault(); 
        //
        $("#internship")[0].reportValidity();
        var form = $("#internship");
        $.ajax({
            type: 'POST',
            url: "{{ route('online.training') }}",
            data: form.serialize(),
            success: function (result) 
            {
                console.log(result);
                if (result.status) {
                    $('#order').val(result.order_id);
                    form.submit();
                } else {
                    return false;
                }
            }
        });
        return false;
    //});
    }
    
    function applyCoupon(){
        //
        var amount =2000;
        let uri = "{{ url('validate-coupon') }}";
        uri += '/';
        uri += $("#coupon").val();
        uri += '/';
        uri += 'summer-training';
        
        $.ajax({
            type: 'GET',
            url:  uri,
            success: function (result) 
            {
                if(result.status){
                    $('.error').hide();
                    var discount = amount-result.coupon;
                    $('#amount').val(discount*100);
                    $('#amount-text').html(discount);
                    $('#disc').html(result.coupon);
                    $('.status').show(200);
                }else{
                    $('.status').hide();
                    $('.error').show(200);
                }
            }
        });
        
        
    }
        
</script>
@endpush