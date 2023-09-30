@extends('admin.layout.admin')
@section('title','Trainings')
@section('mod_title','Trainings')
@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Training Manager</b></h2>
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
                                <th>Training intrest</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($training as $key => $inq)
                             @if(is_null($inq->complete))
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ ucwords($inq->name) }}</td>
                                <td>{{ $inq->email }}</td>
                                <td>{{ $inq->phone }}</td>
                                <td>{{ ucwords($inq->training_intrest) }}</td>
                                <td>
                                    {{ $inq->created_at->format('d M Y') }}
                                </td>
                                <td>
                                    <form method="post" action="{{ route('training.destroy',['id' => $inq->id ]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <div class="btn-group">
                                        <a class="btn btn-success" href="{{ route('training.show',['id' => $inq->id]) }}"><i class="fa fa-eye"></i></a>
                                        @if(Auth::user()->role == 'ADMIN')
                                          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        @endif
                                        </div>
                                    </form>
                                    <form method="post" action="{{ route('training2',['id' => $inq->id ]) }}">
                                        @method('POST')
                                        @csrf
                                        <div class="btn-group">
                                        <button onclick="if (confirm('Are you...?')) commentDelete(1); return false" type="submit" class="btn btn-warning">
                                             @if($inq->complete =='1')
                                            <input name="complete" type="radio" value="1" checked>
                                            @else
                                             <input name=complete type="radio" value="0">
                                             @endif
                                        </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endif
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
 <script>
      // The function below will start the confirmation dialog
      function confirmAction() {
                      if (confirm('Are you sure you want to save this thing into the database?')) {
              // Save it!
              console.log('Thing was saved to the database.');
            } else {
              // Do nothing!
              console.log('Thing was not saved to the database.');
            }

      }
    </script>
@endpush