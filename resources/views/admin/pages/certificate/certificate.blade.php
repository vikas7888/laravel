 @extends('admin.layout.admin')
@section('title','Certificate')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Certificate</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a download href="{{ asset('public/uploads/certificate/') }}/{{ $file_name }}.png" class="btn btn-danger btn-block">Download</a>
                    <hr>    
                    <img src="{{ asset('public/uploads/certificate/') }}/{{ $file_name }}.png" height="100%" width="100%" class="img" />
                    <hr>
                    <a download href="{{ asset('public/uploads/certificate/') }}/{{ $file_name }}.png" class="btn btn-danger btn-block">Download</a>
                
                   <a  href="https://api.whatsapp.com/send?text={{ asset('public/uploads/certificate/') }}/{{ $file_name }}.png" data-action="share/whatsapp/share" class="btn btn-danger btn-block">Share on What,s app</a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
