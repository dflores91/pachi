@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proyectos</title>
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
        <th>Descripcion</th>
        <th>Fecha de Creacion</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      
    @foreach($proyecto as $project)
      @php
        $date=date('d-m-Y', strtotime($project['created_at']));
      @endphp
      <tr>
        <td>{{$project['id']}}</td>
        <td>{{$project['nombre']}}</td>
        <td>{{$project['descripcion']}}</td>
        <td>{{$date}}</td>
        
        <td><a href="{{action('ProyectoController@edit', $project['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{route('project-members',array('id'=>$project['id']))}}" class="btn btn-info">Usuarios</a></td>        
        <td>
          <form action="{{action('ProyectoController@destroy', $project['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
@endsection('content')