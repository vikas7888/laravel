@extends('frontend.layout.main')
@section('title','Verify Certificate')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3 style="margin-top: 80px"> VERIFY CREDENTIAL</h3>
                </div>
            </div>
        </div>
    </div>
     <h1 style="text-align:center; Margin-top:50px;color:RED;font-weight:bold;">GLOBAL CREDENTIAL VERIFICATION </h1>
    <!-- End Page Title Area -->
 <!-- Start Course Details Area -->
 <section class="course-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img src="{{asset(config('app.prefix').'assets/img/verify1.png')}}" class="img-responsive" >
            </div>
            <div class="col-lg-6 col-md-6">
                 
                    <div class="course-details-tabs">
                        
                        
                        
                        <ul id="tabs">
                            @if($data->type === 'apply')
                                <li class="active" id="tab_1" style="background-color:#0e418e; color:#fff;">Apply Certificate</li>
                                <li class="inactive" id="tab_2">Verify Certificate</li>
                            @else
                                <li class="inactive" id="tab_1" style="background-color:#0e418e; color:#fff;">Apply Certificate</li>
                                <li class="active" id="tab_2">Verify Certificate</li>

                            @endif
                        </ul>
                        
                        <div class="content Jumbotron  @if($data->type === 'apply') show @endif" id="tab_1_content">
                            <h2 class="title">A2IT Apply Certificate</h2>
                            
                            <p style="margin-top: 5px; color:#000;">Welcome to the A2IT Certification Apply Certificate Page. Please enter your information provided by A2IT Center.<br><br>
                            
                            Upon entering the Information our representative will verify the informaion and Issue the certificate to the Student.</p>
                            
                                <form id="contactForm" method="POST" action="{{ route('apply.certificate')}}" style="border: 2px Solid red;">
                                    @csrf
                                    <div class="row">
                                        @if($errors->count())
                                            @foreach ($errors->all() as $message)
                                            <div class="col-lg-12 col-md-6">
                                                <div class="alert alert-danger alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <strong><span id='emsg'></span></strong>{{ $message }}
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif
                                        <!--<div class="col-lg-12 col-md-12">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label for="number">A2IT Code</label>-->
                                        <!--        <input type="text" class="form-control" value="A2ITMH" readonly>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="number">ID Number</label>
                                                <input type="text" class="form-control" name="certificate_id" id="number" required data-error="Please enter your number" style="text-transform: uppercase !important">
                                                <small class="form-text text-danger">
                                                     e.g.:  A2ITMHXXXXXXX
                                                </small>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="message">Course/Training Name</label>
                                                <input type="text" class="form-control" name="course" id="number" required data-error="Please enter your number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="number">Name (For Certificate)</label>
                                                <input type="text" class="form-control" name="student_name" id="number" required data-error="Please enter your number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="number">Mobile</label>
                                                <input type="text" class="form-control" name="phone" id="number" required data-error="Please enter your number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="number">Email</label>
                                                <input type="text" class="form-control" name="email" id="number" required data-error="Please enter your number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="number">Project Name (if not fill - NO)</label>
                                                <input type="text" class="form-control" name="project_name" id="project_name" required data-error="Please enter your Project Name" >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="number">Transcript (if not fill - NO)</label>
                                                <input type="text" class="form-control" name="transcript" id="transcript" required data-error="Please enter your Transcript">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="message">Course Starting Date:</label>
                                                <input type="date" class="form-control" name="course_from" id="number" required data-error="Please enter your number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="message">Course Ending Date:</label>
                                                <input type="date" class="form-control" name="course_to" id="number" required data-error="Please enter your number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                   
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </form>
            
                        </div>
                        
                        <div class="content Jumbotron @if($data->type != 'apply') show @endif" id="tab_2_content">
                            <h2 style="font-size:22px;">Welcome to the A2IT Global Verification Page:</h2>
                            
                            <p style="margin:10px 0px; color:#000; font-size:16px;">This fraud prevention system can be used to verify A2IT Certificate held by candidates world-wide.
                            The Credential ID Number can be found on all certificates issued by A2IT.<br>
                             Upon entering the ID Number, Authentication details relating to the Certificate Holder will be presented.</p>
                            
                                <form id="verify">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">A2IT ID</label>
                                                <input type="text" class="form-control" name="certi_code" id="certi_code" style="text-transform: uppercase; border: 2px dotted black;"  required data-error="Please enter your certficate code" autocomplete="off" autofocus placeholder="First part ID (A2IXXX)">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" name="certificate_id" id="certificate_id" style="border: 2px dotted black;" required data-error="Please enter certificate id" autocomplete="off" placeholder="Second Part ID (74XXX)">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="alert alert-danger alert-dismissible" role="alert" id="error" style="display: none ">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong><span id='emsg'></span></strong>Unable to find your certificate, Please contact your center administrator.
                                            </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-block" id="submit">Verify</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="container">
                     <div class="alert alert-success alert-dismissible certificate-success" role="alert" id="success" style="display:none">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                
                                                <br>
                                                <table class="table table-bordered table-condensed">
                                                        <tbody>
                                                            <h5>Presented to</h5><h1><strong><span id="fname"></span></strong></h1>
                                                            <h5>Has Successfully completed the training/Internship/Diploma as original:</h5>
                                                            <h1><span id="certification"></span></h1>
                                                            <h5><strong>From:</strong>&nbsp;&nbsp; <strong><span id="coursefrom"> &nbsp;</span></strong> &nbsp;to&nbsp; <strong><span id="courseto"></span></strong></h5>
                                                            
                                                           
                                                           <h5> <strong>Project Name:&nbsp; &nbsp; </strong><span id="projectname"></span></h5>
                                                            
                                                             <ul style="margin-top:35px; text-align:left; font-size:20px;">
                                                                 <li> Transcript:
                                                                <strong><span id="trans"></span></strong></li>
                                                                <li>Issued on:
                                                                <strong><span id="issueon"></span></strong></li>
                                                                <li>
                                                                    Issued By:
                                                                    <strong><span id="issueby"></span></strong>
                                                                </li>
                                                                <li>Status:<span id="status"></span></li>
                                                             </ul>
                                                        </tbody>
                                                </table>
                </div>
        </div>
    </div>
 </section>
@endsection
@push('scripts')
<script>
 $.ajaxSetup({

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}

});
$(document).ready(function(){
    $('#submit').on('click', function(e) {
        //e.preventDefault();
        var certi_code = $('#certi_code').val();
        var certi_id   = $('#certificate_id').val();
        $.ajax({
           type: "POST",
           url: '/verify/certificate',
           data:{certi_code:certi_code, certi_id:certi_id,},
           success: function(response) {
              if(response.status == false)
              {
                $('#error').show();
                $('#success').hide();
              }else
              {
                 $('#success').show();
                 $('#fname').html(response.certificate.student_name);
                 $('#issueby').html(response.certificate.issued_by);
                 $('#issueon').html(response.certificate.issued_on);
                 $('#certification').html(response.certificate.course);
                 $('#projectname').html(response.certificate.project_name);
                 $('#trans').html(response.certificate.transcript);
                 $('#coursefrom').html(response.certificate.course_from);
                 $('#courseto').html(response.certificate.course_to);
                 $('#status').html('COMPLETED');
                 $('#error').hide();
              }
           }
       });
    });
    
});
</script>
@endpush