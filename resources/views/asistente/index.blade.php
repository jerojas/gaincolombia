@extends('adminlte::page')

@section('title', 'Asistentes')

@section('content_header')
    <h1>Asistentes</h1>
@stop

@section('content')

<!-- @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif             -->

   <a href="asistentes/create" class="btn btn-primary mb-3">CREAR</a>

<table id="accesos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Ingreso</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Distrito</th>
            <th scope="col">Iglesia</th>
            <!-- <th scope="col">Profesión</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Ciudad</th> -->
            <th scope="col">T. Asist</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($asistentes as $asistente)
        @if ($asistente->state=='1')
        <tr style="background: #3DE422;">
       
        @endif
        <td>{{$asistente->state}}</td>
            <td>{{$asistente->asistente_id}}</td>
            <td>{{$asistente->first_name}}</td>
            <td>{{$asistente->last_name}}</td>
            <td>{{$asistente->document}}</td>
            <!-- <td>{{$asistente->profesion}}</td>
            <td>{{$asistente->email}}</td>
            <td>{{$asistente->phone}}</td>
            <td>{{$asistente->city}}</td> -->
            <td>{{$asistente->type_assist}}</td>
           
            <td>
                <form action="{{ route ('asistentes.destroy',$asistente->id)}}" class="form_eliminar" method="POST">
                <a href="/checkinasistente/{{ $asistente->id}}" class="btn btn-info">Check In</a>
                <a href="/eliminarcheckin/{{ $asistente->id}}" class="btn btn-danger">Elim. Check In</a>
                <a href="/asistentes/{{ $asistente->id}}/edit" class="btn btn-info">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Del</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


@if (session('eliminar') === 'ok')
<script>
Swal.fire(
      'Eliminado!',
      'Asistente Eliminado.',
      'success'
    )
</script>
@endif

<script>
$(document).ready(function() {
    $('#accesos').DataTable({
        "lengthMenu": [[6,10, 50, -1], [6, 10, 50, "All"]],
        language: {
  'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
},

dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
    
    });
} );



$('.form_eliminar').submit(function(e){
    e.preventDefault();
    Swal.fire({
  title: 'Estás seguro?',
  text: "No se puede reversar!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, eliminar!'
}).then((result) => {
  if (result.value) {
    
      this.submit();
  
  }
})


});

    


</script>

@stop