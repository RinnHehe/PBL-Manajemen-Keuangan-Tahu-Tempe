<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light" style="background-color: #FF5F5F;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><lord-icon
    src="https://cdn.lordicon.com/axacjdbs.json"
    trigger="hover"
    stroke="bold"
    colors="primary:#121331,secondary:#66ee78"
    style="width:30px;height:30px">
</lord-icon></a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>-->
      

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <lord-icon
    src="https://cdn.lordicon.com/unukghxb.json"
    trigger="morph"
    stroke="bold"
    state="morph-check"
    colors="primary:#000000,secondary:#3080e8"
    style="width:30px;height:30px">
</lord-icon>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #C8C8C8;">
    <!-- Konten Sidebar -->


    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url("logo.png")?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CUAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url("logo.png")?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:white">PEGAWAI</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
    <a href="<?= base_url('pegawais/dashboardpegawai')?>" class="nav-link ">
    <lord-icon
    src="https://cdn.lordicon.com/epietrpn.json"
    trigger="morph"
    stroke="bold"
    state="morph-neighbourhood"
    colors="primary:#121331,secondary:#66ee78,tertiary:#b26836,quaternary:#f24c00,quinary:#3a3347,senary:#646e78,septenary:#ebe6ef"
    style="width:30px;height:30px">
</lord-icon>   
        <p style="color: black;">DASHBOARD</p>
    </a>
</li>

                </a>
                <li class="nav-item">
    <a href="<?= base_url('pegawais/Stokbarangpegawai')?>" class="nav-link ">
    <lord-icon
    src="https://cdn.lordicon.com/qnstsxhd.json"
    trigger="morph"
    stroke="bold"
    state="morph-fill"
    colors="primary:#000000,secondary:#ff5f5f,tertiary:#ebe6ef,quaternary:#ffc738"
    style="width:30px;height:30px">
</lord-icon>
        <p style="color: black;">STOK BARANG</p>
    </a>
</li>
<li class="nav-item">
    <a href="<?= base_url('pegawais/pengeluaranpegawai')?>" class="nav-link ">
    <lord-icon
    src="https://cdn.lordicon.com/eiekfffz.json"
    trigger="hover"
    stroke="bold"
    colors="primary:#121331,secondary:#66d7ee,tertiary:#646e78"
    style="width:30px;height:30px">
</lord-icon>
        <p style="color: black;">PENGELUARAN</p>
    </a>
</li>
<li class="nav-item">
    <a href="<?= base_url('pegawais/Penjualanpegawai')?>" class="nav-link ">
    <lord-icon
    src="https://cdn.lordicon.com/yfrgwbag.json"
    trigger="morph"
    state="morph-coins"
    style="width:30px;height:30px">
</lord-icon>
        <p style="color: black;">PENJUALAN</p>
    </a>
</li>
<li class="nav-item">
    <a href="<?= base_url('dashboard')?>" class="nav-link ">
    <lord-icon
    src="https://cdn.lordicon.com/ncseweia.json"
    trigger="hover"
    colors="primary:#000000,secondary:#e3c0ac,tertiary:#c74b16,quaternary:#3a3347,quinary:#f24c00,senary:#2ca58d"
    style="width:30px;height:30px">
</lord-icon>
        <p style="color: black;">LOGOUT</p>
    </a>
                </a>
              </li>
            </ul>
          </li>
          
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
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">