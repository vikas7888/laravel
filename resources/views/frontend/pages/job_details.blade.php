@extends('frontend.layout.main')
@section('title','Job Detail')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 80px">Job Detail</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Course Details Area -->
<section class="course-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h2>{{ $job->title }}</h2>
                <div class="courses-details">
                    <div class="courses-details-meta">
                       {{ $job->description }}
                       <br><br>
                        <a href="{{ route('carrier.form') }}" class="btn btn-primary">Back to Career</a>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-4 col-md-12">
                <div class="side-bar mb-0">
                    <div class="single-widget categories-box">
                        <h3 class="title">Apply Now</h3>
                        
                        <img src="{{asset(config('app.prefix').'assets/img/career.jpg')}}" class="img-responsive"/>
                      <h3 style="text-align:center;"> Send Resume at : info@a2itsoft.com</h3>
                        <!-- 
                        <form method="post" action="{{ route('carrier.form')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="job_id" placeholder="Enter Job ID" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            
                            <div class="form-group">
                                    <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        -->
                    </div>  
                </div>
            </div>
        </div>
    </div> 
</section>
<!-- End Course Details Area -->
@endsection