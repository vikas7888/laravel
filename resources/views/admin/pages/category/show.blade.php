@extends('admin.layout.admin')
@section('title','View category')
@section('mod_title','Category')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Category Manager</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="row" style="padding: 10px;">
                        <div class="col-md-12">
                        <a href="/admin/category" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Back </a><hr>
                        </div>
                </div>
                <div class="box-body">
                    <table id="data-table" class="table table-bordered table-striped">
                     
                            <tr>
                                <th>Category Name</th> <td>{{ ucwords($cat->name) }}</td>
                            </tr>
                            <tr>
                                <th>Banner</th><td><img src="{{ asset(config('app.prefix').'uploads').'/'. $cat->banner }}"/></td>
                            </tr>
                            <tr>
                                <th>Description</th><td>{!! $cat->details !!}</td>
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
