<?php headerAdmin($data); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $data['Titulo_Pagina'];?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href=""><?= $data['Nombre_Pagina']?></a></li>
              <li class="breadcrumb-item active">Intranet</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <div class="card card-primary card-outline">
              <div class="card-body centrar">
                <h3 class="card-header centrar" id = 'felicidades'><i class="fas fa-birthday-cake"></i> CUMPLEAÑOS HOY</h3>
                <p class="card-text">
                  <div class='tresdcumplehoy' id ="HoyCumple"></div>
                  <P class='mensajes3d' ID = "mensaje"></P>
                </p>
             </div>
            </div><!-- /.card -->
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h3 class="card-header centrar">TELEFONOS INTERNOS</h3>
                <p class="card-text">
                  <table id="TelefonosInternos" class="table table-bordered table-striped display " style="width:100%">
                  <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nombre Completo</th>
                          <th>Interno</th>
                          <th>Celular</th>
                          <th>Correo Institucional</th>
                          <th>Correo Personal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        </tr>
                      </tbody>
                  
                </table>
                </p>
             
              </div>
            </div><!-- /.card -->
          
            <!--div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">CONTROL DE MARCACIONES</h5>
                <p class="card-text">

                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
             <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0 centrar">PERMISOS PARTICULARES DEL MES</h5>
              </div>
              <div class="card-body centrar">
               
                <h6>TIEMPO ACUMULADO EN MINUTOS</h6>

                <p class="card-text">
                 
                  <span class='tresd' id ="Permisos">0</span>
                  
                </p>
                <a href="<?= BASE_URL()?>/PermisoSalidas" class="btn btn-primary">Detalle de Permisos</a>
              </div>
            </div>
         
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0 centrar">ATRASOS DEL MES</h5>
              </div>
              <div class="card-body centrar">
                <h6>TIEMPO ACUMULADO EN MINUTOS</h6>
                <p class="card-text">
                  <span class='tresd' id ="Atrasos">0</span><br>
                  <span id ="Mensaje"></span>
                </p>
                <a href="<?= BASE_URL()?>/Atrasos" class="btn btn-primary">Detalle de Atrasos</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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
  
<?php footerAdmin($data); ?>
    