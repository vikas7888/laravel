@extends('frontend.layout.main')
@section('title','Gallery')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3 style="margin-top: 80px">Gallery</h3>
                </div>
            </div>
        </div>
    </div>
    <a><h1> Industrial training workshop/ seminar pics</h1></a>
    <!-- End Page Title Area -->
<section class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{asset(config('app.prefix').'assets/img/3.jpg')}}" data-lightbox="3">
                    <img src="{{asset(config('app.prefix').'assets/img/3.jpg')}}" class="img-responsive"/>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{asset(config('app.prefix').'assets/img/5.jpg')}}" data-lightbox="5">
                    <img src="{{asset(config('app.prefix').'assets/img/5.jpg')}}" class="img-responsive"/>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{asset(config('app.prefix').'assets/img/8.jpg')}}" data-lightbox="8">
                    <img src="{{asset(config('app.prefix').'assets/img/8.jpg')}}"/>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{asset(config('app.prefix').'assets/img/10.jpg')}}" data-lightbox="10">
                    <img src="{{asset(config('app.prefix').'assets/img/10.jpg')}}"/>
                </a>
            </div>
        </div>
        <div class="row" style="margin-top:15px;margin-bottom:15px;">
                <div class="col-md-3">
                        <a href="{{asset(config('app.prefix').'assets/img/15.jpg')}}" data-lightbox="15">
                            <img src="{{asset(config('app.prefix').'assets/img/15.jpg')}}"/>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{asset(config('app.prefix').'assets/img/16.jpg')}}" data-lightbox="16">
                            <img src="{{asset(config('app.prefix').'assets/img/16.jpg')}}"/>
                        </a>
                    </div>
                <div class="col-md-3">
                    <a href="{{asset(config('app.prefix').'assets/img/11.jpg')}}" data-lightbox="11">
                        <img src="{{asset(config('app.prefix').'assets/img/11.jpg')}}" class="img-responsive"/>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{asset(config('app.prefix').'assets/img/12.jpg')}}" data-lightbox="12">
                        <img src="{{asset(config('app.prefix').'assets/img/12.jpg')}}" class="img-responsive"/>
                    </a>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-md-3">
                        <a href="{{asset(config('app.prefix').'assets/img/13.jpg')}}" data-lightbox="13">
                            <img src="{{asset(config('app.prefix').'assets/img/13.jpg')}}" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{asset(config('app.prefix').'assets/img/14.jpg')}}" data-lightbox="14">
                            <img src="{{asset(config('app.prefix').'assets/img/14.jpg')}}" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{asset(config('app.prefix').'assets/img/17.jpg')}}" data-lightbox="17">
                            <img src="{{asset(config('app.prefix').'assets/img/17.jpg')}}"/>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{asset(config('app.prefix').'assets/img/18.jpg')}}" data-lightbox="18">
                            <img src="{{asset(config('app.prefix').'assets/img/18.jpg')}}"/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12" style="margin-top:20px;">
                    <div class="apply-btn"  style="text-align:center">
                        <a href="https://www.facebook.com/a2itonline/" target="_blank" class="btn btn-lg"style="background-color:#E60C3D; color:white;">View More</a> 
                    </div>
                </div>
    </div>
</section>

@endsection
@push('styles')
<link href="{{asset(config('app.prefix').'dist/css/lightbox.css')}}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{asset(config('app.prefix').'dist/js/lightbox.js')}}"></script>
@endpush