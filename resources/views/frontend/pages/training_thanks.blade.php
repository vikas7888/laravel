@extends('frontend.layout.main')
@section('title','Registration Success')
@section('content')
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 50px">Thanks for Registring</h3>
            </div>
        </div>
    </div>
</div>
    <!-- End Page Title Area -->
<section class="about-area ptb-100">
<!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                &nbsp;
            </div>
            <div class="col-lg-8" style="text-align: center">
                <h2><i class="icofont-check"></i> Thanks for Registering!</h2>
                <div style="border:solid 1px #000; padding:20px 70px;margin-top:20px">
                <h4 style="padding-bottom: 20px; color:#062771; margin-bottom:10px;">Download Our App for Online/Offline Classes,
                Attendance,Test, Assignments & Free Videos Courses & Games</h4>
                <a href="https://www.a2itsoft.com/free-app" style="padding:15px 30px; background-color:red; color:#fff; font-weight:500; margin-top:40px;
                border-radius:5px;font-size:20px;box-shadow:10px 5px 5px grey;">Download App</a>
                </div>
                <h4 style="padding: 20px; margin-top:15px;">Please pay your Registration Fees by following methods:</h4>
                <p style="font-size: 28px; color:red">Pay via CASH at A2IT Center<br>--OR--<br>Pay Via PayTM or UPI</p>
            </div>
            <div class="col-lg-2">
                &nbsp;
            </div>
        </div> <!-- END row-->

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset(config('app.prefix').'assets/img/paytm.jpg') }}" width="500px" alt="a2it-soft-mohali" />
            </div>
            <div class="col-md-6">
                <img src="{{ asset(config('app.prefix').'assets/img/upi.jpg') }}" width="450px" height="250px" alt="a2it-soft-mohali" />
            </div>
        </div>
        <a href="/" class="btn btn-primary btn-block" style="margin-top: 50px;">Back to Home</a>
    </div>
<!-- Container / End -->
</section>

@endsection