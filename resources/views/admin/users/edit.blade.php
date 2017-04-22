@extends('layouts.admin')



@section('content')

	<h1>Kullanıcıyı Düzenle</h1>


	@include('includes.form_error')

		<div class="col-sm-9">

	
		{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id]]) !!}
	
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
				{!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
				
				</div>

					<div class="form-group">
						
					{!! Form::label('is_active', 'Kullancı Aktivitesi:') !!}
					{!! Form::select('is_active', array(1 => 'Aktif Kullanıcı', 0=> 'Pasif Kullanıcı'), null, ['class'=>'form-control']) !!}
					
					</div>

						<div class="form-group">
							
						{!! Form::label('password', 'Şifre:') !!}
						{!! Form::password('password', ['class'=>'form-control']) !!}
						
						</div>

					<div class="form-group">
	
				{!! Form::submit('Kullanıcıyı Düzenle', ['class'=>'btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}	

		</div>



@stop