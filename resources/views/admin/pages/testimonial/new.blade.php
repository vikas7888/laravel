@extends('admin.layout.admin')
@section('title','Add Testimonial')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Add Testimonial</b></h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse"> <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    @if($errors->count())
                    @foreach ($errors->all() as $message)
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ $message }}
                    </div>
                    @endforeach
                    @endif

                    <form method="POST" enctype="multipart/form-data" action="{{ route('testimonial.store') }}"
                        data-toggle="validator">
                        @csrf


                        <fieldset>
                            <div class="form-group has-feedback">
                                <label class="control-label">Student Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="Enter Student Name"
                                    autocomplete="name" required="required">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Student Images</label>
                                <input type="file" class="form-control" name="image" value="{{ old('image') }}"
                                    autocomplete="image" required="required">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Reviews</label>
                                <textarea class="form-control" name="reviews"
                                    placeholder="Enter Review" autocomplete="false" required="required"
                                    rows="5">{{ old('reviews') }}</textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="status" required="required">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-block btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection

@push('styles')
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/plugins/iCheck/all.css') }}">

<!-- bootstrap datepicker -->
<link rel="stylesheet"
    href="{{ asset(config('app.prefix').'admin/components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

<!-- DataTables -->
<link rel="stylesheet"
    href="{{ asset(config('app.prefix').'admin/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
    .wide {
        padding: 10px;
    }

    th {
        font-size: 16px;
    }

    td {
        font-size: 20px;
    }

    .big {
        font-size: 16px;
        font-weight: bold;
    }
</style>
@endpush

@push('scripts')
<!-- bootstrap datepicker -->
<script
    src="{{ asset(config('app.prefix').'admin/components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
</script>

<!-- iCheck 1.0.1 -->
<script src="{{ asset(config('app.prefix').'admin/plugins/iCheck/icheck.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset(config('app.prefix').'admin/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset(config('app.prefix').'admin/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
</script>
@endpush