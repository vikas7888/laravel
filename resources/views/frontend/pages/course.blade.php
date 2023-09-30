@extends('frontend.layout.main')
@section('title',strtoupper($category->name))
@section('meta_desc'    ,$category->seo_description)
@section('meta_keywords',$category->seo_keywords)
@push('seo')
    {!! $category->seo_tags !!}
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

<!-- Start Courses Area -->
<section class="courses-area ptb-100">
    <div class="container">
        <h3>{{ ucwords($category->name) }}</h3>
        <hr>
        <div class="row">
            @foreach($category->course as $cou)
            <div class="col-lg-4 col-md-6">
                <div class="single-courses-item">
                    <a href="/course/{{ $category->slug }}/{{ $cou->slug }}">
                    <div class="courses-img">
                        <img src="{{ asset(config('app.prefix').'uploads/').'/'. $cou->banner}}" alt="course">
                    </div>
                    <div class="courses-content">
                        <h3><a href="/course/{{ $category->slug }}/{{ $cou->slug }}">{{ strtoupper($cou->name) }}</a></h3>
                    </div>
                    </a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!-- End Courses Area -->
@endsection