@extends('frontend.layout.main')
@section('title','Category')
@section('content')

<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 80px">Categories</h3>
            </div>
        </div>
    </div>
</div>

<!-- Start Popular Courses Area -->
<section class="popular-courses-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3>All Categories</h3>   
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
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Popular Courses Area -->

@endsection
