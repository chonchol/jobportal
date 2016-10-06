@extends('layouts.master')
@section('title', 'Amar Jobs | All Job Category')

@section('content')
@include('common.errors')

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success badge" data-toggle="modal" data-target="#myModal">Add Category</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        {!! Form::open(array('route' => 'saveCategory', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

        <div class="form-group">
            <label for="sortInd" class="col-sm-2 control-label">
                {!! Form::label('sortInd', 'Sort Index') !!}
            </label>
            <div class="col-sm-2">
                {!! Form::number('sortInd','', array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            <label for="categoryName" class="col-sm-2 control-label">
                {!! Form::label('categoryName', 'Category Name') !!}
            </label>
            <div class="col-sm-3">
                {!! Form::text('categoryName', '',array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {!! Form::submit('Add Category!', array('class' => 'btn btn-success pull-right')) !!}
            </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection