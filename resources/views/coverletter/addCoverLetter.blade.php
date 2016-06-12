@extends('layouts.leftMenu')
@section('title', 'Amar Jobs | Add Cover Letter')

@section('form')
@include('common.errors')
{!! Form::open(array('route' => 'saveCoverLetter', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}
{!! csrf_field() !!}
<div class="form-group">
    <label for="coverLetterTitle" class="col-sm-4 control-label">
        {!! Form::label('coverLetterTitle', 'Cover Letter Title') !!}

    </label>
    <div class="col-sm-4">
        {!! Form::text('coverLetterTitle','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="actualText" class="col-sm-4 control-label">
        {!! Form::label('actualText', 'Description') !!}
    </label>
    <div class="col-sm-5">
        {!! Form::textarea('actualText','', array('class' => 'form-control','rows'=>'5')) !!}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Add Cover Letter!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection