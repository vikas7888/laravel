@extends('admin.layout.admin')
@section('title','Send Notifications')
@section('content')
<section class="content">

      <!-- Info boxes -->
      <div class="row">
            <div class="col-md-6">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-mail-forward"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Previousaly Sent</span>
                  <span class="info-box-number">{{ $log->sent_last }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-paper-plane-o"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Sent Today</span>
                  <span class="info-box-number">@if(session('status')) {{ session('status') }} @else 0 @endif</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

          </div>


    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Send Notifications</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    @if($errors->count())
                    @foreach ($errors->all() as $message)
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ $message }}
                    </div>
                    @endforeach
                    @endif

                    <form method="POST" enctype="multipart/form-data" action="{{ route('notification.store') }}"
                        data-toggle="validator">
                        @csrf
                        <fieldset>
                            <div class="form-group has-feedback">
                                <label class="control-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                    placeholder="Enter Notification Title" autocomplete="off" required="required">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Image</label>
                                <input type="file" class="form-control" name="image" value="{{ old('image') }}"
                                    autocomplete="off">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Notification Detail</label>
                                <textarea class="form-control" name="body" placeholder="Enter Notificaion Details"
                                    autocomplete="off" required="required" rows="5">{{ old('body') }}</textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            {{-- <div class="form-group has-feedback">
                                <label class="control-label">URL to open on Notification Click</label>
                                <input type="url" class="form-control" name="url" value="{{ old('url') }}"
                                    placeholder="Enter URL to Open" autocomplete="off" required="required">
                                <div class="help-block with-errors"></div>
                            </div> --}}

                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-block btn-danger">Send
                                    Notifications</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection