@extends('admin.layout.admin')
@section('title','Certificate')
@section('mod_title','Certificate')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Certificate Manager</b></h2>
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
                        <a href="/admin/certificate/create" class="btn btn-md btn-danger"><i class="fa fa-plus"></i> Issue New Certificate</a><hr>
                        </div>
                    </div>
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Admission ID</th>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Created By</th>
                                <th>Issue Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($certificate as $key => $cert)
                            <tr>
                                <td>{{ $cert->certificate_id }}</td>
                                <td>{{ ucfirst($cert->student_name) }}</td>
                                <td>{{ ucfirst($cert->course) }}</td>
                                <td>
                                    @if($cert->type == 'REQUEST')
                                        <span class="label label-warning">User Applied</span>
                                    @else
                                        <span class="label label-success">Admin</span>
                                    @endif
                                </td>
                                <td>
                                    @if($cert->status == 0)
                                        <span class="label label-danger">Pending</span>
                                    @else
                                        <span class="label label-success">Issued by {{ strtoupper($cert->issued_by) }}</span>
                                    @endif
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('certificate.destroy',['id'=> $cert->id ])}}">
                                        @csrf
                                        @method('delete')
                                        <div class="btn-group">
                                            @if($cert->type != 'REQUEST')
                                                <a class="btn btn-info" title="Get Certificate" href="{{ route('certificate.print',['id'=> $cert->id ])}}"><i class="fa fa-certificate"></i></a>
                                            @endif
                                            <a class="btn btn-success" href="{{ route('certificate.show',['id'=> $cert->id ])}}"><i class="fa fa-eye"></i></a>
                                            @if(Auth::user()->role == 'USER' && $cert->type == 'REQUEST')
                                                <a class="btn btn-warning" href="{{ route('certificate.edit',['id'=> $cert->id ])}}"><i class="fa fa-pencil"></i></a>
                                            @elseif(Auth::user()->role == 'ADMIN')
                                                <a class="btn btn-warning" href="{{ route('certificate.edit',['id'=> $cert->id ])}}"><i class="fa fa-pencil"></i></a>
                                            @endif
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
@endpush

@push('scripts')
<!-- DataTables -->
<script src="{{ asset(config('app.prefix').'admin/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function () {
        $('#data-table').DataTable({
            "order": [[ 4, "desc" ]],
        });
    })
</script>
@endpush