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
                    <div class="col-md-12 well">
                        <h3>you have to login to complete your order</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 well">
                        <h3>Please register your account</h3>
                        <br>
                        {{ Form::open(['route'=>'customer-sign-up' , 'method'=>'POST'  ]) }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="number" placeholder="Enter number">
                        </div>
                        <div class="form-group">
{{--                            <textarea  class="form-control" name="address" placeholder="Enter Address">--}}
                                <input type="text" class="form-control" name="address" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success" name="btn" value="Register">
                        </div>
                        {{ Form::close() }}
                    </div>

                    <div class="col-md-5 well" style="margin-left: 20px" >
                        <h3 class="text-center" >Already Registerd,please Login Here</h3>
                        <br>
                        <h3 class="text-center"> {{ Session::get('message') }} </h3>
                        <br>
                        {{ Form::open(['route'=>'customerLogIn','method'=>'POST']) }}
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-info" name="btn" value="Login">
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>

            </div>
        </div>
    </div
@endsection



