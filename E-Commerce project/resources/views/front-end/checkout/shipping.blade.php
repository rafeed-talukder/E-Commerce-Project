@extends('front-end.master')
@section('body')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Add To Cart</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 well text-success text-center">
                        DEAR {{ Session::get('customerName') }} Please Continue Your shopping.If shipping Address and billing address are same then press shopping Button.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 ">
                        <h3  >Please register your account</h3>
                        <br>
                        {{ Form::open(['route'=>'new-shipping', 'method'=>'POST' ]) }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="fullname" value="{{ $customerId->firstname." ".$customerId->lastname }}" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{ $customerId->email }}" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="number" value="{{$customerId->number}}" placeholder="Enter number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" value="{{ $customerId->address }}" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success" name="btn" value="Shipping">
                        </div>
                        {{ Form::close() }}
                    </div>

                </div>

            </div>
        </div>
    </div
@endsection



