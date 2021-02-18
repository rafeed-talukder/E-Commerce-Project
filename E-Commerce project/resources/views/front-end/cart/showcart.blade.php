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
        <div class="cart-items">
            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                        <h4 class="text-center text-success" >My Shopping Cart</h4>
                        <table class="table-responsive table table-bordered" >
                            <tr class="bg-primary">
                                <th>SI No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>

                            @php($sum=0)
                            @php($i=1)
                        @foreach($cartCollection as $cartCollection)

                                <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$cartCollection->name }}</td>
                                <td> <img src="{{ asset($cartCollection->attributes->image) }}" height="100" width="100"> </td>
                                <td>{{$cartCollection->price}}</td>
                                <td>
                                    {{ Form::open([ 'route'=>'update-cart', 'method'=>'post' ]) }}
                                    <input type="number" name="quantity" min="1" value="{{$cartCollection->quantity}}">
                                    <input type="hidden" name="id" value="{{$cartCollection->id}}">
                                    <input type="submit" name="btn" value="Update">
                                    {{ Form::close() }}
                                </td>
                                <td>{{$total=$cartCollection->quantity*$cartCollection->price }}</td>
                                <td>
                                    <a href=" {{ route('deleteCartItem',[ 'id'=>$cartCollection->id ]) }} " class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash" ></span>
                                    </a>
                                </td>

                            </tr>
                                @php($sum=$sum+$total)
<!--                            --><?// php $sum=$sum+$total ?>

                            @endforeach
                        </table>

                        <hr>
                        <hr>
                        <table class="table table-bordered" >
                            <tr>
                                <th>Item Total(Tk. )</th>
                                <td>{{ $sum }}</td>
                            </tr>
                            <tr>
                                <th>Vat Total(Tk. )</th>
                                <td>{{ $vat=0 }}</td>
                            </tr>
                            <tr>
                                <th>Grand Total(Tk. )</th>
                                <td>{{ $orderTotal=$sum+$vat }}</td>
                                <?php
                                 Session::put('orderTotal',$orderTotal);
                                ?>
                            </tr>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-11">
                            <a href="{{ route('checkout') }}" class="btn btn-success pull-right">CheckOut</a>
                            <a href="" class="btn btn-success ">Continue Shopping</a>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div
@endsection



