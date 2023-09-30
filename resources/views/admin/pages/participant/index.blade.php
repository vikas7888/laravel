@extends('admin.layout.admin')
@section('title','Participant')
@section('mod_title','Participant')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Participant Certificate</b></h2>
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
                    <form method="post" action="{{ route('participate.update', ['id' => $part->id])}}">
                       
                        @csrf
                        @method('put')
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Details</label>
                                    <textarea class="form-control" name="detail" id="editor1"
                                        placeholder="Enter Course details" autocomplete="false"
                                        required="required" rows="5">{{  $part->detail }}</textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Course Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $part->name }}"
                                        placeholder="Enter Course name" autocomplete="false" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Conducted On</label>
                                    <input type="text" class="form-control" name="conducted" value="{{ $part->conducted }}"
                                        placeholder="Enter Course name" autocomplete="false" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Location</label>
                                    <input type="text" class="form-control" name="location" value="{{ $part->location }}"
                                        placeholder="Enter Course name" autocomplete="false" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Location2</label>
                                    <input type="text" class="form-control" name="location2" value="{{ $part->location2}}"
                                        placeholder="Enter Course name" autocomplete="false" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1" @if($part->status == 1) selected @endif>Active</option>
                                        <option value="0" @if($part->status == 0) selected @endif>Inactive</option>
                                    </select>
                                    
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </form>
                   
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection