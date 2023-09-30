@extends('frontend.layout.main')
@section('title','Search')
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

<!-- Start Course Details Area -->
<section class="course-details-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 d-none d-lg-block">
                <div class="side-bar mb-0">
                    <div class="single-widget categories-box">
                        <h3 class="title">Other Courses</h3>
                        <ul>
                            @foreach($category as $cat)
                            <li><a href="/course/{{ $cat->slug }}"><i class="icofont-double-right"></i>
                                    {{ strtoupper($cat->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                    <section class="courses-area">
                            <div class="container">
                                <div class="row">
                                    @foreach($courses as $course)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-courses-item" style="padding-bottom: -10px;">
                                            <a href="/course/{{ $course->category->slug }}/{{ $course->slug }}">
                                            <div class="courses-img">
                                                <img src="{{asset(config('app.prefix').'uploads/').'/'. $course->banner}}"
                                                alt="courses-details">
                                            </div>
                                            <div class="courses-content">
                                                <h3><a href="/course/{{ $course->category->slug }}/{{ $course->slug }}">{{ strtoupper($course->name) }}</a></h3>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                    </section>
            </div>
            
            <div class="col-lg-3 col-md-12 d-none d-block d-sm-none d-none d-sm-block d-md-none d-none d-md-block d-lg-none">
                <div class="side-bar mb-0">
                    <div class="single-widget categories-box">
                        <h3 class="title">Other Courses</h3>
                        <ul>
                            @foreach($category as $cat)
                            <li><a href="/course/{{ $cat->slug }}"><i class="icofont-double-right"></i>
                                    {{ strtoupper($cat->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Course Details Area -->
@endsection