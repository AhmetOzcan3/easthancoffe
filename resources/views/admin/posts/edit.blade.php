@extends('layouts.admin')


@section('content')

<div class="row">
		
	@include('includes.form_error')

	</div>

 <h1>İçeriği Düzenle</h1>


 <div class="row">

 <div class="col-sm-3">

 <img src="{{$post->photo->file}}" alt="" class="responsive"></img>

 </div>

 <div class="col-sm-9">

 
 	{!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
 
 	<div class="form-group">
 
 		{!! Form::label('title', 'İsim:') !!}
 		{!! Form::text('title', null, ['class'=>'form-control']) !!}
 	</div>


 		<div class="form-group">
 			
 		{!! Form::label('category_id', 'Tür:') !!}
 		{!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
 		
 		</div>

 			<div class="form-group">
 				
 			{!! Form::label('photo_id', 'Fotoğraf:') !!}
 			{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
 			
 			</div>

 				<div class="form-group">
 					
 				{!! Form::label('body', 'İçindekiler:') !!}
 				{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
 				
 				</div>
 
 	<div class="form-group">
 
 			{!! Form::submit('İçeriği Düzenle', ['class'=>'btn btn-primary col-sm-6']) !!}
 	</div>
 	{!! Form::close() !!}	


 			
 				{!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
 			
 				
 			
 				<div class="form-group">
 			
 						{!! Form::submit('İçeriği Sil', ['class'=>'btn btn-danger col-sm-6']) !!}
 				</div>
 				{!! Form::close() !!}	

 				</div>



	</div>




 	


@stop