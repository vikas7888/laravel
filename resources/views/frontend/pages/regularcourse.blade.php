@extends('frontend.layout.main')
@section('title','Apply Six Months Intership/ Regular Course Training 2021')
@section('meta_desc','Six Months Internship / Training Offer for all Engineering Branch: Limited Time Offer')
@section('meta_keywords','Six Months Internship, six Months training, MBA BBA Internship, digital marketing internship, Networking internship, python internship, free internship, internship fee, Civil Internship')
@push('seo')
    
@endpush
@section('content')
<div class="discount">
            <h1>Regular Course : Register now and get a 
             discount upto<span> 80% </span> </h1>
    </div>
    
    <section class="apply-area admission-area ptb-100">
      
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container online-text">
             
            <div class="row">
               <div class="col-lg-6 col-md-12 Intern-text">
                 <h2 style="font-size:40px;">Regular Courses</h2>
                 <hr>
                 <p>Build a strong foundation for your career by 
                 working on real world projects using cutiing edge technologies</p><br>
                 <span style="font-weight:700;color:#fff;border:1px yellow solid; color:black;background-color:yellow; font-size:20px;">Benefits to an internship with us</span><br>
                 <ul class="p-3">
                     <li>Life Time Access</li>
                     <li>Valid Certificate with starting & ending date</li>
                     <li>Certificate with online verfication</li>
                     <li>Pick project & Synopsis of your choice</li>
                     <li>Practice Test, Assignments & Quizes</li>
                     <li>Online/Offline doubts & project support</li>
                 </ul> 
                 <br>
                 <span>Discount Offer <span><del> Rs.28000/-</del> &nbsp;&nbsp;&nbsp;18000/- </span></span> <br><br>                 
                 <span>Only for 4-6 Months Online Internship</span><br><br>
                 <span>Need any Help Call: <b>+917415151523</b> </span><br><br>
                  <p>Limited time offer - <b>Book Now</b> </p>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="apply-form" style="padding: 15px 30px 15px 30px; margin-left: 5px" x-data="{
                    email: '',
                    phone: '',
                    course: '',
                    code: '',
                  }">
                     <form id="internship" method="POST" action="https://api.razorpay.com/v1/checkout/embedded">
                         @csrf
                        <input type="hidden" id="type" value="summer-training"> 
                        <input type="hidden" name="key_id" value="{{ env('RAZORPAY_KEY') }}">
                        <input type="hidden" name="order_id" id="order" required>
                        <input type="hidden" name="callback_url" value="{{ route('registration.done') }}">
                        <input type="hidden" name="cancel_url" value="{{ URL::current() }}">
                        <input type="hidden" name="name" value="A2IT">
                        <input type="hidden" name="description" value="Book Internship">
                        <input type="hidden" name="prefill[email]" x-bind:value="email">
						<input type="hidden" name="prefill[contact]" x-bind:value="phone">
                        <input type="hidden" id="amount" name="amount" value="1800000">

                        <div class="form-group">
                           <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="phone" x-model="phone" placeholder="Your Phone" required />
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control" name="email" x-model="email" placeholder="Your Email" required />
                        </div>
                        
                        <div class="form-group">
                           <input type="text" class="form-control" name="college" placeholder="Your College/Uni Name" required />
                        </div>
                        
                        <div class="row">
                        
                        <div class="col-md-6">
                        
                        <div class="form-group">
                           <select class="form-control" id="branch-dropdown" placeholder="Select Branch" name="branch" style="height: 52px !important;" required>
                               <option value="">Select Branch...</option>
                               @foreach($branch as $brnch)
                                <option value="{{ $brnch->id }}">{{ ucwords($brnch->name) }}</option>
                               @endforeach
                           </select>
                        </div>
                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-group">
                           <select class="form-control" id="program-dropdown" x-model="course" placeholder="Select Course" name="course" style="height: 52px !important;" required style="text-transform: capitalize !important">
                               <option value="">Choose your program...</option>
                           </select>
                        </div>
                        </div>
                        
                        </div>
                        
                        <div class="form-group" x-show="course === 'other'">
                           <input type="text" class="form-control" name="other" placeholder="Enter your Course" x-bind:required="course === 'other'" />
                        </div>
                        
                        <div class="input-group">
                           <input type="text" class="form-control" id="datetimepicker" name="start_date" placeholder="Choose Start Date" required autocomplete="off" />
                           <div class="input-group-append">
                                <span class="input-group-text"><i class="icofont-calendar"></i></span>
                            </div>
                        </div>
                        
                      
                      <div class="input-group">
                        <input type="text" class="form-control p-1 mt-4" x-model="code" id="coupon" name="code" style="font-weight: bold; border: 2px dotted red; text-transform: uppercase" placeholder="Have Coupon?" />
                        <div class="input-group-append">
                            <button class="btn btn-secondary btn-sm" x-on:click="applyCoupon()" x-bind:disabled="code === ''" type="button">Apply</button>
                        </div>
                      </div>
                      
                      <div class="alert alert-success mt-1 text-left status" style="display: none" role="alert">
                        Great! You saved Rs <span id="disc">0</span>/-
                      </div>
                      
                      <div class="alert alert-danger mt-1 text-left error" style="display: none" role="alert">
                        Opps! Invalid coupon code!
                      </div>
                        
                        
                        <button type="button" onclick="validateOrder()" class="btn btn-primary">Register and Pay <span id="amount-text">18000</span>/-</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="container">
    <div class="certificate">
        <h3>Industry recognized certificate: ISO 9001:2000 with Online Verification</h3>
        <img src="{{ asset(config('app.prefix').'assets/img/A2iT_Certificate.jpg') }}" alt="Free Certificate"> 
    </div>
</section>


<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <h3 style="text-align:center;color:blue;">Computer Science Internship Course's</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-about project-course bg-color">
                    <h3>Networking Fundamentals<br><br> 
                    <a href="https://youtube.com/embed/MvHdzyS3J1g?autoplay=1" class="video-link">
                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video">
                    </a> 
                    <a href="https://www.a2itsoft.com/course/networking-training/microsoft_networking_fundamentals">Syllabus</a> <a href="https://www.a2itsoft.com/course/networking-training/networking_projects">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3>Java Programming <br><br> <a href="https://www.youtube.com/embed/NJGNPuaFBJA?autoplay=1"  class="video-link">
                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/programming-training/core_java_oca_training" target="_blank">Syllabus</a> <a href="https://www.a2itsoft.com/course/web-development-training/java_programming_project" >Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3>Web Development<br><br> <a href="https://youtube.com/embed/gfAaAfmE05M?autoplay=1"  class="video-link">
                        <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/web-development-training" target="_blank">Syllabus</a> <a href="https://www.a2itsoft.com/course/web-designing-training/web_designing_projects">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-about project-course bg-color">
                    <h3>Python Programming<br><br> <a href=" https://youtube.com/embed/cBvfZvjLlfg?autoplay=1"  class="video-link">
                    <img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://www.a2itsoft.com/course/programming-training/python_training" target="_blank">Syllabus</a> <a href="https://www.a2itsoft.com/course/web-development-training/python_programming_projects" target="_blank">Projects</a></h3>
               </div>
             </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3>CCNA<br><br> <a href="https://youtube.com/embed/iiaMqCm9Xv8?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://www.a2itsoft.com/course/networking-training/ccna_security" target="_blank">Syllabus</a> <a href="https://www.a2itsoft.com/course/networking-training/ccna_networking_projects" target="_blank">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3> Digital Marketing<br><br> <a href="https://youtube.com/embed/ZX3IKN091-0?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/marketing-training/digital_marketing_course_training_in_mohali_chandigarh" target="_blank">Syllabus</a> <a href="https://www.a2itsoft.com/course/marketing-training/digital_marketing_projects" target="_blank">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3>Manual Software Testing<br><br> <a href="https://youtube.com/embed/ZvUyJd7dj40?autoplay=1" class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/software-testing-training/software_testing_course" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3> Ethical Hacking<br><br> <a href="https://youtube.com/embed/3a3WEd2IOi4?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://www.a2itsoft.com/course/cyber-security-training/ethical_hacking_associate" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3>Cyber Security<br><br> <a href="https://youtube.com/embed/Yim1vy8lhis?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://www.a2itsoft.com/course/cyber-security-training/cyber_security" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
               </div>
            </div>
             <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3>AWS Cloud<br><br> <a href=""  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
               </div>
            </div>
             <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3>Microsoft Azure<br><br> <a href=""  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
               </div>
            </div>
             <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about project-course bg-color">
                    <h3>PHP Programming<br><br> <a href=""  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
               </div>
            </div>
            
        </div>
    </div>
    
     <div class="container internship-course">
        <h3 style="text-align:center;color:#97b106;">Business & Management Internship Course's</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-about project-course bg-color1">
                    <h3> Digital Marketing<br><br> <a href="https://youtube.com/embed/ZX3IKN091-0?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/marketing-training/digital_marketing_course_training_in_mohali_chandigarh" target="_blank">Syllabus</a> <a href="https://www.a2itsoft.com/course/marketing-training/digital_marketing_projects" target="_blank">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-about project-course bg-color1">
                    <h3> Tally <br><br> <a href="https://youtube.com/embed/2rZZ7pkLIN4?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://www.a2itsoft.com/course/business-training/tally" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-about project-course bg-color1">
                    <h3> HR Management <br><br> <a href="https://youtube.com/embed/AqJ9a-iwYOI?autoplay=1" class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/business-training/hr_management_training" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
                </div>
            </div>
           <div class="col-lg-6 col-md-6">
                <div class="single-about project-course bg-color1">
                    <h3>Finance & Accounting Management<br><br> <a href="https://youtube.com/embed/JEz394C8vTc?autoplay=1" class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://www.a2itsoft.com/course/business-training/finance_training_internship" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
                </div>
            </div>
             
            <div class="col-lg-6 col-md-6">
                <div class="single-about project-course bg-color1">
                    <h3> Skill Development-PEP <br><br> <a href="https://youtube.com/embed/RN-C8zV3hec?autoplay=1" class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/business-training/skill_development_pep" target="_blank">Syllabus</a> <a href="" target="_blank">Projects</a></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container internship-course">
        <h3 style="text-align:center;color:red;">Civil Engineering Internship Course's</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-about project-course bg-color2">
                    <h3>AutoCAD<br><br> <a href="https://youtube.com/embed/724iGqxle7E?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/civil-training/autocad_civil_training" target="_blank">Syllabus</a> <a href="https://a2itsoft.com/course/civil-training/civil_engineering_project_reports" target="_blank">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-about project-course bg-color2">
                    <h3>Ravit Architecture<br><br> <a href=""  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/civil-training/revit_training" target="_blank">Syllabus</a> <a href="https://a2itsoft.com/course/civil-training/civil_engineering_project_reports" target="_blank">Projects</a></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-about project-course bg-color2">
                    <h3>3D Max<br><br> <a href="https://youtube.com/embed/ZX3IKN091-0?autoplay=1"  class="video-link"><img src="{{ asset(config('app.prefix').'assets/img/video_player.png') }}" alt="Demo Class Video"></a> <a href="https://a2itsoft.com/course/civil-training/3ds_max_training_in_chandigarh" target="_blank">Syllabus</a> <a href="https://a2itsoft.com/course/civil-training/civil_engineering_project_reports" target="_blank">Projects</a></h3>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.9/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.9/jquery.datetimepicker.full.min.js" integrity="sha512-hDFt+089A+EmzZS6n/urree+gmentY36d9flHQ5ChfiRjEJJKFSsl1HqyEOS5qz7jjbMZ0JU4u/x1qe211534g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        jQuery('#datetimepicker').datetimepicker({
            timepicker: false,
            format:'d-m-Y',
            formatDate:'Y-m-d',
            minDate: 0,
        });
        
        $('#branch-dropdown').on('change', function() {
            var category_id = this.value;
            $.ajax({
                url: "{{ route('programs') }}",
                type: "POST",
                data: {
                    _token : "{{ csrf_token() }}",
                    category_id: category_id
                },
                cache: false,
                success: function(result) {
                    $('#program-dropdown').empty();
                    $('#program-dropdown').append('<option value="">Select Program...</option>');
                    $.each(result.programs, function(index, subcategory) 
                    {
                        $('#program-dropdown').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                    });
                    $('#program-dropdown').append('<option value="other">Other...</option>');
                }
            });
        });
    });
    
    function validateOrder(){
    //$('#internship').on('submit', function(e) {
        //  e.preventDefault(); 
        //
        $("#internship")[0].reportValidity();
        var form = $("#internship");
        $.ajax({
            type: 'POST',
            url: "{{ route('online.training') }}",
            data: form.serialize(),
            success: function (result) 
            {
                console.log(result);
                if (result.status) {
                    $('#order').val(result.order_id);
                    form.submit();
                } else {
                    return false;
                }
            }
        });
        return false;
    //});
    }
    
    function applyCoupon(){
        //
        var amount =2000;
        let uri = "{{ url('validate-coupon') }}";
        uri += '/';
        uri += $("#coupon").val();
        uri += '/';
        uri += 'summer-training';
        
        $.ajax({
            type: 'GET',
            url:  uri,
            success: function (result) 
            {
                if(result.status){
                    $('.error').hide();
                    var discount = amount-result.coupon;
                    $('#amount').val(discount*100);
                    $('#amount-text').html(discount);
                    $('#disc').html(result.coupon);
                    $('.status').show(200);
                }else{
                    $('.status').hide();
                    $('.error').show(200);
                }
            }
        });
        
        
    }
        
</script>
@endpush
