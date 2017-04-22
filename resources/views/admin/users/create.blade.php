@extends('layouts.admin')



@section('content')

	<h1>Kullanıcı Oluştur</h1>

		@include('includes.form_error')

	
		{!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}
	
		<div class="form-group">
	
			{!! Form::label('name', 'Kullanıcı İsmi:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
	
	

			<div class="form-group">
				
			{!! Form::label('email', 'Kullanıcı E-Mail Adresi:') !!}
			{!! Form::email('email', null, ['class'=>'form-control']) !!}
			
			</div>

				<div class="form-group">
					
				{!! Form::label('role_id', 'Kullanıcı Rolü:') !!}
				{!! Form::select('role_id', [''=>'Seçenekler'] + $roles, null, ['class'=>'form-control']) !!}
				
				</div>

					<div class="form-group">
						
					{!! Form::label('is_active', 'Kullancı Aktivitesi:') !!}
					{!! Form::select('is_active', array(1 => 'Aktif Kullanıcı', 0=> 'Pasif Kullanıcı'), 0, ['class'=>'form-control']) !!}
					
					</div>

						<div class="form-group">
							
					{!! Form::label('password', 'Şifre:') !!}
					{!! Form::password('password', ['class'=>'form-control']) !!}
						
						</div>

					<div class="form-group">
	
				{!! Form::submit('Kullanıcı Oluştur', ['class'=>'btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}	


	

@stop