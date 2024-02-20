<?php 
    headerAdmin($data); 
?>

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
          </div>
         </div>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                 <div class="card-header">
                  <div class="row">
                    <div class="col-sm-12">
                      <h2 class="m-0"><i class="fas fa-suitcase"></i> <?= $data['Nombre_Grid'];?>
                      </h2><br>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="FechaInicio" placeholder="Fecha Inicial"  readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="FechaFin" placeholder="Fecha Final"  readonly>
                        </div>
                    </div>
               
                <div>
                    <button id="filter" class="btn btn-outline-info btn-sm">Buscar</button>
                    <button id="reset" class="btn btn-outline-warning btn-sm">Limpiar Campos</button>
                </div>
                  </div>
                </div>
                
                <p class="card-text">
                  <table id="LicenciasDet" class="table table-bordered table-striped display " style="width:100%" >
                  <thead>
                   
                      <tr>
                         <header>
                      <h2><span id ="Mensaje"></span></h2>
                    </header>
                          <th>CI</th>
                          <th>Nombre Completo</th>
                          <th>Fecha</th>
                          <th>Turno</th>
                          <th>Descripcion</th>
                          <th>Motivo</th>
                          <th>Tipo Permiso</th>
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
          </div>
      </div>
  </div>
</div>
</div>
          
  <!-- /.control-sidebar -->

<?php footerAdmin($data); ?>