@extends('admin.layout.admin')
@section('title','Course')
@section('mod_title','Category')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Course Manager</b></h2>
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
                        <a href="/admin/course/create" class="btn btn-md btn-danger"><i class="fa fa-plus"></i> Add Course </a><hr>
                        </div>
                    </div>
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Course Category</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($course as $key => $cou)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ ucwords($cou->name) }}</td>
                                <td>{{ strtoupper($cou->category->name) }}</td>
                                <td>
                                @if($cou->status == '1')
                                    <span class="label label-success">Active</span>
                                @else
                                 <span class="label label-danger">In Active</span>
                                @endif
                                </td>
                                <td>

                                    <form method="POST" action="{{ route('course.destroy',['id'=> $cou->id ])}}">
                                        @csrf
                                        @method('delete')
                                        <div class="btn-group">
                                            <a class="btn btn-success" href="{{ route('course.show',['id'=> $cou->id ]) }}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-warning" href="{{ route('course.edit',['id'=> $cou->id ])}}"><i class="fa fa-pencil"></i></a>
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
