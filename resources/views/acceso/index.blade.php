@extends('adminlte::page')

@section('title', 'Puntos de Acceso')

@section('content_header')
    <h1>Puntos de Acceso</h1>
@stop

@section('content')
   <a href="accesos/create" class="btn btn-primary mb-3">CREAR</a>

<table id="accesos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Evento</th>
            <th scope="col">Descripción</th>
            <th scope="col">Notas</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($accesos as $acceso)
        <tr>
            <td>{{ $acceso->id}}</td>
            <td>{{$acceso->evento}}</td>
            <td>{{$acceso->description}}</td>
            <td>{{$acceso->notes}}</td>
           
            <td>
                <form action="{{ route ('accesos.destroy',$acceso->id)}}" class="form_eliminar" method="POST">
                <a href="/controlacceso/{{ $acceso->id}}" class="btn btn-danger">Ingresar</a>
                <a href="/accesos/{{ $acceso->id}}/edit" class="btn btn-info">Editar</a>
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
      'Ha sido elimnado satisfactoriamente.',
      'success'
    )
</script>
@endif


<script>
$(document).ready(function() {
    $('#accesos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]],
        language: {
  'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
},

// dom: 'Bfrtip',
//         buttons: [
//             'copy', 'csv', 'excel', 'pdf', 'print'
//         ]
        
    });
} );





$('.form_eliminar').submit(function(e){
    e.preventDefault();
    Swal.fire({
  title: 'Estás seguro?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    
      this.submit();
  
  }
})


});

    


</script>

@stop