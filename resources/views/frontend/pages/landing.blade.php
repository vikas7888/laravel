
<!DOCTYPE html>
<html lang="en" class=" no-touchevents"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title>A2IT - Best Industrial Training company in Mohali Chandigarh</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="robots" content="index,follow">

		<link rel="stylesheet" href="{{asset(config('app.prefix').'landing_assets/css')}}" data-eqcss-read="true">
		<link rel="stylesheet" href="{{asset(config('app.prefix').'landing_assets/select2.min.css')}}" data-eqcss-read="true">
		<link rel="stylesheet" href="{{asset(config('app.prefix').'landing_assets/bootstrap-datepicker.standalone.min.css')}}" data-eqcss-read="true">
		<link rel="stylesheet" href="{{asset(config('app.prefix').'landing_assets/jquery.timepicker.css')}}" data-eqcss-read="true">
		<link rel="stylesheet" href="{{asset(config('app.prefix').'landing_assets/contactme-1.4.css')}}" data-eqcss-read="true">
		<link rel="stylesheet" href="{{asset(config('app.prefix').'landing_assets/jonny-1.2.css')}}" data-eqcss-read="true">
		<script src="https://use.fontawesome.com/83c487907e.js"></script>

		<style id="data-eqcss-0-0" data-eqcss-read="true"></style>
		<style id="data-eqcss-1-0" data-eqcss-read="true"></style>
	</head>
	<body>
		<section class="jonny">
			<div class="infos">
				<!-- BACKGROUND IMAGE -->
				<img src="{{asset(config('app.prefix').'landing_assets/incubator.jpg')}}" alt="Cover">
			
				<div class="contain">
					<div>
						<div>
							<img src="{{asset(config('app.prefix').'landing_assets/logo.png')}}" class="logo" alt="Logo">
							<h1 class="title">{{ strtoupper($landing->title) }}</h1>
                            <p class="description">{{ $landing->description }}</p>
							
							<a href="javascript:void(0)" target="_blank" class="address">C-124, Industrial Area, Phase 8,Mohali 
                                    <br><a href="tel:7814141400">7814141400</a> <a href="tel:7415151523">7415151523</a></a>
							<div class="social">
								<a href="https://www.facebook.com/" class="facebook" target="_blank"></a>
								<a href="https://www.instagram.com" class="instagram" target="_blank"></a>
								<a href="https://www.twitter.com/"  class="twitter" target="_blank"></a>
								<a href="https://www.youtube.com"   class="youtube" target="_blank"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form">
				<div>
					<div data-eqcss-0-0-parent="" data-eqcss-1-0-parent="">
						<h3 data-eqcss-0-0-prev="" data-eqcss-1-0-prev="">Tell us about yourself<br>and we'll contact you shortly</h3>
						<!-- START - Contact Form -->
						<form class="contactMe small" action="{{ route('form.landing')}}" method="POST" edata-eqcss-0-0="" data-eqcss-1-0="">
							@csrf
							<section>
								<div class="form-row">
									<div>
										<div class="title {{ $errors->has('name') ? 'has-error' : ''}}">Your Name</div>
										<input type="text" name="name" data-displayname="Name" class="field" placeholder="Your Name" required="">
                                        {!! $errors->first('name', '<p style="color:red; font-size:14px;">:message</p>') !!}
                                    </div>
								</div>
								<div class="form-row two">
									<div>
										<div class="title {{ $errors->has('email') ? 'has-error' : ''}}">E-mail</div>
										<input type="email" name="email" data-displayname="E-mail" class="field" placeholder="E-mail" required="">
                                       
                                    </div>
                                    {!! $errors->first('email', '<p style="color:red; font-size:14px;">:message</p>') !!}
									<div>
										<div class="title {{ $errors->has('phone') ? 'has-error' : ''}}">Phone number</div>
										<input type="tel" name="phone" data-displayname="Phone number" class="field" placeholder="Phone number" required="">
                                    </div>
                                    {!! $errors->first('phone', '<p style="color:red; font-size:14px;">:message</p>') !!}
								</div>
								
								<div class="form-row">
									<div class="title">Details</div>
									<textarea name="message" data-displayname="Message" class="field" placeholder="Details" required=""></textarea>
								</div>
								
								<input type="hidden" name="recaptcha" id="landing-recaptcha">

								<div class="msg"></div>

								<button class="btn" type="submit" >Send</button>
							</section>
						</form>
						<!-- END - Contact Form -->
					</div>
				</div>
			</div>
		</section>

		
		<script src="{{asset(config('app.prefix').'landing_assets/jquery-3.2.1.min.js')}}"></script>
		<script src="{{asset(config('app.prefix').'landing_assets/modernizr-touch-events.js')}}"></script>

		<script src="{{asset(config('app.prefix').'landing_assets/weakmap-polyfill.min.js')}}"></script>
		<script src="{{asset(config('app.prefix').'landing_assets/formdata.min.js')}}"></script>
		<script src="{{asset(config('app.prefix').'landing_assets/bootstrap-datepicker.min.js')}}"></script>
		<script src="{{asset(config('app.prefix').'landing_assets/jquery.timepicker.min.js')}}"></script>
		<script src="{{asset(config('app.prefix').'landing_assets/select2.full.min.js')}}"></script>
		<!--[if lt IE 9]><script src="contactme/js/EQCSS-polyfills-1.7.0.min.js"></script><![endif]-->
			<script src="{{asset(config('app.prefix').'landing_assets/EQCSS-1.7.0.min.js')}}"></script>
			<script src="{{asset(config('app.prefix').'landing_assets/contactme-config.js')}}"></script>
			<script src="{{asset(config('app.prefix').'landing_assets/contactme-1.4.js')}}"></script>
		<!-- To enable Google reCAPTCHA, uncomment the next line: -->
		<!-- <script src="https://www.google.com/recaptcha/api.js?onload=initRecaptchas&render=explicit" async defer></script> -->

		<script src="{{asset(config('app.prefix').'landing_assets/jonny-1.2.js')}}"></script>
		
		<script src="https://www.google.com/recaptcha/api.js?render=6LejhKoUAAAAAEbSD2YBjtK8VyPa6HwpTjQmrLuI"></script>
        <script>
            grecaptcha.ready(function() 
            {
                grecaptcha.execute('6LejhKoUAAAAAEbSD2YBjtK8VyPa6HwpTjQmrLuI', {action: 'landing'}).then(function(token)
                {
                    if(token){
                        document.getElementById('landing-recaptcha').value = token;
                    }
                });
            });
        </script>
        
</body>
</html>