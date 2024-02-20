<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">DESCARGA EL FORMULARIO DE VACACION</a><li><a href="<?= media(); ?>/Documentos/Vacaciones.pdf" download="Formulario de Vacaciones.pdf"><button class="btn btn-Secondary">AQUI <i class="fa fa-fw fa-lg fa-check-circle"></i></a></li>

      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Salir">
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-power-off"></i>
          
        </a>
      </span>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="<?= base_url(); ?>/opciones" class="dropdown-item"><i class="fas fa-cog"></i> Configuraciones</a>
       
         <a href="<?= base_url(); ?>/usuarios/perfil" class="dropdown-item"><i class="fas fa-id-card"></i> Perfil</a>
          <div class="dropdown-divider"></div>

          <a href="<?= base_url(); ?>/logout" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
         
        </div>
    </ul>
     <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->