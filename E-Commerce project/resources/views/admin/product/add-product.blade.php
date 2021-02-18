@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h3 class="text-success text-center" > {{ Session::get('message')}} </h3>
                <div class="panel-heading" >
                    <h4 class="text-center text-success" >Add Product</h4>
                </div>
                <div class="panel-body">
                    {{ Form::open ( ['route'=>'saveProduct', 'method'=>'POST','class'=>'form-horizontal' ,'enctype'=>'multipart/form-data' ] )  }}

                    {{--                    laravel collective from practice --}}
                    {{--                    <div class="form-group" >--}}
                    {{--                        {{ Form::label('brand_name', 'Brand Name', ['class' => 'col-sm-3 text-info']) }}--}}
                    {{--                        <div class="col-sm-9" >--}}
                    {{--                            {{ Form::text('brand_name','', ['class' =>'form-control'] )}}--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}
                    {{--                    laravel collective from practice --}}


                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control text-center" name="category_id" >
                                <option class="" value=""> --------Category Name-------- </option>
                                @foreach($category_array_index as $category )
                                <option value="{{ $category -> id }}"> {{ $category -> category_name }} </option>
                                @endforeach
                            </select>
                            <span> {{ $errors->has('category_id') ? $errors->first('category_id') : '' }} </span>
                        </div>
                    </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="brand_id" >
                                    <option value=""> --------Brand Name--------</option>
                                    @foreach($brand_array_index as $brand )
                                        <option value="{{ $brand -> id }}"> {{ $brand -> brand_name }} </option>
                                    @endforeach
                                </select>
                                <span> {{ $errors->has('brand_id') ? $errors->first('brand_id') : '' }} </span>
                            </div>
                        </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="product_name">
                            <span> {{ $errors->has('brand_description') ? $errors->first('brand_description') : '' }} </span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="product_price">
                            <span> {{ $errors->has('brand_description') ? $errors->first('brand_description') : '' }} </span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Product Quantity</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="product_quantity">
                            <span> {{ $errors->has('brand_description') ? $errors->first('brand_description') : '' }} </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Short Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="short_description"></textarea>
                            <span> {{ $errors->has('brand_description') ? $errors->first('brand_description') : '' }} </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" name="long_description"></textarea>
                            <span> {{ $errors->has('brand_description') ? $errors->first('brand_description') : '' }} </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Product Image</label>
                        <div class="col-md-9">
                            <input type="file" class="" name="product_image" accept="image/*">
                            <span> {{ $errors->has('brand_description') ? $errors->first('brand_description') : '' }} </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 ">
                            <label><input type="radio"  name="publication_status" value="1"/> Published</label>
                            <label><input type="radio"  name="publication_status" value="0"/> Unpublished</label>
                            <span> {{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }} </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" value="Save Product Info" class="btn btn-success btn-block"/>
                        </div>
                    </div>

                    {{ Form::close ()  }}
                </div>
            </div>
        </div>
    </div>
@endsection



