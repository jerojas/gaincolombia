@extends('adminlte::page')

@section('title', 'Asistentes')

@section('content_header')
   <h1>Crear Asistente</h1>
@stop

@section('content')
    
<form action="/asistentes" method="POST">
  @csrf
  <div class="mb-3 col-6">
    <label for="" class="form-label">ID</label>
    <input id="asistente_id" name="asistente_id" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Nombres</label>
    <input id="first_name" name="first_name" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Apellidos</label>
    <input id="last_name" name="last_name" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Documento</label>
    <input id="document" name="document" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Profesión</label>
    <input id="profesion" name="profesion" type="text" class="form-control" tabindex="5">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="email" class="form-control" tabindex="6">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Teléfono</label>
    <input id="phone" name="phone" type="number" class="form-control" tabindex="7">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Ciudad</label>
    <input id="city" name="city" type="text" class="form-control" tabindex="8">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Departamento</label>
    <input id="state" name="state" type="text" class="form-control" tabindex="9">
  </div>
  
  <div class="mb-3 col-6">
    <label for="" class="form-label">Tipo Asistente</label>
   <select name="type_assist" id="type_assist" class="form-control"  tabindex="10">
    <option value="Asistente">Asistente</option>
    <option value="Staff">Staff</option>
    </select>
  </div>
 
   <a href="/accesos" class="btn btn-secondary" tabindex="11">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="12">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop