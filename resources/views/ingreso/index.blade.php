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
              <li class="breadcrumb-item active">Control de Acceso</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_inscritos}}</h3>

                <p>Inscritos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/asistentes" class="small-box-footer">Total Inscritos <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$total_ingresos}}<sup style="font-size: 20px"></sup></h3>

                <p>Ingresos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/checkin/{{$acceso->id}}" class="small-box-footer">Check In <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">

                <h3>{{$pendientes_ingresar}}</h3>

                <p>Pendientes por Ingresar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Pendientes por Check In <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$staff}}</h3>

                <p>Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Logistica <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          </div>

@stop

@section('content')

<div class="container-fluid">
            <h2 class="text-center display-5">Escanear Código</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
             
                
                    <form action="/ingresos" method="POST">
                    @csrf
                        <div class="input-group">
                            <input id="asistente_id" name="asistente_id" type="search" class="form-control form-control-lg" placeholder="Escanea el código" autofocus>
                            <div class="input-group-append">
                            <input type="hidden" value="{{$acceso->id}}" id="acceso_id" name="acceso_id">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

   
        <br>
        <br>

   <div class="container text-center">
  <div class="row">
  @isset($asistentes)
  @foreach ($asistentes as $asistente)
    <div class="col">
      <label for="">ID ASISTENTE</label>
      <h3>{{$asistente->asistente_id}}</h3>
    </div>
    <div class="col">
    <label for="">NOMBRE COMPLETO</label>
      <h3>{{$asistente->first_name}}</h3>
    </div>
    <div class="col">
    <label for="">DISTRITO</label>
      <h3>{{$asistente->last_name}}</h3>
    </div>
    <div class="col">
    <label for="">IGLESIA</label>
      <h3>{{$asistente->document}}</h3>
    </div>
    <div class="col">
    <label for="">TIPO DE ASISTENTE</label>
      <h3>{{$asistente->type_assist}}</h3>
    </div>
    <div class="col-3">
    <label for="">HORA DE INGRESO</label>
      <h3>{{$asistente->created_at}}</h3>
    </div>
   
  </div>
  @endforeach
  @endisset
  <div class="row">
  @isset($usado)
  <div style='color:white; background:red' class="col">
      <h1>{{$usado}}</h1>
      </div>
  @endisset
      </div>
      <div class="row">
@isset($asistent)
      <div style='color:white; background:green' class="col">
      <h1>{{$asistent}}</h1>
      </div>
      </div>
      @endisset
      
    
  
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script> -->
@isset($validar_ingreso)
<script>
Swal.fire({
  icon: 'error',
  title: 'CÓDIGO USADO',
  text: 'No puede ingresar',
  footer: 'Validar con cédula original'
})
</script>
@endisset

@isset($validar_asistente)
<script>
Swal.fire({
  icon: 'error',
  title: 'CÓDIGO NO EXISTE',
  text: '',
  footer: 'Por favor validar inscripción'
})
</script>
@endisset

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

// "order": [[4, "desc" ]]//Ordenar (columna,orden)
        
    });
} );
</script>



@stop