@extends('layouts.leftMenu')
@section('title', 'Amar Jobs | Add Profile')

@section('form')
@include('common.errors')

{!! Form::open(array('route' => 'saveProfile', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}
{!! csrf_field() !!}
<div class="form-group">
    <label for="firstName" class="col-sm-3 control-label">
        {!! Form::label('firstName', 'First Name') !!}

    </label>
    <div class="col-sm-8">
        {!! Form::text('firstName','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="lastName" class="col-sm-3 control-label">
        {!! Form::label('lastName', 'Last Name') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('lastName','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="middleName" class="col-sm-3 control-label">
        {!! Form::label('middleName', 'Middle Name') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('middleName','', array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="DOB" class="col-sm-3 control-label">
        {!! Form::label('DOB', 'Date Of Birth') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('DOB', '', array('class' => 'form-control input-append date','id'=>'datepicker')) !!}
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Gender</label>
    <div class="col-sm-9 m-t5">
        <input value="M" name="gender" class="styleInput" id="male" checked="" type="radio"><label for="male" class="m-r15">Male <span></span> </label>
        <input value="F" name="gender" class="styleInput" id="female" type="radio"><label for="female" class="m-r15">Female <span></span></label>
        <input value="Other" name="gender" class="styleInput" id="other" type="radio"><label for="other">Others <span></span></label>
    </div>
</div>


<!--

<div class="form-group">
    <label for="featuredProfile" class="col-sm-3 control-label">
        {!! Form::label('featuredProfile', 'Featured Profile') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::select('featuredProfile', array('Select','Yes', 'No'),array('class' => 'form-control')) !!}
    </div>
</div>

-->
<div class="form-group">
    <label for="email" class="col-sm-3 control-label">
        {!! Form::label('email', 'Email Address') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('email', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="phone" class="col-sm-3 control-label">
        {!! Form::label('phone', 'Phone Number') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('phone', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="summary" class="col-sm-3 control-label">
        {!! Form::label('summary', 'Summary') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::textarea('summary', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="profilePic" class="col-sm-3 control-label">
        {!! Form::label('profilePic', 'Profile Picture') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::file('profilePic', '',array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-8">
        {!! Form::submit('Add Profile!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection