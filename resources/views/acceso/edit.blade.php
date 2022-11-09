@extends('adminlte::page')

@section('title', 'Accesos')

@section('content_header')
    <h1>Editar Acceso</h1>
@stop

@section('content')
   <form action="/accesos/{{$acceso->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input id="id" name="id" type="text" class="form-control" value="{{$acceso->id}}" disabled>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Evento</label>
    <input id="evento" name="evento" type="text" class="form-control" value="{{$acceso->evento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="description" name="description" type="text" class="form-control" value="{{$acceso->description}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Notas</label>
    <input id="notes" name="notes" type="text" class="form-control" value="{{$acceso->notes}}">
  </div>
    <a href="/accesos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')s
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop