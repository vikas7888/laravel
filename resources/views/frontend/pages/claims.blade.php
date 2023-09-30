@extends('frontend.layout.main')
@section('title','View Coupon Claims')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                      <div class="main-banner-three-content">
                            <form method="post" action="/claims" style="margin-top: 65px">
                                @csrf
                                <input type="text" class="form-control" name="phone" placeholder="Enter your Phone Number..." value="{{ old('phone') }}" required style="border: 2px dotted #000">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Course Details Area -->
<section class="course-details-area ptb-100">
    <div class="container">
    
        @isset($results)
            @if(count($results) > 0)
            <div class="row mb-2">
                <div class="col-md-6">
                    <h3 class="mt-3">Coupon Claim Results</h3>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                        <h4>Total Earning: Rs {{ $earning ?? 0 }}.00</h4>
                        </div>
                    </div>
                </div>
            
            </div>
            @endif
        @endisset
    
        <div class="row">
            
            <div class="col-md-12">
            @isset($results)
              @if(count($results) > 0)
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Coupon</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Course</th>
                        <th scope="col">Course Payment</th>
                        <th scope="col">Commision</th>
                        <th scope="col">Commision Paid</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($results as $key => $result)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td><span class="badge badge-pill badge-info">{{ $result->code }}</span></td>
                        <td>{{ $result->name }}</td>
                        <td>{{ $result->phone }}</td>
                        <td>{{ $result->program->name }}</td>
                        <td>
                            @if($result->status == 1)
                                <span class="badge badge-pill badge-success">Paid</span>
                            @else
                                <span class="badge badge-pill badge-danger">Not Paid</span>
                            @endif
                        </td>
                        <td>Rs {{ $result->coupon->commision }}/-</td>
                        <td>
                            @if($result->com_paid == 1)
                                <span class="badge badge-pill badge-success">Paid</span>
                            @else
                                <span class="badge badge-pill badge-danger">Pending</span>
                            @endif
                        </td>
                    </tr>
                @endforeach   
                </tbody>
                </table>
            @else
                <h3>No Claims Found</h3>
            @endif
            @endisset
            </div>
        </div>
    </div>
    
</section>
<!-- End Course Details Area -->
@endsection
