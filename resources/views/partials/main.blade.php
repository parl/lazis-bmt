<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $page }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- style for nice select2 -->
  <link rel="stylesheet" href="{{ asset('dist/css/nice.select2.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
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
    <a href="/" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="BMT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lazis BMT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
                <li class="nav-item">
                @if($page=='dashboard')
                  <a href="{{ url('') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                @else
                  <a href="{{ url('') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                @endif 
                </li>
            </li>
            
            <li class="nav-item">
                @if($page=='muzaki')
                <a href="{{ url('muzaki') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Muzaki</p>
                </a>
                @else
                <a href="{{ url('muzaki') }}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Muzaki</p>
                </a>
                @endif
            </li>

            <li class="nav-item">
                
                @if($page=='jenis_donasi')
                <a href="{{ url('jenis-donasi') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ref Jenis Donasi</p>
                </a>
                @else
                <a href="{{ url('jenis-donasi') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ref Jenis Donasi</p>
                </a>
                @endif
            </li>

            <li class="nav-item">
              
              @if($page=='asnaf')
              <a href="{{ url('asnaf') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Ref Asnaf</p>
            </a>
                @else
                <a href="{{ url('asnaf') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ref Asnaf</p>
                </a>
                @endif
          </li>

            <li class="nav-item">
                
                @if($page=='donasi_masuk')
                <a href="{{ url('donasi-masuk') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Donasi Masuk</p>
                </a>
                  @else
                  <a href="{{ url('donasi-masuk') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Donasi Masuk</p>
                </a>
                  @endif
            </li>

            <li class="nav-item">
              
              @if($page=='donasi_keluar')
              <a href="{{ url('donasi-keluar') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Donasi Keluar</p>
            </a>
                @else
                <a href="{{ url('donasi-keluar') }}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Donasi Keluar</p>
                </a>
                @endif
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
