@extends('adminlte::page')

@section('title', 'Asistentes')

@section('content_header')
   <h1>Crear Asistente</h1>
@stop

@section('content')

<form action="{{url('asistentes')}}" method="POST">
  @csrf
  <div class="mb-3 col-6">
    <label for="" class="form-label">ID</label>
    
    <input type="text" class="form-control" name="asistente_id" id="asistente_id" value="{{ old('asistente_id') }}" tabindex="1" required>

  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Nombres</label>
    
    <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" tabindex="2" required>
  
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Apellidos</label>
    
    <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}" tabindex="3" required>
    
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Documento</label>
    
    <input type="number" class="form-control" name="document" id="document" value="{{ old('document') }}" tabindex="4" required>
   
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Profesión</label>
    <input id="profesion" name="profesion" type="text" class="form-control" tabindex="5" value="{{ old('profesion') }}">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" tabindex="6" required>
    
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Teléfono</label>
    <input type="number" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" tabindex="7" required>
   
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Ciudad</label>
    <input id="city" name="city" type="text" class="form-control" tabindex="8" value="{{ old('city') }}">
  </div>
  <div class="mb-3 col-6">
    <label for="" class="form-label">Departamento</label>
    <input id="state" name="state" type="text" class="form-control" tabindex="9" value="{{ old('state') }}">
  </div>
  
  <div class="mb-3 col-6">
    <label for="" class="form-label">Tipo Asistente</label>

    <select class="form-control" name="type_assist" id="type_assist" class="form-control"  tabindex="10">
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