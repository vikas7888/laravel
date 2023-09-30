@extends('admin.layout.admin')
@section('title','Coupons')
@section('mod_title','Coupons')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Coupons</b></h2>
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
                    <div class="row" style="padding: 10px;">
                        <div class="col-md-12">
                            <a href="{{ route('coupons.create') }}" class="btn btn-md btn-danger"><i class="fa fa-plus"></i> Add Coupon</a>
                            <hr>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Coupon Value</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coupons as $key => $cmp)

                            <tr>
                                <td>                                    
                                    <span class="label label-primary">{{ $cmp->code }}</span>
                                </td>
                                <td>{{ $cmp->value }}/-</td>
                                <td>{{ ucwords($cmp->name) }}</td>
                                <td>{{ $cmp->phone }}</td>
                                <td>
                                    <span class="label label-info">{{ $cmp->type }}</span>
                                </td> 
                                <td>
                                    <form method="post" action="{{ route('coupons.destroy',['id' => $cmp->id ]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <div class="btn-group">
                                        <a class="btn btn-primary" href="{{ route('coupons.edit',['id' => $cmp->id]) }}"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-success" href="{{ route('coupons.show',['id' => $cmp->id]) }}"><i class="fa fa-eye"></i></a>
                                        @if(Auth::user()->role == 'ADMIN')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-trash"></i></button>
                                        @endif
                                        </div>
                                    </form>
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
