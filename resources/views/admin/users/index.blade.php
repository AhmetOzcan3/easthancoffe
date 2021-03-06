@extends('layouts.admin')



@section('content')

<h1>Kullanıcılar</h1>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Rol</th>
        <th>Statü</th>
        <th>Oluşturuldu</th>
        <th>Güncellendi</th>
      </tr>
    </thead>
    <tbody>
      
    @if($users)

    	@foreach($users as $user)

      <tr>
        <td>{{$user->id}}</td>
        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Aktif' :'Aktif Değil'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>

      	@endforeach
   
      @endif

    </tbody>
  </table>

@stop