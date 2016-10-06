@extends('layouts.master')
@section('title', 'Amar Jobs | All Job Category')

@section('content')
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success badge" data-toggle="modal" data-target="#myModal">Add Category</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Job Category</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(array('route' => 'saveCategory', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

        <div class="form-group">
            <label for="sortInd" class="col-sm-4 control-label">
                {!! Form::label('sortInd', 'Sort Index') !!}
            </label>
            <div class="col-sm-6">
                {!! Form::number('sortInd','', array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            <label for="categoryName" class="col-sm-4 control-label">
                {!! Form::label('categoryName', 'Category Name') !!}
            </label>
            <div class="col-sm-6">
                {!! Form::text('categoryName', '',array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                {!! Form::submit('Add Category!', array('class' => 'btn btn-success pull-right')) !!}
            </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@if(count($categories))
<table id="example2" class="table table-bordered table-hover" width="65%">
    
    <thead>
        <tr>
            <th># Index</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)

        <tr>
            <td>{{$category->sortInd}}</td>
            <td>{{$category->categoryName}}</td>
            <td><a class="btn btn-info badge bg-light-blue" href="{{route('editCategory',$category->id)}}">Edit</a> | <a class="btn btn-danger badge bg-red" href="{{route('deleteCategory',$category->id)}}">Delete</a></td>
        </tr>

    @endforeach
    </tbody>
</table>

{{$categories->links()}}

@endif

@endsection