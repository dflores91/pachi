@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Integrantes</title>
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
    <label for="Name">Buscar Usuario:</label>
    <input type="text" class="navbar-form pull-right">
    <button type="submit" class="btn btn-success">Buscar</button>
    <br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach($usuarios as $usuario)
          
          <tr>
            <td>{{$usuario['id']}}</td>
            <td>{{$usuario['name']}}</td>
            <td>{{$usuario['email']}}</td>
            
          <td><a href="#" class="btn btn-info">Agregar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
@endsection('content')