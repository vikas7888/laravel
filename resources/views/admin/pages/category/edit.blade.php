@extends('admin.layout.admin')
@section('title','Edit Category')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Edit Category</b></h2>
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
                    <div class="row" style="padding: 10px;">
                            <div class="col-md-12">
                            <a href="/admin/category" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Back </a><hr>
                            </div>
                    </div>

                    <form method="POST" enctype="multipart/form-data"
                        action="{{ route('category.update',['id'=> $cat->id ]) }}" data-toggle="validator">
                        @csrf
                        @method('PATCH')

                        <fieldset>
                            <div class="form-group has-feedback">
                                <label class="control-label">Category Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $cat->name }}"
                                    style="text-transform:uppercase" placeholder="Enter Category Name"
                                    autocomplete="off" required="required">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Course Banner Images</label>
                                <input type="file" class="form-control" name="banner" value="" autocomplete="banner">
                                <img src="{{ asset(config('app.prefix').'uploads').'/'. $cat->banner }}" />
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Category Details</label>
                                <textarea class="form-control" name="details" id="editor1"
                                    placeholder="Enter Category details" autocomplete="false" required="required"
                                    rows="5">{{ $cat->details }}</textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="status" required="required">

                                    <option value="1" @if($cat->status == '1') selected @endif>Active</option>
                                    <option value="0" @if($cat->status == '0') selected @endif>Deactive</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                        </fieldset>
                        
                        <fieldset>
                        <legend>SEO</legend>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Keywords</label>
                                        <input type="text" class="form-control" name="seo_keywords" value="{{ $cat->seo_keywords }}"
                                            placeholder="Enter Keywords" autocomplete="false" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" name="seo_description"
                                                autocomplete="false"
                                           rows="5">{{ $cat->seo_description }}</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Other SEO tags</label>
                                        <textarea class="form-control" name="seo_tags"
                                                autocomplete="false"
                                           rows="5">{{ $cat->seo_tags }}</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
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
<script src="{{ asset(config('app.prefix').'admin/components/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
        CKEDITOR.replace('editor1')
    });
</script>
@endpush