@extends('admin.layout.admin')
@section('title','View Certificate')
@section('mod_title','Certificate')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Certificate Manager</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="row" style="padding: 10px;">
                        <div class="col-md-12">
                        <a href="/admin/certificate" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Back </a><hr>
                        </div>
                </div>
                <div class="box-body">
                    <table id="data-table" class="table table-bordered table-striped">
                     
                            <tr>
                                <th>Student Name</th> <td>{{ ucwords($certificate->student_name) }}</td>
                            </tr>
                            @if($certificate->type == 'Request')
                                <tr>
                                    <th>Phone Number</th> <td>{{ $certificate->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th> <td>{{ $certificate->email }}</td>
                                </tr>
                            @endif
                            @if(!empty($certificate->issued_by))
                            <tr>
                                <th>Issued By</th><td>{{ ucwords($certificate->issued_by) }}</td>
                            </tr>
                            <tr>
                                <th>Issued On</th><td>{{ ucwords($certificate->issued_on) }}</td>
                            </tr>
                            @endif
                            <tr>
                                <th>Email ID</th><td>{{ ucwords($certificate->email) }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th><td>{{ ucwords($certificate->phone) }}</td>
                            </tr>
                            <tr>
                                <th>Course</th><td>{{ ucwords($certificate->course) }}</td>
                            </tr>
                            <tr>
                                <th>Certificate ID</th><td>{{ $certificate->certificate_id }}</td>
                            </tr>
                            <tr>
                                <th>Course From</th><td>{{ $certificate->course_from }}</td>
                            </tr>
                            <tr>
                                <th>Course To</th><td>{{ $certificate->course_to }}</td>
                            </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <style>
        th { font-size: 16px; }
        td { font-size: 20px; }
        .big{
            font-size: 16px;
            font-weight: bold;
        }
    </style>
@endpush

@push('scripts')
<!-- DataTables -->
<script src="{{ asset(config('app.prefix').'admin/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $('#data-table').DataTable({
            "aaSorting": [],
        });
    })
</script>
@endpush
