<?php
class Licencias extends Controllers{
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

		public function Licencias()
		{
			$data['id_Pagina'] = 2;
			$data['Logo'] = media().'/images/eje.png';
			$data['Titulo_Etiqueta'] = "Detalle de Licencias | Escuela de Jueces";
			$data['Titulo_Pagina'] = " Intranet | Escuela de Jueces";
			$data['Nombre_Pagina'] = "Detalle de Licencias";
			$data['Nombre_Grid'] = "Detalle de Licencias";
			$data['page_functions_js'] = "functions_licencias.js";
			$this->views->getView($this,"Licencias",$data);
		}
		public function LicenciasDetalle($FechaInicio = ""){
			if(isset($FechaInicio)){
			$resultado= 0;
			$calculodia = $this->model->diascalculo1();
			if(empty($FechaInicio)){
				$FechaInicio = date('Y-m-d',strtotime(diacalculoinicio($calculodia['DiaInicioCalculo'])));
				$FechaFin = date('Y-m-d',strtotime(diacalculofinal($calculodia['DiaFinCalculo'])));	
			}else{
				      $ex = explode(',', $FechaInicio);
                      $Fecha1 = trim($ex[0]);
                      $Fecha2 = trim($ex[1]);
                      $FechaInicio = date('Y-m-d', strtotime($ex[0]));
                      $FechaFin = date('Y-m-d', strtotime($ex[1]));
			}
			$identificacion = "'".$_SESSION['userData']['identificacion']."'";
			$Tolerancia = $calculodia['Tolerancia'];
			$MinutosAtrasos = $calculodia['MinAtrasos'];
			$mensaje = array();
			//if($_SESSION['permisosMod']['r']){
			if($FechaInicio > $FechaFin){
				$arrResponse = array('status' => false, 'data' => $mensaje, 'msg' => 'La Fecha Inicial no Puede ser Mayor a la Fecha Final','ErrorFecha' => 'Si');
			}else{
				$respuesta = $this->model->DetalleLicencias($identificacion,$FechaInicio, $FechaFin);
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
	public function FechaCalculo(){
			$calculodia = $this->model->diascalculo1();
			$FechaInicio = diacalculoinicio($calculodia['DiaInicioCalculo']);
			$FechaFin = diacalculofinal($calculodia['DiaFinCalculo']);
			$arrResponse = array('FechaInicio' => $FechaInicio, 'FechaFin' => $FechaFin);
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
	}

	
}
