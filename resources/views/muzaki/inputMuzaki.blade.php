{{-- <!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Input Barang</title>
    
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
        </ul>
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="/">Home</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi-box-arrow-right"></i>Logout</button>
                </form>
              </li>
            </div>
          </div>
        </ul>
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
          <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Lazis BMT</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Admin</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                  <li class="nav-item">
                    <a href="{{ url('') }}" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
              </li>
              
              <li class="nav-item">
                  <a href="{{ url('muzaki') }}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Muzaki</p>
                  </a>
              </li>
  
              <li class="nav-item">
                  <a href="{{ url('jenis-donasi') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ref Jenis Donasi</p>
                  </a>
              </li>
  
              <li class="nav-item">
                <a href="{{ url('asnaf') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ref Asnaf</p>
                </a>
            </li>
  
              <li class="nav-item">
                  <a href="{{ url('donasi-masuk') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Donasi Masuk</p>
                  </a>
              </li>
  
              <li class="nav-item">
                <a href="{{ url('donasi-keluar') }}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Donasi Keluar</p>
                </a>
            </li>
  
                
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Tambah Data Muzaki</h1>
              </div>
              <div class="col-sm-6">
                {{-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Input Muzaki</li>
                </ol> --}
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section> --}}
        @include('partials.main')   
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Input Muzaki</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{ url('muzaki/store') }}">
                      @csrf
                      @method('POST')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Muzaki</label>
                        <input type="text" class="form-control" id="inputNamaMuzaki" name="muzakiNama" placeholder="Nama Muzaki">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">No HP Muzaki</label>
                        <input type="text" class="form-control" id="inputNoHpMuzaki" name="muzakiNoHp" placeholder="No Hp muzaki">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">NPWP Muzaki</label>
                        <input type="text" class="form-control" id="inputNPWPMuzaki" name="muzakiNPWP" placeholder="NPWP Muzaki">
                      </div>
                    </div>
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
                  
              </div>
                  <!-- /.card-body -->
            </div>
                <!-- /.card -->
          </div>
              <!--/.col (right) -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    
    <!-- Page specific script -->
    <script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>
    </body>
    </html>
{{--     
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head> --}}
