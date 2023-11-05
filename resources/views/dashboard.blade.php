<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}" />
<link rel="stylesheet" href="{{asset('dist/css/style.css')}}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

<!-- Navbar -->

<!-- /.navbar -->


<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
<img src="/dist/img/cafe.png" alt="AdminLTE Logo" style="width:240px;height:80px;opacity: .8">

</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{-- <div class="image">
  <img src="/photo1.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
  <a href="#" class="d-block">Admin</a>
</div> --}}
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
  <li class="nav-item menu-open">
    <a href="/home" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Dashboard
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>

  </li>
  <li class="nav-item">
    <a href="pages/widgets.html" class="nav-link">
      <i class="nav-icon fas fa-th"></i>
      <p>
        Menu Items
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
        Tables
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>

  <li class="nav-item">
    <a href="{{route('clients')}}" class="nav-link">
      <i class="nav-icon fas fa-chart-pie"></i>
      <p>
        Clients
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>

  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tree"></i>
      <p>
        Reviews
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>

  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-edit"></i>
      <p>
        Orders
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>

  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fa-solid fa-mug-hot"></i>
      <p>
        Live Order
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>

    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Reports
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Documents
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-chart-pie"></i>
                      <p>
                        History
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a></br></br></br></br></br></br></br></br>

</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
  <div class="col-sm-6">

  </div><!-- /.col -->
  <div class="col-sm-6">

  </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content" style="background-color: white">
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>30</h3>

            <p>Total Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>15,000</h3>

            <p>Total Revenue</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>20</h3>

            <p>Total Customers</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>4,000</h3>

            <p>Cancel Revenue</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>

    @yield('content')
  </div>
  <!-- ./col -->
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

</x-app-layout>

{{-- <x-home>
    @section('content')
        <div class="container">
            @yield('content1')
        </div>
    @endsection
</x-home> --}}



