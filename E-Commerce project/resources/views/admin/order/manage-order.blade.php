@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h3 class="text-success text-center" > {{ Session::get('message')}} </h3>
                <div class="panel-heading" >
                    <h4 class="text-center text-success" >Add Category  </h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>
                                SI No
                            </th>
                            <th>
                                Customer Name
                            </th>

                            <th>
                                Order Total
                            </th>

                            <th>
                                Order Date
                            </th>

                            <th>
                                Order Status
                            </th>

                            <th>
                                Payment Type
                            </th>

                            <th>
                                Payment Status
                            </th>

                            <th>
                                Action
                            </th>
                        </tr>

                        @php($i=1)
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->firstname.' '.$order->lastname }}</td>
                                <td>{{ $order->order_total }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->order_status }}</td>
                                <td>{{ $order->payment_type }}</td>
                                <td>{{ $order->payment_status }}</td>
{{--                                <td>{{ $categoryassignvaluefortable->category_name }}</td>--}}
{{--                                <td>{{ $categoryassignvaluefortable->category_description }}</td>--}}
{{--                                <td>{{ $categoryassignvaluefortable->publication_status ==1 ? 'Published':' Unpublished' }}</td>--}}
                                <td>
{{--                                    @if($categoryassignvaluefortable->publication_status ==1)--}}
                                        <a href=" {{ route('viewOrder', ['id'=>$order->id] ) }} " class="btn btn-info btn-xs" title="View Order details" >
                                            <span class="glyphicon glyphicon-zoom-in" ></span>
                                        </a>
{{--                                    @else--}}
                                        <a href=" {{ route('viewOrderInvoice', ['id'=>$order->id] ) }} " class="btn btn-warning btn-xs" title="View Order Invoice" >
                                            <span class="glyphicon glyphicon-zoom-out" ></span>
                                        </a>
{{--                                    @endif--}}

                                    <a href=" {{ route('downloadOrderInvoice', ['id'=>$order->id] ) }} " class="btn btn-success btn-xs" title="Download Order Invoice">
                                        <span class="glyphicon glyphicon-download" ></span>
                                    </a>

                                    <a href=" {{ route('unpublishedCategory', ['id'=>$order->id] ) }} " class="btn btn-primary btn-xs" title="Edit Order Invoice">
                                        <span class="glyphicon glyphicon-edit" ></span>
                                    </a>

                                    <a href=" {{ route('unpublishedCategory', ['id'=>$order->id] ) }} " class="btn btn-danger btn-xs" title="Delete Order Invoice">
                                        <span class="glyphicon glyphicon-trash" ></span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection



