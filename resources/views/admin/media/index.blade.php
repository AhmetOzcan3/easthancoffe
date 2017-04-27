@extends('layouts.admin')


@section('content')

		
		<h1>Medya</h1>

		@if($photos)

		<table class="table">
		    <thead>
		      <tr>

		      	<th>Id</th>
		        <th>İsim</th>
		        <th>Oluşturuldu</th>
		   
		      </tr>
		    </thead>
		    <tbody>

		    @foreach($photos as $photo)

		      <tr>
		        <td>{{$photo->id}}</td>
		        <td><img height="50" src="{{$photo->file}}"></td>
		        <td>{{$photo->created_at ? $photo->created_at : 'Belli Değil'}}</td>
		      	<td>
		      		

		      	
		      		{!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $photo->id]]) !!}
		      	
		      
		      		<div class="form-group">
		      	
		      				{!! Form::submit('Medyayı Sil', ['class'=>'btn btn-danger']) !!}
		      		</div>
		      		{!! Form::close() !!}	



		      	</td>
		      </tr>



		      @endforeach

		    </tbody>
		  </table>

		  @endif

		   <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
          
        {{$photos->render()}}



        </div>

@stop