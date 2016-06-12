@extends('layouts.leftMenu')
@section('title', 'Amar Jobs | Add Applicant')

@section('content')
@include('common.errors')
{!! Form::open(array('route' => 'saveApplicant', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}
{!! csrf_field() !!}
<div class="form-group">
    <label for="attachedResume" class="col-sm-4 control-label">
        {!! Form::label('attachedResume', 'Add Your Resume') !!}

    </label>
    <div class="col-sm-4">
        {!! Form::text('attachedResume','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="actualText" class="col-sm-4 control-label">
        {!! Form::label('status', 'Status') !!}
    </label>
    <div class="col-sm-5">
        {!! Form::select('status','', array('Select Gender','Male', 'Female','Others'), array('class' => 'form-control','rows'=>'5')) !!}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Add Applicant!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection