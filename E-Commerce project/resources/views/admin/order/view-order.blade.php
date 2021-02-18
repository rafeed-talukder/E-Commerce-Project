@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-success text-center" > Customer For This Order </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered" >
                        <tr>
                            <th>Customer Name</th>
                            <td>{{ $customer->firstname.' '.$customer->lastname }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $customer->number }}</td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $customer->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h3 class="text-success text-center" > Shipping info For This Order </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered" >
                        <tr>
                            <th>Full Name</th>
                            <td>{{ $shipping->fullname }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $shipping->number }}</td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>{{ $shipping->email }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{  $shipping->address  }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h3 class="text-success text-center" > Payment info For This Order </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered" >
                        <tr>
                            <th>Payment Type</th>
                            <td>{{ $payment->payment_type }}</td>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <td>{{ $payment->payment_status }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h3 class="text-center text-success" > Product Info For this Order </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>
                                SI No
                            </th>
                            <th>
                                Product Id
                            </th>
                            <th>
                                Product Name
                            </th>
                            <th>
                                Product Price
                            </th>
                            <th>
                                Product Quantity
                            </th>
                            <th>
                                Total Price
                            </th>
                        </tr>

                        @php($i=1)
                        @foreach($orderdetails as $orderdetails )
                        <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $orderdetails->product_id }}</td>
                                <td>{{ $orderdetails->product_name }}</td>
                                <td>{{ $orderdetails->product_price }}</td>
                                <td>{{ $orderdetails->product_quantity }}</td>
                                <td>{{ $orderdetails->product_quantity * $orderdetails->product_price  }}</td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection



