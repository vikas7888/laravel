@extends('admin.layout.admin')
@section('title','Dashboard')
@section('content')
<!-- Content Header (Page header) --> 
<section class="content-header">
   <h1>Dashboard</h1>       
</section>
<!-- Main content -->
<section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            
            @if(Auth::user()->role == 'ADMIN')
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                <h3>{{ $cou }}</h3>
                  <p>Course</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="/admin/course" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            @endif
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <h3>{{ $inq }}</h3>
                  <p>New Inquiries</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
                <a href="/admin/inquiry" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                <h3>{{ $train }}</h3>
                  <p>Toal Training Requests</p>
                </div>
                <div class="icon">
                  <i class="fa fa-forumbee"></i>
                </div>
                <a href="/admin/training" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                <h3>{{ $certi }}</h3>
                  <p>New Certificates Applied</p>
                </div>
                <div class="icon">
                  <i class="fa fa-certificate"></i>
                </div>
                <a href="/admin/certificate" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
            <!-- ./col vikas kumar developer 16 mar-->
    
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <h3>{{ $intern }}</h3>
                  <p>New Internship</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
                <a href="/admin/internship" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
             <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                <h3>{{ $trainc }}</h3>
                  <p>Toal Addmissions</p>
                </div>
                <div class="icon">
                  <i class="fa fa-forumbee"></i>
                </div>
                <a href="/admin/show_complete" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            
            
            
            <!-- ./col vikas kumar developer 16 mar end-->
          </div>
            <!-- /.row -->
</section>
@endsection