@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Fecha de Alta</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($usuarios as $usuario)
      @php
        $date=date('d-m-Y', strtotime($usuario['created_at']));
        @endphp
      <tr>
        <td>{{$usuario['id']}}</td>
        <td>{{$usuario['name']}}</td>
        <td>{{$usuario['email']}}</td>
        <td>{{$date}}</td>
        
        <td><a href="{{action('UsuarioController@edit', $usuario['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('UsuarioController@destroy', $usuario['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Borrar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
@endsection