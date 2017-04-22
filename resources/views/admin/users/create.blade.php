@extends('layouts.admin')



@section('content')

	<h1>Kullanıcı Oluştur</h1>

	
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
						
					{!! Form::label('status', 'Kullancı Aktivitesi:') !!}
					{!! Form::select('status', array(1 => 'Aktif', 0=> 'Aktif Değil'), 0, ['class'=>'form-control']) !!}
					
					</div>

						<div class="form-group">
							
						{!! Form::label('password', 'Şifre:') !!}
						{!! Form::password('password', ['class'=>'form-control']) !!}
						
						</div>

					<div class="form-group">
	
				{!! Form::submit('Kullanıcı Oluştur', ['class'=>'btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}	


	@include('includes.form_error')

@stop