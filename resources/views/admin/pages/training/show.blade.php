@extends('admin.layout.admin')
@section('title','View')
@section('mod_title','Inquiry')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>View2</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="row" style="padding: 10px;">
                        <div class="col-md-12">
                        <a href="/admin/training" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Back </a><hr>
                        </div>
                </div>
                <div class="box-body">
                    <table id="data-table" class="table table-bordered table-striped">
                     
                            <tr>
                                <th>Name</th> <td>{{ ucwords($inq->name) }}</td>
                            </tr>
                            <tr>
                                <th>Email</th> <td>{{ $inq->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>  <td>{{ $inq->phone }}</td>
                            </tr>
                            <tr>
                                <th>Father Name</th>  <td>{{ $inq->father_name }}</td>
                            </tr>
                            <tr>
                                <th>Training Intrested</th>  <td>{{ $inq->training_intrest }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>  <td>{{ $inq->address }}</td>
                            </tr>
                            <tr>
                                <th>College Name</th>  <td>{{ $inq->college_name }}</td>
                            </tr>
                            <tr>
                                <th>College Semester</th>  <td>{{ $inq->college_semester }}</td>
                            </tr>
                            <tr>
                                <th>College Roll#</th>  <td>{{ $inq->college_roll }}</td>
                            </tr>
                            <tr>
                                <th>Training Duration</th>  <td>{{ $inq->training_duration }}</td>
                            </tr>
                            <tr>
                                <th>Training Start Date</th>  <td>{{ date('d-M-Y',strtotime($inq->training_start)) }}</td>
                            </tr>
                            <tr>
                                <th>Training Endart Date</th>  <td>{{ date('d-M-Y',strtotime($inq->training_end)) }}</td>
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
