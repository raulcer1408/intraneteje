<?php
class permisoSalidas extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(2);

		}

		public function permisoSalidas()
		{
			$data['id_Pagina'] = 2;
			$data['Logo'] = media().'/images/eje.png';
			$data['Titulo_Etiqueta'] = "Permisos Particulares | Escuela de Jueces";
			$data['Titulo_Pagina'] = " Intranet | Escuela de Jueces";
			$data['Nombre_Pagina'] = "Permisos Particulares";
			$data['Nombre_Grid'] = "Permisos Particulares";
			$data['page_functions_js'] = "functions_permisossalidas.js";
			$this->views->getView($this,"permisoSalidas",$data);
		}
		public function MinutosParticulares($FechaInicio = ""){
			if(isset($FechaInicio)){
				$calculodia = $this->model->diascalculo1();
				if(empty($FechaInicio)){
					$FechaInicio = date('Y-m-d',strtotime(diacalculoinicio($calculodia['DiaInicioCalculo'])));
				    $FechaFin = date('Y-m-d',strtotime(diacalculofinal($calculodia['DiaFinCalculo'])));		
				}else{
					 //$range = str_ireplace(",","/",$FechaInicio);
                      $ex = explode(',', $FechaInicio);
                      $Fecha1 = trim($ex[0]);
                      $Fecha2 = trim($ex[1]);
                      $FechaInicio = date('Y-m-d', strtotime($ex[0]));
                      $FechaFin = date('Y-m-d', strtotime($ex[1]));
						
				}
			$identificacion = $_SESSION['userData']['identificacion'];
			$MinutosPermitidos = $calculodia['MinPerPar'];
			//if($_SESSION['permisosMod']['r']){
			if($FechaInicio > $FechaFin){
				$arrResponse = array('status' => False, 'msg' => 'La Fecha Inicial no Puede ser Mayor a la Fecha Final','ErrorFecha' => 'Si');
			}else{
				$respuesta = $this->model->MinutosAcumuladosPermisos($identificacion,$FechaInicio, $FechaFin);
				if(empty($respuesta))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.', 'SinMinutos'=>'No');
				}else{
					$minutos = $respuesta[0]['MinutosAcumulados'];
					if($respuesta[0]['MinutosAcumulados'] > $MinutosPermitidos){
						$arrResponse = array('status' => true, 'data' => $respuesta, 'SinMinutos'=>'Si');
					}else{
						$arrResponse = array('status' => true, 'data' => $respuesta, 'SinMinutos'=>'No');
					}
				}
			}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

			//}
			die();
			
		}
}
		public function FechaCalculo(){
			$calculodia = $this->model->diascalculo1();
			$FechaInicio = diacalculoinicio($calculodia['DiaInicioCalculo']);
			$FechaFin = diacalculofinal($calculodia['DiaFinCalculo']);
			$arrResponse = array('FechaInicio' => $FechaInicio, 'FechaFin' => $FechaFin);
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		}

	
		public function SalidasParticulares($FechaInicio = "")
		{
			 if(isset($FechaInicio)){
				$calculodia = $this->model->diascalculo1();
				if(empty($FechaInicio)){
					$FechaInicio = date('Y-m-d',strtotime(diacalculoinicio($calculodia['DiaInicioCalculo'])));
				    $FechaFin = date('Y-m-d',strtotime(diacalculofinal($calculodia['DiaFinCalculo'])));	
				}else{
					 //$range = str_ireplace(",","/",$FechaInicio);
                      $ex = explode(',', $FechaInicio);
                      $Fecha1 = trim($ex[0]);
                      $Fecha2 = trim($ex[1]);
                      $FechaInicio = date('Y-m-d', strtotime($ex[0]));
                      $FechaFin = date('Y-m-d', strtotime($ex[1]));
						
				}
				
				$identificacion = "'".$_SESSION['userData']['identificacion']."'";
				$MinutosPermitidos = $calculodia['MinPerPar'];
				$mensaje = array();
			}
			//if($_SESSION['permisosMod']['r']){
			if($FechaInicio > $FechaFin){
				$arrResponse = array('status' => false, 'data' => $mensaje);
			}else{

				$respuesta = $this->model->DetalleSalidasParticulares($identificacion,$FechaInicio, $FechaFin);
				if(empty($respuesta))
				{
					$arrResponse = array('status' => false, 'data' => $mensaje);
				}else{
					$arrResponse = array('status' => true, 'data' => $respuesta);
				}
			}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

			//}
			die();
		}
			
}

		
 ?>