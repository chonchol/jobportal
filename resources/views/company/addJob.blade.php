@extends('layouts.leftMenu')
@section('title', 'Amar Jobs | Add Job')

@section('form')

{!! Form::open(array('route' => 'saveJob', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

<div class="form-group">
    <label for="jobTitle" class="col-sm-3 control-label">
        {!! Form::label('jobTitle', 'Job Title') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('jobTitle','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="jobSummary" class="col-sm-3 control-label">
        {!! Form::label('jobSummary', 'Job Summary') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::textarea('jobSummary','', array('class' => 'form-control','cols'=>'50','rows'=>'5')) !!}
    </div>
</div>
<div class="form-group">
    <label for="jobDescription" class="col-sm-3 control-label">
        {!! Form::label('jobDescription', 'Job Description') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::textarea('jobDescription','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="jobType" class="col-sm-3 control-label">
        {!! Form::label('jobType', 'Job Type') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::select('jobType',array('Select','Full Time', 'Part Time', 'Internship','Contructual','Freelancer'), array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="jobLocation" class="col-sm-3 control-label">
        {!! Form::label('jobLocation', 'Job Location') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('jobLocation','', array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="job_skills" class="col-sm-3 control-label">
        {!! Form::label('job_skills', 'Job Skills') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::select('job_skills',array('Select'), array('class' => 'form-control js-example-basic-multiple',  'multiple'=>'multiple')) !!}
    </div>
</div>


<select class="js-example-basic-multiple" multiple="multiple">

  <option value="Ab">hello world</option>
  <option value="Ab">hello world</option>
  <option value="Ab">hello world</option>
  <option value="Ab">hello world</option>
  <option value="Ab">hello world</option>
  <option value="Ab">hello world</option>

</select>

<div class="form-group">
    <label for="applicationEndDate" class="col-sm-3 control-label">
        {!! Form::label('applicationEndDate', 'Application End Date') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('applicationEndDate', '',array('class' => 'form-control input-append date','id'=>'datepicker')) !!}
    </div>
</div>
<div class="form-group">
    <label for="salary" class="col-sm-3 control-label">
        {!! Form::label('salary', 'Salary') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::number('salary', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="applicationInstruction" class="col-sm-3 control-label">
        {!! Form::label('applicationInstruction', 'Application Instruction') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::textarea('applicationInstruction', '',array('class' => 'form-control','cols'=>'50','rows'=>'5')) !!}
    </div>
</div>
<div class="form-group">
    <label for="featuredJob" class="col-sm-3 control-label">
        {!! Form::label('featuredJob', 'Featured Job') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('featuredJob', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="numberOfPosition" class="col-sm-3 control-label">
        {!! Form::label('numberOfPosition', 'Number of Position') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::number('numberOfPosition', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="minimumExperience" class="col-sm-3 control-label">
        {!! Form::label('minimumExperience', 'Min. Experience (yr)') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::number('minimumExperience', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="minimumAge" class="col-sm-3 control-label">
        {!! Form::label('minimumAge', 'Minmum Age') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::number('minimumAge', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="others" class="col-sm-3 control-label">
        {!! Form::label('others', 'Others') !!}
    </label>
    <div class="col-sm-8">
        {!! Form::text('others', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-8">
        {!! Form::submit('Add Job!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection