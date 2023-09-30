@extends('admin.layout.admin')
@section('title','View Internship')
@section('mod_title','Internship')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Internship View</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="row" style="padding: 10px;">
                        <div class="col-md-12">
                        <a href="/admin/internship" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Back </a><hr>
                        </div>
                </div>
                <div class="box-body">
                    <table id="data-table" class="table table-bordered table-striped">
                            <tr>
                                <th>Registration Date</th>  <td>{{ $inq->created_at->format('d M Y') }}</td>
                            </tr>
                            <tr>
                                <th>OrderID</th> <td>{{ ucwords($inq->order_id) }}</td>
                            </tr>
                            <tr>
                                <th>PaymentID</th> <td>{{ ucwords($inq->razorpay_payment_id) ?? 'Not available' }}</td>
                            </tr>
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
                                <th>Start Date</th>  <td>{{ $inq->start_date->format('d M Y') }}</td>
                            </tr>
                            <tr>
                                <th>College Name</th>
                                <td>{{ $inq->college }}</td>
                            </tr>                            
                            <tr>
                                <th>Branch and Course</th>
                                <td>{{ $inq->category->name }} ({{ $inq->program->name ?? $inq->course }})</td>
                            </tr>                            
                            <tr>
                                <th>Payment</th>  <td>Rs {{ $inq->payment }}/-</td>
                            </tr>
                             <tr>
                                <th>Coupon</th>  <td>{{ $inq->code ?? 'None' }}</td>
                            </tr>
                            <tr>
                                <th>Status</th> 
                                <td>
                                    @if($inq->status == 1)
                                        <span class="label label-success">Paid</span>
                                    @else
                                        <span class="label label-danger">Not Paid</span>
                                    @endif
                                </td>
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
