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
                               Category Name
                           </th>
                           <th>
                               Category Description
                           </th>
                           <th>
                               Publication Status
                           </th>
                           <th>
                               Action
                           </th>
                       </tr>
                        @php($i=1)
                       @foreach($categoriesindexvalue as $categoryassignvaluefortable)
                       <tr>
                           <td>{{ $i++ }}</td>
                           <td>{{ $categoryassignvaluefortable->category_name }}</td>
                           <td>{{ $categoryassignvaluefortable->category_description }}</td>
                           <td>{{ $categoryassignvaluefortable->publication_status ==1 ? 'Published':' Unpublished' }}</td>
                           <td>
                               @if($categoryassignvaluefortable->publication_status ==1)
                                   <a href=" {{ route('unpublishedCategory', ['id'=>$categoryassignvaluefortable->id] ) }} " class="btn btn-info btn-xs">
                                       <span class="glyphicon glyphicon-arrow-up" ></span>
                                   </a>
                               @else
                                   <a href="{{ route('publishedCategory', ['id'=>$categoryassignvaluefortable->id] ) }}" class="btn btn-warning btn-xs">
                                       <span class="glyphicon glyphicon-arrow-down" ></span>
                                   </a>
                               @endif

                               <a href="{{ route('editCategory', ['id'=>$categoryassignvaluefortable->id] ) }}" class="btn btn-success btn-xs">
                                   <span class="glyphicon glyphicon-edit" ></span>
                               </a>

                               <a href="{{ route('deletCategory', ['id'=>$categoryassignvaluefortable->id] ) }}" class="btn btn-danger btn-xs">
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



