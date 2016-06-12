@extends('layouts.master')
@section('title', 'Amar Jobs | Add Action')

@section('content')
@include('common.errors')
{!! Form::open(array('route' => 'saveAction', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}
{!! csrf_field() !!}
<div class="form-group">
    <label for="uri" class="col-sm-2 control-label">
        {!! Form::label('uri', 'URI') !!}

    </label>
    <div class="col-sm-3">
        {!! Form::text('uri','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="action" class="col-sm-2 control-label">
        {!! Form::label('action', 'Action') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('action','', array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Add Action!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection