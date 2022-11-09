@extends('adminlte::page')

@section('title', 'Accesos')

@section('content_header')
   <h1>Crear Acceso</h1>
@stop

@section('content')
    
<form action="/accesos" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Evento</label>
    <input id="evento" name="evento" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="description" name="description" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Notas</label>
    <input id="notes" name="notes" type="text" class="form-control" tabindex="3">
  </div>
   <a href="/accesos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop