@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<form action="/dash" method="POST">
  @csrf
                <div class="form-group">
            	<label for="id">Puntos de Acceso</label>
                  <select id="id" name="id" class="form-control">
                  @foreach ($accesos as $a)
                  <option value="{{$a->id}}">{{$a->description}}</option>
                  @endforeach
                  </select>
            	</div>

                <button type="submit" class="btn btn-primary">CALCULAR</button>
               
</form>

  <br>


<div class="col text-center">
<h3>{{$nombre_acceso[0]->description}}</h3>
</div>
 
<div class="row">
          <div class="col-lg-3 col-6">
            <! small box -->

            @isset($total_inscritos)
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_inscritos}}</h3>

                <p>Inscritos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Total Inscritos <i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="#" class="small-box-footer">Check In <i class="fas fa-arrow-circle-right"></i></a>
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
        @endisset

        <table id="accesos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID Asistente</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Distrito</th>
            <th scope="col">Iglesia</th>
            <th scope="col">Tipo de Asistente</th>
            <th scope="col">Hora de Ingreso</th>
            <th scope="col">Ingresado Por</th>
                      
            
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
            <td>{{$asistente->user}}</td> 
            
        </tr>
    @endforeach
    </tbody>
</table>

         
       
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
   


@stop

@section('js')
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script> -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
   

    


   
<script>
 $(document).ready(function() {
    $('#accesos').DataTable({
        "lengthMenu": [[10,50, 500, -1], [10, 50, 500, "All"]],
        language: {
  'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
},

dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]

// "order": [[4, "desc" ]]//Ordenar (columna,orden)
        
    });
} );
</script>
@stop