<?php 
    headerAdmin($data); 
    getModal('modalUsuarios',$data);
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><img src="<?= $data['Logo']; ?>"><?=$data['Titulo_Pagina'];?>

            </h1>
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


      <!-- /.content-header -->
      <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h2 class="m-0"><i class="fas fa-user-tie"></i> <?= $data['Nombre_Grid'];?>
                 <?php if($_SESSION['permisosMod']['w']){ ?>
                <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
              <?php } ?>
                 
               </h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tableUsuarios" class="table table-bordered table-striped">
                  <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Email</th>
                          <th>Teléfono</th>
                          <th>Rol</th>
                          <th>Status</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Carlos</td>
                          <td>Henández</td>
                          <td>carlos@info.com</td>
                          <td>78542155</td>
                          <td>Administrador</td>
                          <td>Activo</td>
                          <td></td>
                        </tr>
                      </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  </div>
<?php footerAdmin($data); ?>
    