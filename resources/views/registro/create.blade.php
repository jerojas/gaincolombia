<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Registro | PASADIA</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md Navbar-white navbar-light">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="vendor/adminlte/dist/img/logoverde.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SEVEN</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Login</a>
          </li>      
        </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Registro PASADIA | <small>Camporee Conquistadores UCS</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Registro</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Registre los siguientes datos <small></small></h3>
              </div>
              <!-- /.card-header -->
              <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Información Importante:</h5>
              <ul>
              <li>Valor Pasadia: $20.000</li>
              <li>Si va 3 días o más debe pagar la inscripción full</li>
              
              </ul>
               </div>
              <!-- form start -->
              <form action="{{url('asistentes')}}" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="" class="form-label">Documento</label>
                  <input type="text" class="form-control" name="document" id="document" value="{{ old('document') }}" tabindex="1" required>
                  </div>
                  <div class="form-group">
                  <label for="" class="form-label">Nombres</label>
                  <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" tabindex="2" required>
                  </div>
                  <div class="form-group">
                  <label for="" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}" tabindex="3" required>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                  </div>
                  <div class="form-group">
                  <label for="" class="form-label">Teléfono</label>
                  <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" tabindex="3" required>
                  </div>
                  <div class="form-group">
                  <label for="" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}" tabindex="4" required>
                  </div>
                  <div class="form-group">
                  <label for="" class="form-label">Edad</label>
                  <input type="text" class="form-control" name="age" id="age" value="{{ old('age') }}" tabindex="4" required>
                  </div>
                  
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Acepto el tratamiento <a href="#">de mis datos personales</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    <!-- /.content -->
   </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
