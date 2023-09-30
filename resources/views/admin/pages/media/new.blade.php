@extends('admin.layout.admin')
@section('title','Add Media')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                
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
                
                    <form method="POST" enctype="multipart/form-data" action="{{ route('media.store') }}"
                        data-toggle="validator">
                        @csrf
                        <fieldset>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Width</label>
                                        <input type="text" class="form-control" name="width" value="450"
                                            placeholder="Width" autocomplete="false" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Height</label>
                                        <input type="text" class="form-control" name="height" value="300"
                                            placeholder="Height" autocomplete="false" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                    
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Media</label>
                                        <input type="file" class="form-control" name="image" value="{{ old('image') }}"
                                            placeholder="Upload File" autocomplete="false" required="required">
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

                    <hr>

                    @if(session('status'))
                        <div class="alert alert-success" id="msg-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p style="font-size: 18px"><strong>{{ session('status') }}</strong></p>
                        </div>
                    @endif

                    @if(session('success'))
                        <img src="{{ asset(config('app.prefix').'uploads/media/'.session('success')) }}" class="img-responsive" />
                        <h3>Image Path: {{ config('app.prefix').'uploads/media/'.session('success') }}</h3>
                    @endif

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush