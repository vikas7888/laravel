@extends('frontend.layout.main')
@section('title','Placements')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3 style="margin-top: 80px">Placements</h3>
                </div>
            </div>
        </div>
    </div>
    <h1>A2IT training and placement cell</h1>
    <!-- End Page Title Area -->
<section class="courses-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach($placement as $place)
            <div class="col-lg-3 col-md-6">
                <div class="courses-item">
                    <div class="courses-img">
                        <img src="{{ asset(config('app.prefix').'/uploads/testimonial').'/'.$place->image }}" alt="course">
                    </div>
                    
                    <div class="courses-content">
                        <h3><a href="javascript:void(0)">{{ $place->name }}</a></h3>    
                        <p>{{ $place->reviews }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection