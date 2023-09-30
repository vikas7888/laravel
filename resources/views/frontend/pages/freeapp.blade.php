@extends('frontend.layout.main')
@section('title','freeapp')
@section('content')

<section class="newsletter-area ptb-100 news">
    <div class="container">
        <div class="newsletter">
            <h1>Learn anywhere with A2IT iOS and Android App</h1>
            <h4>Now Get Free Video Courses, E-Books, Event Updates & Class Notes Anywhere Anytime </h4>
            <p>Free Download Educational App with Step-by-Step Guide To Learn or Teach in Smarter Way</p>
            <a href="https://play.google.com/store/apps/details?id=co.bran.fwxzc&hl=en_IN&gl=US" target="_blank"><img src="{{asset(config('app.prefix').'assets/img/google-btn.png')}}"></a>
               <a href="https://apps.apple.com/in/app/myinstitute/id1472483563" target="_blank"><img src="{{asset(config('app.prefix').'assets/img/apple-btn.png')}}"></a>
              <h2>A2IT - You Dream : We Build </h2>  
        </div>
    </div>
</section>
<style>
    .red{
        color:red;
        margin-top:15px;
        margin-bottom:15px;
    }
    .news{
        margin-top:90px;
    }
    .news h1{
        Color:#FFF;
    }
    
    .news h4{
        Color:yellow;
        margin-top:10px;
    }
    .news h2{
        color:yellow;
    }
    .news img{
        Margin-top:-50px;
    }
 @media only screen and (max-width : 768px) {
       .news h1{
    Margin-top:12px;
       font-size:25px;
    } 
    .news h3{
        Font-size:25px;
        margin-bottom:10px;
    }
    }
    
    
</style>
    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "www.a2itsoft.com",
  "url": "https://www.a2itsoft.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.a2itsoft.com/free-app{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>



<!-- End About Area -->
@endsection