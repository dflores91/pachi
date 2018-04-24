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
        <th>Fecha de Creacion</th>
        <th colspan="1">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>       
      </tr>
    </tbody>
  </table>
  </div>
  </body>
</html>
@endsection('content')