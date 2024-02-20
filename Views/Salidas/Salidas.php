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
                      <h2 class="m-0"><i class="fas fa-running"></i> <?= $data['Nombre_Grid'];?>
                      </h2><br>
                    </div>
                  </div>
                </div>
              <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="col-form-label" for="Nombre"><i class="fas fa-check"></i> Nombre del Funcionario</label>
                    <input type="text" class="form-control is-valid" id="Nombre" placeholder="Ingrese su Nombre Completo">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <label class="col-form-label" for="Cargo"><i class="fas fa-check"></i> Cargo</label>
                    <input type="text" class="form-control is-valid" id="Cargo" placeholder="Ingrese Su Cargo">
                  </div>
                </div>
                <div class="col-lg-4">
                   <div class="form-group">
                    <label for="TipoSalida">Tipo Salida</label>
                    <select class="form-control" data-live-search="false" id="TipoSalida" name="TipoSalida" required >
                    </select>
                </div>
               </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="col-form-label" for="Motivo"><i class="fas fa-check"></i> Motivo</label>
                    <input type="text" class="form-control is-valid" id="Motivo" placeholder="Ingrese el Motivo de su Salida">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <label class="col-form-label" for="Lugar"><i class="fas fa-check"></i> Lugar</label>
                    <input type="text" class="form-control is-valid" id="Lugar" placeholder="Ingrese el Lugar al que sale">
                  </div>
                </div>
                <div class="col-lg-4">
                </div>
                      <div class="col-md-3">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Hora de Salida</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                        
                          <input type="time" name="HoraSalida" id = "HoraSalida" value="11:45:00" max="22:30:00" min="10:00:00" step="1">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Hora de Retorno</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                          <input type="time" name="HoraRetorno" id = "HoraRetorno" value="11:45:00" max="22:30:00" min="10:00:00" step="1">
                      </div>
                    </div>
                  <div class="col-md-6">
                   <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Fecha de Solicitud</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="FechaSolicitud" placeholder="Fecha Solicitud"  readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <li class="dropdown-divider"></li>
                    </div>
                    <div class="tile-footer">
                      <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                      <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                    </div>
                </div>
              </div>
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
                 
                  <span class='tresd' id ="Salidas">0</span><br>
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
