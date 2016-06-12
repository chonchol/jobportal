@extends('layouts.leftMenu')
@section('title', 'Amar Jobs | Add Institute')

@section('form')



                {!! Form::open(array('route' => 'saveInstitute', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

                <div class="form-group">
                    <label for="instituteName" class="col-sm-4 control-label">
                        {!! Form::label('instituteName', 'Institute Name') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::text('instituteName','', array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-4 control-label">
                        {!! Form::label('city', 'City') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::text('city','', array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="district" class="col-sm-4 control-label">
                        {!! Form::label('district', 'District') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::text('district','', array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="postcode" class="col-sm-4 control-label">
                        {!! Form::label('postcode', 'Post Code') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::number('postcode','', array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-4 control-label">
                        {!! Form::label('address', 'Address') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::text('address','', array('class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-4 control-label">
                        {!! Form::label('phone', 'Phone No') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::text('phone', '',array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">
                        {!! Form::label('email', 'Email Address') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::email('email', '',array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="website" class="col-sm-4 control-label">
                        {!! Form::label('website', 'Web Address') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::text('website', '',array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="logo" class="col-sm-4 control-label">
                        {!! Form::label('logo', 'Logo') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::file('logo', '',array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="instituteCode" class="col-sm-4 control-label">
                        {!! Form::label('instituteCode', 'Institute Code') !!}
                    </label>
                    <div class="col-sm-4">
                        {!! Form::number('instituteCode', '',array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        {!! Form::submit('Add Company!', array('class' => 'btn btn-success pull-right')) !!}
                    </div>
                </div>
                {!! Form::close() !!}

@endsection