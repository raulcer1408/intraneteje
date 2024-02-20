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
          <div class="col-lg-8">
            <div class="card card-primary card-outline">
              <div class="card-body">
                 <div class="card-header">
                  <div class="row">
                    <div class="col-sm-7">
                      <h2 class="m-0"><i class="far fa-eye"></i> <?= $data['Nombre_Grid'];?>
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
                  <table id="AtrasosMes" class="table table-bordered table-striped table-condensed" >
                  <thead>
                       <tr>
                          <th>CI</th>
                          <th>Nombre Completo</th>
                          <th>Fecha Asistencia</th>
                          <th>Ingreso Mañana</th>
                          <th>Retraso Mañana</th>
                          <th>Ingreso Tarde</th>
                          <th>Retraso Tarde</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          
                        </tr>
                      </tbody>
                  
                </table>
                </p>
             
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
             <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0 centrar">ATRASOS DEL MES</h5>
              </div>
              <div class="card-body centrar">
               
                <h6>TIEMPO ACUMULADO EN MINUTOS</h6>

                <p class="card-text">
                 
                  <span class='tresd' id ="Atrasos">0</span><br>
                  <span id ="Mensaje"></span>
                  
                </p>
                <a href="<?= BASE_URL()?>/Dashboard" class="btn btn-primary">Regresar a Pagina Principal</a>
              </div>
            </div>
         
           </div>
       
        </div>
       
      </div>
    </div>

  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>


  <!-- /.control-sidebar -->

<?php footerAdmin($data); ?>
    

   