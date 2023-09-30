@extends('admin.layout.admin')
@section('title','Edit Coupon')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h2 class="box-title"><b>Edit Coupon</b></h2>
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

                    <form method="POST"  action="{{ route('coupons.update',$coupon->id) }}" data-toggle="validator">
                        @csrf
                        @method('PUT')
                        <fieldset>
                            
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Coupon Type</label>
                                        <select class="form-control" name="type" required="required">
                                            <option value="summer-training" @if($coupon->type === 'summer-training') selected @endif>Summer Training</option>
                                            <option value="6month-trainig " @if($coupon->type === '6month-trainig') selected @endif>6 Month Training</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Code Generatee</label>
                                        <input type="text" class="form-control" name="code" value="{{ $coupon->code }}" required="required" readonly />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Coupon Value</label>
                                        <input type="text" class="form-control" name="value" value="{{ $coupon->value }}"
                                            placeholder="Enter Course value" autocomplete="false" required="required" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Commision Value</label>
                                        <input type="text" class="form-control" name="commision" value="{{ $coupon->commision }}"
                                            placeholder="Commision value" autocomplete="false" required="required" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            
                        
                            <hr>
                            
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Person Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $coupon->name }}"
                                            placeholder="Enter Course name" autocomplete="false" required="required" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Organization/Company</label>
                                        <input type="text" class="form-control" name="company" value="{{ $coupon->company }}"
                                            placeholder="Company name" autocomplete="false" required="required" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $coupon->phone }}"
                                            placeholder="Phone Number" autocomplete="false" required="required" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $coupon->email }}"
                                            placeholder="Emails address" autocomplete="false" required="required" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            
                            
                        </fieldset>
                        
                        <hr>
                           
                        <div class="row">
                            <div class="col-md-4 pull-right">
                                <button type="submit" class="btn btn-block btn-danger">Update</button>
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
   <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset(config('app.prefix').'admin/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <style>
    .wide {
        padding: 10px;
    }
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
@endpush
