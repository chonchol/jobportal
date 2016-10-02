@extends('layouts.leftMenu')
@section('title', 'Amar Jobs | Add Employer')

@section('form')
@include('common.errors')
{!! Form::open(array('route' => 'saveEmployer', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}
{!! csrf_field() !!}
<div class="form-group">
    <label for="companySumamry" class="col-sm-4 control-label">
        {!! Form::label('companySumamry', 'Company Summary') !!}

    </label>
    <div class="col-sm-6">
        {!! Form::textarea('companySumamry','', array('class' => 'form-control','rows' => '5')) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Add Employer!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection