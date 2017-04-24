@extends('layouts.admin')


@section('content')

 <h1>Tüm İçerik</h1>

 <table class="table">
     <thead>
       <tr>
         <th>ID</th>
         <th>Fotoğraf</th>
         <th>Yazar</th>
         <th>Tür</th>
         <th>İsim</th>
         <th>Malzemeler</th>
         <th>Oluşturuldu</th>
         <th>Güncellendi</th>
       </tr>
     </thead>
     <tbody>

     @if($posts)

     @foreach($posts as $post)
       <tr>
         <td>{{$post->id}}</td>
         <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
         <td>{{$post->user->name}}</td>
         <td>{{$post->category ? $post->category->name : 'Diğer'}}</td>
         <td>{{$post->title}}</td>
         <td>{{$post->body}}</td>
         <td>{{$post->created_at->diffForHumans()}}</td>
         <td>{{$post->updated_at->diffForHumans()}}</td>
       </tr>

       @endforeach

       @endif
     
     </tbody>
   </table>

@stop