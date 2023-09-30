@extends('admin.layout.admin')
@section('title','View Coupon')
@section('mod_title','Coupon')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Coupon View</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="row" style="padding: 10px;">
                    <div class="col-md-12">
                        <a href="/admin/coupons" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Back </a><hr>
                    </div>
                </div>
                <div class="box-body">
                    <table id="data-table" class="table table-bordered table-striped">
                            <tr>
                                <th>Coupon Code</th> 
                                <td>                                    
                                    <span class="label label-primary">{{ $coupon->code }}</span>
                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Coupon Type</th> 
                                <td>                                    
                                    <span class="label label-info">{{ $coupon->type }}</span>                                    
                                </td>
                            </tr>

                            <tr>
                                <th>Name</th> <td>{{ ucwords($coupon->name) }}</td>
                            </tr>
                            <tr>
                                <th>Name</th> <td>{{ ucwords($coupon->company) }}</td>
                            </tr>
                            <tr>
                                <th>Email</th> <td>{{ $coupon->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>  <td>{{ $coupon->phone }}</td>
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
