@extends('layouts.admin')



@section('content')

	<h1>Menü Bölümleri</h1>

	<div class="col-sm-6">
	
		{!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
	
		<div class="form-group">
	
			{!! Form::label('name', 'İsim:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
	
		<div class="form-group">
	
				{!! Form::submit('Yeni Bölüm Oluştur', ['class'=>'btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}	



	</div>


	<div class="col-sm-6">
		
				@if($categories)
		
	<table class="table">
	    <thead>
	      <tr>
	        <th>İd</th>
	        <th>Name</th>
	        <th>Oluşturuldu</th>
	        <th>Güncellendi</th>
	      </tr>
	    </thead>
	    <tbody>
	    
	    @foreach($categories as $category)

	      <tr>
	        <td>{{$category->id}}</td>
	        <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
	        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'Belli Değil'}}</td>
	        <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'Belli Değil'}}</td>
	      </tr>

	      	@endforeach
	   
	    </tbody>
	  </table>

	  @endif

	   <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
          
        {{$categories->render()}}



        </div>


	</div>


@stop