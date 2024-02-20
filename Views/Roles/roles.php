<?php 
    headerAdmin($data); 
    getModal('modalRoles',$data);
?>
     <!-- Content Wrapper. Contains page content -->
    <div id="contentAjax"></div> 
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
                <table class="table table-hover table-bordered" id="tableRoles">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Descripción</th>
                          <th>Status</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
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
    

   