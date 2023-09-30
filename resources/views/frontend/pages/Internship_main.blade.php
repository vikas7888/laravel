@extends('frontend.layout.main')
@section('title','About Us')
@section('content')
<style>
    .red{
        color:red;
        margin-top:15px;
        margin-bottom:15px;
    
    }
</style>
<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 80px">About Us</h3>
            </div>
        </div>
    </div>
</div>
       
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-text">
                 <h1>A2IT - You Dream : We Build </h1>
                   <h3>Welcome To <span>A2IT PVT. LTD.</span></h3>
                    
                    <h5>
                        We build SaaS based Digital Business Automation Solutions using emerging technologies for Startups and Enterprises
                        <br><br>
"A2IT - is experienced SaaS software development company with an award-winning portfolio."
<br><br>

                     
            
            <div class="col-lg-6 col-md-12">
                    <img src="{{asset(config('app.prefix').'assets/img/about1-img1.png')}}" style="margin-top: 30px" alt="about us">
                    <img src="{{asset(config('app.prefix').'assets/img/about1-img3.png')}}" style="margin-top: 30px" alt="about us">
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="single-about">
                    <i class="icofont-paper-plane"></i>
                    <h3>20+ <br>Years in Business</h3>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="single-about">
                    <i class="icofont-checked"></i>
                    <h3>250+<br>Qulified Experts</h3>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about">
                    <i class="icofont-airplane-alt"></i>
                    <h3>300+ <br>Finished Projects</h3>
                </div>
            </div>
            
        </div