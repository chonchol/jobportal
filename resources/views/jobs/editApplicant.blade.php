@extends('layouts.master')
@section('title', 'Amar Jobs | Add Profile')

@section('content')

    {!! Form::model('$coverLetter',array('route' => 'updateCoverLetter', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

    <div class="form-group">
        <input type='hidden' name='_method' value='put'>
        <input type='hidden' name='id' value='{!! $$coverLetter->id !!}'>
        <label for="coverLetterTitle" class="col-sm-2 control-label">
            {!! Form::label('coverLetterTitle', 'Cover Letter Title') !!}

        </label>
        <div class="col-sm-3">
            {!! Form::text('coverLetterTitle',$coverLetter->coverLetterTitle, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="actualText" class="col-sm-2 control-label">
            {!! Form::label('actualText', 'Description') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::textarea('actualText',$coverLetter->actualText, array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-3">
            {!! Form::submit('Update Cover Letter!', array('class' => 'btn btn-success pull-right')) !!}
        </div>
    </div>
    {!! Form::close() !!}

@endsection