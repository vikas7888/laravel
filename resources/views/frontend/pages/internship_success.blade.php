@extends('frontend.layout.main')
@section('title','Thankyou for Registration')
@section('content')
<div class="contaniner-fluid">
@if($status)
    <div class="thanks-done">
        <img src="{{ asset(config('app.prefix').'assets/img/right btn.png') }}">
        <h1>Registration Confirmed!</h1>
        <p>Thanks for joining us in internship</p>
    </div>
    <div class="thanks-text">
       <p>You will receive a call from our executive within next 24 hours. 
       Then you will get the internship access on app</p> <br><br>
       <a href="https://www.a2itsoft.com/free-app">Download App</a><br><br>
       <p>During This Period, Enjoy Free Video Courses, E-Books, Event Updates & Class Notes</p>
                <br><br>
         <p>Please enjoy, and let us know if there’s anything else we can help you with.</p>
        
    </div>
@else
    <div class="thanks-done">
        <h1>Something went Wrong!</h1>
        <p>Payment failed! We are unable to process your bank details. Please try again with payment.</p>
    </div>
@endif
</div>
@endsection
