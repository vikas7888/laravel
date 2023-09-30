@extends('frontend.layout.main')
@section('title','Career at A2IT')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 80px">Carriers</h3>
            </div>
        </div>
    </div>
</div>
<h1 style="text-align:center;color:red; margin-top:20px;">Fresher Jobs in Mohali Chandigarh</h1>
<!-- End Page Title Area -->

<!-- Start Course Details Area -->
<section class="course-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h2>Find Your dream job at A2IT, list of current Job Openings at A2IT:</h2>
                @foreach($carrier as $carr)
                <div class="courses-details">
                    <div class="courses-details-meta">
                        <ul>
                            <li>
                                <h2>JOB ID:{{ $carr->id }}</h2>
                                <h3 style="color:red;">{{ $carr->title}}</h3>
                                {{ $carr->description }}
                                <br><br>
                                <a href="{{ route('job.details',['id' => $carr->id]) }}" class="btn btn-primary">View Job Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
                
            <div class="col-lg-4 col-md-12">
                <div class="side-bar mb-0">
                    <div class="single-widget categories-box">
                        <img src="{{asset(config('app.prefix').'assets/img/career.jpg')}}" class="img-responsive"/>
                      <h3 style="text-align:center;"> Send Resume at : info@a2itsoft.com</h3>
                    </div>  
                </div>
            </div>
        </div>
    </div> 
</section>
<!-- End Course Details Area -->
@endsection