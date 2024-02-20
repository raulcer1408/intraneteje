<?php require_once("NavBar.php");?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= BASE_URL()?>Admin" class="brand-link">
      <img src="<?= media(); ?>/images/eje.png" alt="EJE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Escuela de Jueces</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= media(); ?>/images/eje.png" class="brand-image img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos']; ?></a>
          <a href="#" class="d-block"><?= $_SESSION['userData']['nombrerol']; ?></a>
        </div>
      </div>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= media(); ?>/images/adminlte/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm"></p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= media(); ?>/images/adminlte/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm"></p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= media(); ?>/images/adminlte/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm"></p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <!--div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a-->
        </div>
      </li>
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php if(!empty($_SESSION['permisos'][1]['r'])){ ?>
          <li class="nav-item">
            <a href="<?= BASE_URL()?>/Dashboard" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "Dashboard"){
                  echo "active";
                }else{
                  echo "";
                }?>">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Panel de Control
              </p>
            </a>
          </li>
          <?php } ?>
          <!-- /Menu Usuarios -->
           <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview active">
              <div class = "col-lg-4">
              </div>  
              <div class="col-lg-8">  
               <li class="nav-item">
                <a href="<?= BASE_URL()?>/Usuarios" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "Usuarios"){
                  echo "active";
                }else{
                  echo "";
                }?>">
                  <i class="fas fa-user"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL()?>/Roles" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "Roles"){
                  echo "active";
                }else{
                  echo "";
                }?>">
                  <i class="fas fa-user-tie"></i>
                  <p>Roles</p>
                </a>
              </li>
            </div>
            </ul>

          </li>
          <?php } ?>
          <!-- Fin Menu Usuarios -->
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-id-card"></i>
              <p>
                Recursos Humanos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>  
            <ul class="nav nav-treeview">
              <div class = "col-lg-4">
                <li class="nav-header"><h3>CONSULTAS</h3></li>
              </div>  
              <div class="col-lg-8">  
              <li class="nav-item espacio">
                <a href="<?= BASE_URL()?>/Marcaciones" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "Marcaciones"){
                  echo "active";
                }else{
                  echo "";
                }?>">
                  <i class="fas fa-fingerprint"></i>
                  <p>Marcaciones</p>
                </a>
              </li>
              <li class="nav-item espacio">
                <a href="<?= BASE_URL()?>/Atrasos" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "Atrasos"){
                  echo "active";
                }else{
                  echo "";
                }?>">
                  <i class="far fa-eye"></i>
                  <p>Atrasos</p>
                </a>
              </li>
              <li class="nav-item espacio">
                <a href="<?= BASE_URL()?>/PermisoSalidas" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "PermisoSalidas"){
                  echo "active";
                }else{
                  echo "";
                }?>">
                  <i class="fas fa-running"></i>
                  <p>Salidas Particulares</p>
                </a>
              </li>
               <li class="nav-item espacio">
                <a href="<?= BASE_URL()?>/Licencias" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "Licencias"){
                  echo "active";
                }else{
                  echo "";
                }?>">
                  <i class="fas fa-suitcase"></i>
                  <p>Licencias</p>
                </a>
              </li>
              <li class="nav-item espacio">
                <a href="<?= BASE_URL()?>/Cumpleanos" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "Cumpleanos"){
                  echo "active";
                }else{
                  echo "";
                }?>">
                  <i class="fas fa-birthday-cake"></i>
                  <p>Cumpleaños</p>
                </a>
              </li>
              </div>
              <?php } ?>
              <?php if(!empty($_SESSION['permisos'][4]['r'])){ ?> 
               <div class = "col-lg-4">
                <li class="nav-header"><H3>IMPRESION</H3></li>
              </div>
              <div class="col-lg-8">
               <li class="nav-item espacio">
                <a href="<?= BASE_URL()?>/Salidas" class="nav-link <?php if(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) == "Salidas"){
                  echo "active";
                }else{
                  echo "";
                }?>">
                  <i class="fas fa-user-clock"></i>
                  <p>Papeletas de Salidas</p>
                </a>
              </li>
            </div>
            </ul>
          </li>
          <?php } ?>
            <li class="nav-item">
            <a href="<?= BASE_URL()?>/logout" class="nav-link">
              <i class="fas fa-power-off"></i>
              <p>
                Salir
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  