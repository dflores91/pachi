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
            
          <td><form action="{{url('adduser', array('email' => $usuario['email'], 'proyecto' => $proyecto))}}" method="post">
            @csrf
            <button type="submit" class="btn btn-success">Agregar</button>
            </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
@endsection('content')