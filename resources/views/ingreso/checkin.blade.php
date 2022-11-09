@extends('adminlte::page')

@section('title', 'Ingresos')

@section('content_header')
   
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$acceso->description}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
              <li class="breadcrumb-item active">Check In</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


          @stop

@section('content')

<a href="/controlacceso/{{$acceso->id}}" class="btn btn-primary mb-3">VOLVER ATRÁS</a>

<table id="accesos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID Asistente</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Documento</th>
            <th scope="col">Tipo de Asistente</th>
            <th scope="col">Hora de Ingreso</th>
                      
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        
    @foreach ($asistentes as $asistente)
        <tr>
            <td>{{$asistente->asistente_id}}</td>
            <td>{{$asistente->first_name}}</td>
            <td>{{$asistente->last_name}}</td>
            <td>{{$asistente->document}}</td>  
            <td>{{$asistente->type_assist}}</td> 
            <td>{{$asistente->created_at}}</td> 
            
            <td>
                <form action="{{ route ('ingresos.destroy',[$asistente->asistente_id,$asistente->document])}}" method="POST">
                
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
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
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script> -->

<script>
$(document).ready(function() {
    $('#accesos').DataTable({
        "lengthMenu": [[10,50, 500, -1], [10, 50, 500, "All"]],
        language: {
  'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
},

// dom: 'Bfrtip',
//         buttons: [
//             'excel', 'pdf'
//         ]

"order": [[4, "desc" ]]//Ordenar (columna,orden)
        
    });
} );
</script>

@stop