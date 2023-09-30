@extends('admin.layout.admin')
@section('title','Inquiries')
@section('mod_title','Inquiries')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Inquiry Manager</b></h2>
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
                    
                    <table id="data-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Type</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inquiry as $key => $inq)

                            <tr @if(!$inq->is_read) class="danger" @endif>
                                <td>&nbsp;</td>
                                <td>{{ ucwords($inq->name) }}</td>
                                <td>{{ $inq->email }}</td>
                                <td>{{ $inq->phone }}</td>

                                <td>
                                    @if($inq->course != "")
                                        {{ $inq->course }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    @if($inq->type == 'CONTACT')
                                        <span class="label label-warning">{{ $inq->type }}</span>
                                    @elseif($inq->type == 'BUY')
                                        <span class="label label-success">BUY NOW</span>
                                    @else
                                        <span class="label label-danger">{{ $inq->type }}</span>
                                    @endif
                                </td>
                                <td>
                                    {{ $inq->created_at->format('d M Y') }}
                                </td>
                                
                                <td>
                                    <form method="post" action="{{ route('inquiry.destroy',['id' => $inq->id ]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <div class="btn-group">
                                        <a class="btn btn-success" href="{{ route('inquiry.show',['id' => $inq->id]) }}"><i class="fa fa-eye"></i></a>
                                        @if(Auth::user()->role == 'ADMIN')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        @endif
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
