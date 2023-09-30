@extends('frontend.layout.main')
@section('title','Participation Certificate')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="main-banner-three-content">
                    @if($status == 1)
                    <h4>Thank you for attending the Workshop</h4><br>
                    <h5 style="color:#fff;">Create Your Certificate Now!</h5> 
                    <form method="post" action="/participation-certificate" style="margin-top:50px">
                        @csrf
                        <input type="text" class="form-control" name="student_name" placeholder="Enter your Name..."
                            value="{{ old('student_name') }}" required style="border: 2px dotted #000">
                        <button type="submit" class="btn btn-primary">Create Now</button>
                    </form>
                    @else
                        <h4>This program is not available right now, Please come back later! Thanks.</h4><br>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
@if($status == 1)
<!-- Start Course Details Area -->
<section class="course-details-area ptb-100">
    <div class="container">    
        <div class="row">
            <div class="col-md-12">
                @isset($certificate)
                    <img src="{{ asset('public/uploads/certificate/participation-certificate.png') }}" class="img" />
                    <hr>
                    <a class="btn btn-warning text-center float-right" href="{{ asset('public/uploads/certificate/participation-certificate.png') }}" download>Download Certificate</a>
                    <h5 class="mt-4">Total Downloads: {{ $downloads }}</h5>
                @endisset
                
            </div>
        </div>
    </div>
</section>
<!-- End Course Details Area -->
@endif

@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush