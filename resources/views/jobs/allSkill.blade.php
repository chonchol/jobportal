@extends('layouts.master')
@section('title', 'Amar Jobs | All Job Skill')

@section('content')
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success badge" data-toggle="modal" data-target="#myModal">Add Skill</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Job Skill</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(array('route' => 'saveSkill', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

        <div class="form-group">
            <label for="sortInd" class="col-sm-4 control-label">
                {!! Form::label('sortInd', 'Sort Index') !!}
            </label>
            <div class="col-sm-6">
                {!! Form::number('sortInd','', array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            <label for="skillName" class="col-sm-4 control-label">
                {!! Form::label('skillName', 'Skill Name') !!}
            </label>
            <div class="col-sm-6">
                {!! Form::text('skillName', '',array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                {!! Form::submit('Add Skill!', array('class' => 'btn btn-success pull-right')) !!}
            </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>


@if(count($skills))
<table id="example2" class="table table-bordered table-hover" style="width:65%!important">
    
    <thead>
        <tr>
            <th># Index</th>
            <th>Skill Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($skills as $skill)

        <tr>
            <td>{{$skill->sortInd}}</td>
            <td>{{$skill->skillName}}</td>
            <td><a class="btn btn-info badge bg-light-blue" href="{{route('editSkill',$skill->id)}}">Edit</a> | <a class="btn btn-danger badge bg-red" href="{{route('deleteSkill',$skill->id)}}">Delete</a></td>
        </tr>

    @endforeach
    </tbody>
</table>

{{$skills->links()}}

@endif

@endsection