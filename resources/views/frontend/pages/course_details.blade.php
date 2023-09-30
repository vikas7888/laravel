@extends('frontend.layout.main')
@section('title',strtoupper($course->name))
@section('meta_desc'    ,$course->seo_description)
@section('meta_keywords',$course->seo_keywords)
@push('seo')
    {!! $course->seo_tags !!}
@endpush
@section('content')
<!-- Start Page Title Area -->
<div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                      <div class="main-banner-three-content">
                            <form method="post" action="/course/search" style="margin-top: 65px">
                                @csrf
                                <input type="text" class="form-control" name="query" placeholder="Search courses..." required style="border: 2px dotted #000">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- End Page Title Area -->
  <div class="courses-details-meta cuursedetailsmeta">
    <ul>
        <li class="text-center">
        <h2 class="text-center">{{ strtoupper($course->name) }}</h2>
        Category: {{ ucwords($course->category->name) }}
        </li>
    </ul>
</div>
<!-- Start Course Details Area -->
<section class="course-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="courses-details">
                    <div class="courses-details-img">
                        <img src="{{asset(config('app.prefix').'uploads/').'/'. $course->banner}}" alt="courses-details">
                    </div>
                    
                    <p>{!! $course->category->details !!}</p>
                    
                    <div class="course-details-tabs">
               <!--         <div style="border:solid 1px #000; padding:20px 60px;margin-top:20px;margin-bottom:20px; text-align:center;">-->
               <!-- <h5 style="padding-bottom:20px; color:#062771; margin-bottom:10px;">Download Our App for Free Video Courses, Syllabus, -->
               <!--Notes, Projects & Games...</h5>-->
               <!-- <a href="https://www.a2itsoft.com/free-app" style="padding:15px 30px; background-color:red; color:#fff; font-weight:500; margin-top:40px;-->
               <!-- border-radius:5px;font-size:20px;box-shadow:10px 5px 5px grey;">Download App</a>-->
               <!-- </div>-->
                        <div class="content show" id="tab_1_content">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="title">Course Details:-</h4>
                                </div>
                                <div class="col-md-4">
                                </div>
                                <!--<div class="col-md-4">-->
                                <!--    <div class="apply-btn"  style="text-align:right">-->
                                <!--        <a href="/course-inquiry" class="btn btn-lg"style="background-color:#E60C3D; color:white;">Talk To Our Counsellor</a> -->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                             @if($course->url != "")
                        <div class="courses-details-img">
                            <iframe src="{{ $course->url }}" width="100%" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                         
                        @endif
                        
                            <p>{!! $course->description !!}</p>  
                            
                        </div>
                        <hr>
                       
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="side-bar mb-0">
                    <div class="single-widget categories-box">
                        <h3 class="title">Categories</h3>
                            
                        <ul>
                            @foreach($category as $cat)
                                <li><a href="/course/{{ $cat->slug}}" ><i class="icofont-double-right"></i> {{ strtoupper($cat->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>  
                    
                    <!-form start--->
                    <div class="row" style="margin-top:50px;">
                        <div class="col-lg-12 col-md-12">
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
                    <!--form end-->
                </div>
            </div>
        </div>
    </div>
    
  
</section>

<div class="container-fluid" style="padding:20px; margin-top:-50px">
    <div class="row">
        <div class="col-lg-12">
        <p class="text-center"><a href="https://www.a2itsoft.com/free-app"><img src="{{asset(config('app.prefix').'assets/img/metacourse.png')}}" alt="partner"></a></p>
        </div>
    </div>
</div>

<!--<div class="container-fluide" style="margin-bottom:30px; overflow-x:hidden">-->
<!--    <div class="row text-center">-->
<!--        <div class="col-lg-12">-->
<!--        <div class="apply-btn"  style="text-align:center" id="tabs">-->
<!--           <button type="button" class="btn btn-lg"style="background-color:green; color:white;"  data-toggle="modal" data-target="#myModal">Download Brochure</button>-->
<!--         </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- End Course Details Area -->
<section class="courses-area">
        <div class="container">
            <h3 class="text-center">Related Courses</h3>
            <div class="row">
                @foreach($course->category->course as $cou)
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-item">
                        <a href="/course/{{ $course->category->slug}}/{{ $cou->slug }}">
                        <div class="courses-img">
                            <img src="{{ asset(config('app.prefix').'uploads/').'/'. $cou->banner}}" alt="course">
                        </div>
                        <div class="courses-content">
                            <h3><a href="/course/{{ $course->category->slug}}/{{ $cou->slug }}">{{ strtoupper($cou->name) }}</a></h3>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
</section>

<section class="courses-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="single-courses-item">
                    <h4 style="padding-bottom:20px; color:red;">Top Searches</h4>
                    {!! $course->top_search !!}
                </div>
            </div>   
        </div>
    </div>
</section>
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

@endsection