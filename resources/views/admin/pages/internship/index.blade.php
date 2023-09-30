@extends('admin.layout.admin')
@section('title','Internships')
@section('mod_title','Internships')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Internships Manager</b></h2>
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
                    <div class="table-responsive">
                    <table id="data-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Payment Status</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Payment</th>
                                <th>Coupon</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($internships as $key => $inq)

                            <tr @if(!$inq->is_read) class="danger" @endif>
                                <td>
                                    @if($inq->status == 1)
                                        <span class="label label-success">Paid</span>
                                    @else
                                        <span class="label label-danger">Not Paid</span>
                                    @endif
                                </td>
                                <td>{{ ucwords($inq->name) }}</td>
                                <td>{{ $inq->phone }}</td>
                                <td>{{ $inq->program->name ?? $inq->course }}</td>
                                <td>{{ $inq->payment }}/-</td>
                                <td>
                                    <span class="label label-info">{{ $inq->code ?? '--' }}</span>
                                </td>
                                <td>
                                    {{ $inq->created_at->format('d M Y') }}
                                </td>
                                
                                <td>
                                    <form method="post" action="{{ route('internship.destroy',['id' => $inq->id ]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <div class="btn-group">
                                        <a class="btn btn-success" href="{{ route('internship.show',['id' => $inq->id]) }}"><i class="fa fa-eye"></i></a>
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
