@extends('admin.layout.admin')
@section('title','Carriers')
@section('mod_title','Carrier')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Carrier Manager</b></h2>
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
                        <a href="/admin/carriers/create" class="btn btn-md btn-danger"><i class="fa fa-plus"></i> Add Carrier</a><hr>
                        </div>
                    </div>
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrier as $key => $carr)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ strtoupper($carr->title) }}</td>
                                <td>{{ $carr->description }}</td>
                                <td>
                                @if($carr->status == '1')
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-danger">In Active</span>
                                @endif
                                </td>
                                
                                <td>
                                        <form method="POST" action="{{ route('carriers.destroy',['id'=> $carr->id ])}}">
                                                @csrf
                                                @method('delete')
                                                <div class="btn-group">
                                                  
                                                    <a class="btn btn-warning" href="{{ route('carriers.edit',['id'=> $carr->id ])}}"><i class="fa fa-pencil"></i></a>
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </form>
                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
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