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
                    <div class="table-responsive" >
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>
                                    SI No
                                </th>
                                <th>
                                    Category Name
                                </th>
                                <th>
                                    Brand Name
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
                                    Product Image
                                </th>
                                <th>
                                    Publication status
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            @php($i=1)
                            @foreach($productAllValueFromDatabasetoTable as $productAllValueFortable)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$productAllValueFortable->category_name }}</td>
                                <td>{{$productAllValueFortable->brand_name }}</td>
                                <td>{{$productAllValueFortable->product_name }}</td>
                                <td>{{$productAllValueFortable->product_price }}</td>
                                <td>{{$productAllValueFortable->product_quantity }}</td>
{{--                                <td>{{$productAllValueFortable->short_description }}</td>--}}
{{--                                <td>{{$productAllValueFortable->long_description }}</td>--}}
                                <td>
                                    <img src="{{ asset($productAllValueFortable->product_image) }}" height="50px" width="50px">
                                </td>
                                <td>{{$productAllValueFortable->publication_status }}</td>
                                <td>
                                    <a href=" {{ route('/' ) }} " class="btn btn-info btn-xs" title="View Details" >
                                        <span class="glyphicon glyphicon-zoom-in " ></span>
                                    </a>

                                    <a href="{{ route('/') }}" class="btn btn-warning btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up" ></span>
                                    </a>

                                    <a href="{{ route('edit-product',['id'=>$productAllValueFortable->id]) }}" class="btn btn-success btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-edit" ></span>
                                    </a>

                                    <a href="{{ route('/') }}" class="btn btn-danger btn-xs" title="Delete" >
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
    </div>
@endsection



