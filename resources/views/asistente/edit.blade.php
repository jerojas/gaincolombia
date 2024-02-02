@extends('adminlte::page')

@section('title', 'Asistentes')

@section('content_header')
    <h1>Editar Asistente</h1>
@stop

@section('content')
   <form action="/asistentes/{{$asistente->id}}" method="POST">    
   @csrf
   @method('PUT')
  <!-- <div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input id="id" name="id" type="text" class="form-control" value="{{$asistente->id}}" disabled>    
  </div> -->
  <div class="mb-3">
    <label for="" class="form-label">Asistente ID</label>
    <input id="asistente_id" name="asistente_id" type="text" class="form-control" value="{{$asistente->asistente_id}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombres Completos</label>
    <input id="first_name" name="first_name" type="text" class="form-control" value="{{$asistente->first_name}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Distrito</label>
    <input id="last_name" name="last_name" type="text" class="form-control" value="{{$asistente->last_name}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Iglesia</label>
    <input id="document" name="document" type="text" class="form-control" value="{{$asistente->document}}">
  </div>
  <!-- <div class="mb-3">
    <label for="" class="form-label">Profesion</label>
    <input id="profesion" name="profesion" type="text" class="form-control" value="{{$asistente->profesion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="email" class="form-control" value="{{$asistente->email}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="{{$asistente->phone}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <input id="ciudad" name="ciudad" type="text" class="form-control" value="{{$asistente->city}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Departamento</label>
    <input id="state" name="state" type="text" class="form-control" value="{{$asistente->state}}">
  </div> -->

  <div class="mb-3">
    <label for="" class="form-label">Tipo Asistente</label>
    
    @if($asistente->type_assist == 'Asistente')
  
    <select class="form-control" name="type_assist" id="type_assist" class="form-control">
   
    <option value="Asistente" selected>Asistente</option>
    <option value="Staff">Staff</option>
    </select>
   
    @elseif($asistente->type_assist == 'Staff')
   
    <select class="form-control" name="type_assist" id="type_assist" class="form-control">
   
    <option value="Staff" selected>Staff</option>
    <option value="Asistente">Asistente</option>
    </select>
   @else
   @endif
  </div>


    <a href="/asistentes" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop