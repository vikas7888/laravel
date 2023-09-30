<?php
  $uriP = explode('/',\Request::path()); 
?>
   <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset(config('app.prefix')."admin/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ ucwords(Auth::user()->first_name) }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">

        <li class="header">Management</li>
        @if(Auth::user()->role == 'ADMIN')
            <li class="<?php echo ($uriP[1] == 'dashboard' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>      
            <li class="<?php echo ($uriP[1] == 'inquiry' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/inquiry"><i class="fa fa-list"></i> <span>Inquiry</span></a></li>     
            <li class="<?php echo ($uriP[1] == 'internship' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/internship"><i class="fa fa-clipboard"></i> <span>Internships</span></a></li>            
            <li class="treeview">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Branches Manager</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo ($uriP[1] == 'branch' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/branch"><i class="fa fa-clipboard"></i> <span>Branches</span></a></li>
                <li class="<?php echo ($uriP[1] == 'branch-courses' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/branch-courses"><i class="fa fa-clipboard"></i> <span>Courses</span></a></li>    
            </ul>
            </li>
            <li class="treeview">
            <a href="#">
                <i class="fa fa-ticket"></i> <span>Coupons</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo ($uriP[1] == 'coupons' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/coupons"><i class="fa fa-circle-o"></i> <span>Coupons</span></a></li>
                <li class="<?php echo ($uriP[1] == 'radeem'  && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/radeem"><i class="fa fa-circle-o"></i> <span>Radeemed</span></a></li>    
            </ul>
            </li>
        
            <li class="<?php echo ($uriP[1] == 'training' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/training"><i class="fa fa-code"></i> <span>Training Form</span></a></li>     
            <li class="<?php echo ($uriP[1] == 'course category' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/category"><i class="fa fa-list-alt"></i> <span>Course Category</span></a></li>     
            <li class="<?php echo ($uriP[1] == 'course' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/course"><i class="fa fa-book"></i> <span>Course</span></a></li>     
            <li class="<?php echo ($uriP[1] == 'media')    ? 'active' : '' ?>"><a href="/admin/media"><i class="fa fa-image"></i> <span>Media</span></a></li>  
            <li class="<?php echo ($uriP[1] == 'testimonial')    ? 'active' : '' ?>"><a href="/admin/testimonial"><i class="fa fa-image"></i> <span>Testimonial</span></a></li>        
            <li class="<?php echo ($uriP[1] == 'carriers' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/carriers"><i class="fa fa-users"></i> <span>Carreer</span></a></li>     
            <li class="<?php echo ($uriP[1] == 'landing' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/landing"><i class="fa fa-arrow-right"></i> <span>Landing Page</span></a></li>
            <li class="<?php echo ($uriP[1] == 'certificate' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/certificate"><i class="fa fa-certificate"></i> <span>Certificate</span></a></li>
            <li class="<?php echo ($uriP[1] == 'participate' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/participate"><i class="fa fa-user"></i> <span>Participate</span></a></li>
            <li class="<?php echo ($uriP[1] == 'notification' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/notification"><i class="fa fa-exchange"></i> <span>Notifications</span></a></li>
        @elseif(Auth::user()->role == 'USER')
            <li class="<?php echo ($uriP[1] == 'dashboard' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>      
            <li class="<?php echo ($uriP[1] == 'internship' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/internship"><i class="fa fa-clipboard"></i> <span>Internships</span></a></li>            
            <li class="<?php echo ($uriP[1] == 'inquiry'  && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/inquiry"><i class="fa fa-list"></i> <span>Inquiry</span></a></li>     
            <li class="<?php echo ($uriP[1] == 'training' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/training"><i class="fa fa-code"></i> <span>Training Form</span></a></li>     
            <li class="<?php echo ($uriP[1] == 'certificate' && isset($uriP[1]) == '')? 'active' : '' ?>"><a href="/admin/certificate"><i class="fa fa-certificate"></i> <span>Certificate</span></a></li>
        @endif
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
