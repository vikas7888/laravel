@extends('admin.layout.admin')
@section('title','Issue New Certificate')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Issue New Certificate</b></h2>
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

                    <form method="POST" action="{{ route('certificate.store') }}"
                        data-toggle="validator">
                        @csrf
                        <fieldset>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Admission/Certificate ID</label>
                                        <input type="text" class="form-control" name="certificate_id" value="{{ old('certificate_id') }}"
                                            placeholder="Enter Certificate ID"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Course Name</label>
                                        <input type="text" class="form-control" name="course" value="{{ old('course') }}"
                                            placeholder="Enter Course Name"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Student Name</label>
                                        <input type="text" class="form-control" name="student_name" value="{{ old('student_name') }}"
                                           placeholder="Student Name"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                           placeholder="Student Email"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                           placeholder="Student Phone"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Project Name</label>
                                        <input type="text" class="form-control" name="project_name" value="{{ old('project_name') }}"
                                           placeholder="Student Project Name"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Transcript</label>
                                        <input type="text" class="form-control" name="transcript" value="{{ old('transcript') }}"
                                           placeholder="Enter Transcript"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Course Starts From</label>
                                        <input type="date" class="form-control" name="course_from" value="{{ old('course_from') }}"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Course To</label>
                                        <input type="date" class="form-control" name="course_to" value="{{ old('course_to') }}"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                                
                    
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Issued By</label>
                                        <input type="text" class="form-control" name="issued_by" value="{{ old('issued_by') }}"
                                            style="text-transform:uppercase" placeholder="Certificate Issuer Name"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Issued On</label>
                                        <input type="date" class="form-control" name="issued_on" value="{{ old('issued_on') }}"
                                            autocomplete="off" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Issue Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value="" selected>--Select Status--</option>
                                            <option value="1">Issue Now</option>
                                            <option value="0">Pending</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                 <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Remarks</label>
                                        <input type="text" class="form-control" name="remarks" value="{{ old('remarks') }}"
                                            placeholder="Extra remarks on bottom"
                                            autocomplete="off">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
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