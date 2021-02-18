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
                        DEAR {{ Session::get('customerName') }} Please Continue Your Payment Process.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 ">

                        {{ Form::open(['route'=>'order', 'method'=>'POST' ]) }}

                        <table class="table-bordered table"  >
                            <tr>
                                <th>Cash On Delivery</th>
                                <td><input type="radio" name="payment_type" value="cash"> Cash On Delivery</td>
                            </tr>
                            <tr>
                                <th>Paypal</th>
                                <td><input type="radio" name="payment_type" value="paypal"> Paypal</td>
                            </tr>
                            <tr>
                                <th>Cash On Delivery</th>
                                <td><input type="radio" name="payment_type" value="bkash"> bkash</td>
                            </tr>
                            <tr>
                                <th></th>

                                <td><input type="submit" name="btn" value="Confirm Order"></td>
                            </tr>
                        </table>

                        {{ Form::close() }}

                    </div>

                </div>

            </div>
        </div>
    </div
@endsection



