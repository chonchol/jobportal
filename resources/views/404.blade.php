@extends('layouts.theme')
@section('title', '404 | Not Found!')
@section('content')
@include('common.errors')
<body id="top">
	<div class="wrapper row2">
		<div id="container" class="clear">
			<div id="fof" class="clear">
				<img src="{{URL::asset('img/404.png') }}" alt="Template Demo Image"/>
				<h1>404 Error !</h1>
				<p>The Page You Requested Could Not Be Found On Our Server</p>
				<p>Go Back To The <a href="javascript:history.go(-1)">Previous Page</a> <strong>OR</strong> Visit Our <a href="#">Homepage</a></p>
			</div>
		</div>
	</div>
</body>

@endsection