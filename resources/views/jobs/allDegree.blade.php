@extends('layouts.master')
@section('title', 'Amar Jobs | All Degree')

@section('content')
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success badge" data-toggle="modal" data-target="#myModal">Add Degree</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Degree</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(array('route' => 'saveDegree', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

        <div class="form-group">
            <label for="sortInd" class="col-sm-4 control-label">
                {!! Form::label('sortInd', 'Sort Index') !!}
            </label>
            <div class="col-sm-6">
                {!! Form::number('sortInd','', array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            <label for="degreeName" class="col-sm-4 control-label">
                {!! Form::label('degreeName', 'Degree Name') !!}
            </label>
            <div class="col-sm-6">
                {!! Form::text('degreeName', '',array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                {!! Form::submit('Add Degree!', array('class' => 'btn btn-success pull-right')) !!}
            </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>


@if(count($degrees))
<table id="example2" class="table table-bordered table-hover" style="width:65%!important">
    
    <thead>
        <tr>
            <th># Index</th>
            <th>Degree Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($degrees as $degree)

        <tr>
            <td>{{$degree->sortInd}}</td>
            <td>{{$degree->degreeName}}</td>
            <td><a class="btn btn-info badge bg-light-blue" href="{{route('editDegree',$degree->id)}}">Edit</a> | <a class="btn btn-danger badge bg-red" href="{{route('deleteDegree',$degree->id)}}">Delete</a></td>
        </tr>

    @endforeach
    </tbody>
</table>

{{$degrees->links()}}

@endif

@endsection