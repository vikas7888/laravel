<?php
use App\Models\Category;
use App\Models\Course;
$category = Category::with('course')->where('status',1)->orderBy('id','asc')->get();
?>
<style>
    .myDropDown
    {
       width: auto; 
       height: 100px; 
       overflow-y: scroll;
    }
</style>
<!-- Start Main Menu Area -->
<div class="main-header-area header-sticky box-shadow">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="EduStudyNav">

                <!-- Logo -->
                <a class="nav-brand" href="/"><img src="{{asset(config('app.prefix').'assets/img/a2it.png')}}" alt="logo"></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="https://www.a2itsoft.com/about">About</a></li>
                            <li><a href="javascript:void(0)">Courses</a>
                                <ul class="dropdown" style="width: 410px; height: 400px; overflow: auto">
                                    @foreach($category as $key => $cat)
                                    <li ><a class="hedingoverflow" href="/course/{{ $cat->slug }}"><i class="fa fa-arrows" style="margin-right:10px"></i>{{ $cat->name}}</a>
                                        <!-- <ul class="dropdown" style="width: 420px !important; left: 210px">
                                            @foreach($category[$key]->course as $cou)
                                                <li><a href="/course/{{ $category[$key]->slug }}/{{ $cou->slug }}">{{ $cou->name}}</a></li>
                                            @endforeach
                                        </ul> -->
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            
                            <!--<li><a href="/services">Services</a></li>-->
                            <li><a href="javascript:void(0)" >Services</a>
                                <ul class="dropdown">
                                    <li><a href="https://www.a2itlive.in/"><i class="fa fa-arrows" style="margin-right:10px"></i>Domain & Hosting </a></a></li>
                                    <li><a href="https://a2itonline.com/"><i class="fa fa-arrows" style="margin-right:10px"></i>Website Development</a></a></li>
                                    <li><a href="https://bdmlive.com/"><i class="fa fa-arrows" style="margin-right:10px"></i>Lead Management</a></a></li>
                                    <li><a href="https://fwxzc.courses.store/"><i class="fa fa-arrows" style="margin-right:10px"></i>Video Courses</a></a></li>
                                </ul>
                            <li><a href="javascript:void(0)" style="font-weight:bold;">Internship</a>
                                <ul class="dropdown">
                                    <li><a href="/apply-summer-internship"><i class="fa fa-arrows" style="margin-right:10px"></i>Summer Internship</a></a></li>
                                    <li><a href="/six-months-internship"><i class="fa fa-arrows" style="margin-right:10px"></i>Six Months Internship</a></a></li>
                                </ul>
                            </li>
                            <li><a href="https://fwxzc.courses.store/">Store</a></li>
                            <li><a href="/verify-certificate">Verify Certificate</a></li>
                            <li><a href="/free-app" style="font-weight:bold;">Download APP</a></li>
                            <li><a href="/training-registration" style="font-weight: bold; border: 2px dotted red;">Registration</a></li>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Main Menu Area -->
