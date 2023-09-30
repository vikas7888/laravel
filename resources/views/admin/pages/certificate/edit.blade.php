@extends('admin.layout.admin')
@section('title','Edit Certificate')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Edit Certificate</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    
                    <div class="row" style="padding: 10px;">
                        <div class="col-md-12">
                        <a href="/admin/certificate/" class="btn btn-md btn-danger"><i class="fa fa-chevron-left"></i> Go Back</a><hr>
                        </div>
                    </div>

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

                    <form method="POST" action="{{ route('certificate.update',['id' => $certificate->id]) }}"
                        data-toggle="validator">
                        @csrf
                        @method('PATCH')
                        
                        
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Admission/Certificate ID</label>
                                        <input type="text" class="form-control" name="certificate_id" value="{{ $certificate->certificate_id }}"
                                            placeholder="Enter Certificate ID"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Course Name</label>
                                        <input type="text" class="form-control" name="course" value="{{ $certificate->course }}"
                                            placeholder="Enter Course Name"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Student Name</label>
                                        <input type="text" class="form-control edit-student-name" name="student_name" value="{{ $certificate->student_name }}"
                                           placeholder="Student Name"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $certificate->email }}"
                                           placeholder="Student Email"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $certificate->phone }}"
                                           placeholder="Student Phone"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Project Name</label>
                                        <input type="text" class="form-control" name="project_name" value="{{ $certificate->project_name }}"
                                           placeholder="Student Project Name"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Transcript</label>
                                        <input type="text" class="form-control" name="transcript" value="{{ $certificate->transcript }}"
                                           placeholder="Enter Transcript"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Course Starts From</label>
                                        <input type="date" class="form-control" name="course_from" value="{{ $certificate->course_from }}"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Course To</label>
                                        <input type="date" class="form-control" name="course_to" value="{{ $certificate->course_to }}"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Issued By</label>
                                        <input type="text" class="form-control" name="issued_by" value="{{ $certificate->issued_by }}"
                                            style="text-transform:none" placeholder="Certificate Issuer Name"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Issued On</label>
                                        <input type="date" class="form-control" name="issued_on" value="{{ $certificate->issued_on }}"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Issue Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value="1" @if($certificate->status == 1) selected @endif>Issued</option>
                                            <option value="0" @if($certificate->status == 0) selected @endif>Pending</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Remarks</label>
                                        <input type="text" class="form-control" name="remarks" value="{{ $certificate->remarks }}"
                                            placeholder="Extra remarks on bottom"
                                            autocomplete="off">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <button type="submit" class="btn btn-lg btn-block btn-danger">Submit</button>
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

@push('styles')
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/plugins/iCheck/all.css') }}">

<!-- bootstrap datepicker -->
<link rel="stylesheet"
    href="{{ asset(config('app.prefix').'admin/components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

<!-- DataTables -->
<link rel="stylesheet"
    href="{{ asset(config('app.prefix').'admin/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
    .wide {
        padding: 10px;
    }

    th {
        font-size: 16px;
    }

    td {
        font-size: 20px;
    }

    .big {
        font-size: 16px;
        font-weight: bold;
    }
</style>
@endpush

@push('scripts')
<!-- bootstrap datepicker -->
<script
    src="{{ asset(config('app.prefix').'admin/components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
</script>

<!-- iCheck 1.0.1 -->
<script src="{{ asset(config('app.prefix').'admin/plugins/iCheck/icheck.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset(config('app.prefix').'admin/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
</script>

@endpush