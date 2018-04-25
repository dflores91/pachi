@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Proyecto </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Dar permisos de usuario</h2><br  />
        <form method="post">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Leer:</label>
                <div class="checkbox">
                    <label><input type="checkbox" value="true">Lectura</label>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="email">Escribir:</label>
                <div class="checkbox">
                    <label><input type="checkbox" value="true">Escritura</label>
                </div>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Dar Permisos</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
@endsection