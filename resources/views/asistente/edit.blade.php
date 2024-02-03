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
    
    @if($asistente->last_name == 'LUNA PARK')
  
    <select class="form-control" name="last_name" id="last_name" class="form-control">
    <option value="LUNA PARK" selected>LUNA PARK</option>
    <option value="REDENCION">REDENCION</option>
    <option value="EMMANUEL">EMMANUEL</option>
    <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
    <option value="BETANIA">BETANIA</option>
    <option value="SANTUARIO SUR">SANTUARIO SUR</option>
    <option value="MOLINOS">MOLINOS</option>
    <option value="ISRAEL">ISRAEL</option>
    <option value="LUCERO">LUCERO</option>
    <option value="SOACHA C.">SOACHA C.</option>
    <option value="BOSA">BOSA</option>
    <option value="SOACHA T.">SOACHA T.</option>
    <option value="JUDA">JUDA</option>
    </select>
   
    @elseif($asistente->last_name == 'REDENCION')
   
    <select class="form-control" name="last_name" id="last_name" class="form-control">
    <option value="LUNA PARK">LUNA PARK</option>
    <option value="REDENCION" selected>REDENCION</option>
    <option value="EMMANUEL">EMMANUEL</option>
    <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
    <option value="BETANIA">BETANIA</option>
    <option value="SANTUARIO SUR">SANTUARIO SUR</option>
    <option value="MOLINOS">MOLINOS</option>
    <option value="ISRAEL">ISRAEL</option>
    <option value="LUCERO">LUCERO</option>
    <option value="SOACHA C.">SOACHA C.</option>
    <option value="BOSA">BOSA</option>
    <option value="SOACHA T.">SOACHA T.</option>
    <option value="JUDA">JUDA</option>
    </select>

    @elseif($asistente->last_name == 'EMMANUEL')
   
    <select class="form-control" name="last_name" id="last_name" class="form-control">
    <option value="LUNA PARK">LUNA PARK</option>
    <option value="REDENCION">REDENCION</option>
    <option value="EMMANUEL" selected>EMMANUEL</option>
    <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
    <option value="BETANIA">BETANIA</option>
    <option value="SANTUARIO SUR">SANTUARIO SUR</option>
    <option value="MOLINOS">MOLINOS</option>
    <option value="ISRAEL">ISRAEL</option>
    <option value="LUCERO">LUCERO</option>
    <option value="SOACHA C.">SOACHA C.</option>
    <option value="BOSA">BOSA</option>
    <option value="SOACHA T.">SOACHA T.</option>
    <option value="JUDA">JUDA</option>
    </select>

    @elseif($asistente->last_name == 'BELLO HORIZONTE')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE" selected>BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'BETANIA')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA" selected>BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'SANTUARIO SUR')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR" selected>SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'MOLINOS')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS" selected>MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'ISRAEL')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL" selected>ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'LUCERO')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO" selected>LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'SOACHA C.')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C." selected>SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'BOSA')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA" selected>BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'SOACHA T.')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T." selected>SOACHA T.</option>
   <option value="JUDA">JUDA</option>
   </select>

   @elseif($asistente->last_name == 'JUDA')
   
   <select class="form-control" name="last_name" id="last_name" class="form-control">
   <option value="LUNA PARK">LUNA PARK</option>
   <option value="REDENCION">REDENCION</option>
   <option value="EMMANUEL">EMMANUEL</option>
   <option value="BELLO HORIZONTE">BELLO HORIZONTE</option>
   <option value="BETANIA">BETANIA</option>
   <option value="SANTUARIO SUR">SANTUARIO SUR</option>
   <option value="MOLINOS">MOLINOS</option>
   <option value="ISRAEL">ISRAEL</option>
   <option value="LUCERO">LUCERO</option>
   <option value="SOACHA C.">SOACHA C.</option>
   <option value="BOSA">BOSA</option>
   <option value="SOACHA T.">SOACHA T.</option>
   <option value="JUDA" selected>JUDA</option>
   </select>

   @else
   @endif
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