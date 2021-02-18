@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h3 class="text-success text-center" > {{ Session::get('message')}} </h3>
                <div class="panel-heading" >
                    <h4 class="text-center text-success" >Add Brand </h4>
                </div>
                <div class="panel-body">
                    {{ Form::open ( [ 'route'=>'new-brand', 'method'=>'POST','class'=>'form-horizontal' ] )  }}

{{--                    laravel collective from practice --}}
{{--                    <div class="form-group" >--}}
{{--                        {{ Form::label('brand_name', 'Brand Name', ['class' => 'col-sm-3 text-info']) }}--}}
{{--                        <div class="col-sm-9" >--}}
{{--                            {{ Form::text('brand_name','', ['class' =>'form-control'] )}}--}}
{{--                        </div>--}}
{{--                    </div>--}
{{--                    laravel collective from practice --}}


                        <div class="form-group">
                            <label class="control-label col-md-3">Brand Name</label>
                            <div class="col-md-9">
                                <input type="text" name="brand_name" class="form-control"/>
                                <span> {{ $errors->has('brand_name') ? $errors->first('brand_name') : '' }} </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Brand Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="brand_description"></textarea>
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
                                <input type="submit" name="btn" value="Save Brand Info" class="btn btn-success btn-block"/>
                            </div>
                        </div>

                    {{ Form::close ()  }}
                </div>
            </div>
        </div>
    </div>
@endsection



