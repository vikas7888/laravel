@extends('admin.layout.admin')
@section('title','Landing')
@section('mod_title','Landing')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Landing Page Manager</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    @if(session('status'))
                        <div class="alert alert-success" id="msg-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p style="font-size: 18px"><strong>{{ session('status') }}</strong></p>
                        </div>
                    @endif
                    <form method="post" action="{{ route('landing.form',['id' => $landing->id])}}">
                       
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" name="title" value="{{ $landing->title }}"
                                        placeholder="Enter Course name" autocomplete="false" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" name="description" id="editor1"
                                        placeholder="Enter Course details" autocomplete="false"
                                        required="required" rows="5">{{  $landing->description }}</textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                   
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection

