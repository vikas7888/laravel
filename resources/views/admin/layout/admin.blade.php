
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | {{ env('APP_NAME', 'Edu CRM') }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/dist/css/skins/skin-red-light.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/dist/css/styles.css') }}">
    <style>
        li{
            font-size: 16px;
            font-weight: bold;
        }
    </style>

    <!-- Custom styles -->
    @stack('styles')
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red-light sidebar-mini fixed">
    
    <!-- Loader -->
    <div id="loader" style="display: none">
        <img src="{{ asset(config('app.prefix').'admin/dist/img/loading.gif') }}" class="ajax-loader"/>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="openModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" id="mod-title"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>

    <div class="wrapper">  
    <!-- Header -->
    @include('admin.inc.header')

    <!-- Sidebar -->
    @include('admin.inc.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
    <!-- Main content -->
    <section class="content">        
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

     <!-- Footer -->
    @include('admin.inc.footer')
</div><!-- ./wrapper -->

<!-- Core JavaScript -->	 
<!-- jQuery 3 -->
<script src="{{ asset(config('app.prefix').'admin/components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/plugins/validator.js') }}"></script>

<!-- Custom scripts -->
@stack('scripts')
<script src="{{ asset(config('app.prefix').'admin/dist/js/app.js') }}"></script>

<script>
  $(document).ready(function () {
      init("@yield('mod_title','Blank Page')");
  })
</script>

</body>
</html>
