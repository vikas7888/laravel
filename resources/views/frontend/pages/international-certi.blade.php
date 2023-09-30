@extends('frontend.layout.main')
@section('title','International Certificate')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3 style="margin-top: 80px">International Certificate</h3>
                </div>
            </div>
        </div>
    </div>
    <h1>all international certifications: networking, java, Python, Autocad, Revit, Ethical hacking, Security from Microsoft, Cisco, Autodesk, Ec-council etc.</h1>
    <!-- End Page Title Area -->

<section class="popular-courses-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach($course as $cou)
            <div class="col-lg-3 col-md-6">
                <div class="single-courses-item">
                <a href="/course/{{ $cou->category->slug }}/{{ $cou->slug}}">
                    <div class="courses-img">
                        <img src="{{asset(config('app.prefix').'uploads/').'/'.$cou->banner}}" alt="course">
                    </div>
                    <div class="courses-content">
                    <h3><a href="/course/{{ $cou->category->slug }}/{{ $cou->slug}}">{{ strtoupper($cou->name)}}</a></h3>      
                    </div>   
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection