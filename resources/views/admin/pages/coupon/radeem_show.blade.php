@extends('admin.layout.admin')
@section('title','Radeem View')
@section('mod_title','Radeem View')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Radeem View</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="row" style="padding: 10px;">
                    <div class="col-md-12">
                        <a href="/admin/radeem" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Back </a>
                    </div>
                </div>
                
                <div class="box-body">
                
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mt-3">Coupon Results for {{ $phone }}</h3>
                    </div>
                    <div class="col-md-6">
                        <!--<div class="card">
                            <div class="card-body">
                            <h4>Total Earning: Rs {{ $earning ?? 0 }}.00</h4>
                            </div>
                        </div>-->
                    </div>
                
                </div> 
                
                    <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Coupon Code</th>
                                <th>Name</th>
                                <th>Course Name</th>
                                <th>Phone</th>
                                <th>Course Payment</th>
                                <th>Commision</th>
                                <th>Commision Paid</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($radeems as $key => $cmp)
                            <tr>
                                <td><span class="label label-primary">{{ $cmp->code }}</span></td>
                                <td>{{ $cmp->name }}</td>
                                <td>{{ $cmp->program->name }}</td>
                                <td>{{ $cmp->phone }}</td>
                                <td>
                                    @if($cmp->status == 1)
                                        <span class="label label-success">Paid</span>
                                    @else
                                        <span class="label label-danger">Not Paid</span>
                                    @endif
                                </td>
                                <td>Rs{{ $cmp->coupon->commision }}/-</td>
                                <td>
                                    @if($cmp->com_paid == 1)
                                        <span class="label label-success">Paid</span>
                                    @else
                                        <span class="label label-danger">Not Paid</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        @if($cmp->com_paid == 1)
                                            <a class="btn btn-warning" href="{{ route('radeem.edit',['id' => $cmp->id ]) }}"
                                            onclick="return confirm('Are you sure you want to Mark commission to Unpaid?');" >
                                            <i class="fa fa-refresh"></i> Mark as Unpaid</a>
                                        @else
                                            <a class="btn btn-success" href="{{ route('radeem.edit',['id' => $cmp->id ]) }}"
                                            onclick="return confirm('Are you sure you want to Mark commission to Paid?');" >
                                            <i class="fa fa-check"></i> Mark as Paid</a>
                                        @endif
                                    </div>
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    
                    
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
