@extends('layouts.admin')


@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css"></link>

@stop



@section('content')

		
		<h1>Medya Yükle</h1>

			{!! Form::open(['method'=>'POST', 'action'=>'AdminMediaController@store', 'class'=>'dropzone']) !!}
		
			

			{!! Form::close() !!}	

@stop




@section('scripts')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>


@stop 