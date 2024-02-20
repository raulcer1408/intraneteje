<?php 
	class Dashboard extends Controllers{
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

		public function dashboard()
		{
			$data['id_Pagina'] = 2;
			$data['Logo'] = media().'/images/eje.png';
			$data['Titulo_Etiqueta'] = "Panel de Control | Escuela de Jueces";
			$data['Titulo_Pagina'] = " Intranet | Escuela de Jueces";
			$data['Nombre_Pagina'] = "Panel de Control";
			$data['Nombre_Grid'] = "Panel de Control";
			$data['page_functions_js'] = "functions_dashboard.js";
			$this->views->getView($this,"dashboard",$data);
		}
		public function PermisosParticulares(){
			$calculodia = $this->model->diascalculo();
			$FechaInicio = date('Y-m-d',strtotime(diacalculoinicio($calculodia['DiaInicioCalculo'])));
			$FechaFin = date('Y-m-d',strtotime(diacalculofinal($calculodia['DiaFinCalculo'])));	
			$identificacion = $_SESSION['userData']['identificacion'];
			$MinutosPermitidos = $calculodia['MinPerPar'];
			//if($_SESSION['permisosMod']['r']){
				$respuesta = $this->model->MinutosAcumuladosPermisos($identificacion,$FechaInicio, $FechaFin);
				if(empty($respuesta))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				}else{
					$minutos = $respuesta[0]['MinutosAcumulados'];
					if($respuesta[0]['MinutosAcumulados'] > $MinutosPermitidos){
						$arrResponse = array('status' => true, 'data' => $respuesta, 'SinMinutos'=>'Si');
					}else{
						$arrResponse = array('status' => true, 'data' => $respuesta, 'SinMinutos'=>'No');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

			//}
			die();
			
		}
		 
		public function MinutosAtrasos(){
			$resultado= 0;
			$calculodia = $this->model->diascalculo();
			$FechaInicio = date('Y-m-d',strtotime(diacalculoinicio($calculodia['DiaInicioCalculo'])));
			$FechaFin = date('Y-m-d',strtotime(diacalculofinal($calculodia['DiaFinCalculo'])));	
			$identificacion = "'".$_SESSION['userData']['identificacion']."'";
			$Tolerancia = $calculodia['Tolerancia'];
			$MinutosAtrasos = $calculodia['MinAtrasos'];
			//if($_SESSION['permisosMod']['r']){
				$respuesta = $this->model->MinutosAcumuladosAtrasos($identificacion,$FechaInicio, $FechaFin, $Tolerancia);
				for ($i=0; $i < count($respuesta); $i++) {
					$resultado = $resultado + $respuesta[$i]['RetrasoMañana'] + $respuesta[$i]['RetrasoTarde'];
				}
				if(empty($respuesta))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				}else{
					if($resultado > $MinutosAtrasos){
						$arrResponse = array('status' => true, 'data' => $respuesta, 'resultado' => $resultado, 'SinMinutos' => 'Si');
					}else{
						$arrResponse = array('status' => true, 'data' => $respuesta, 'resultado' => $resultado, 'SinMinutos' => 'No');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

			//}
			die();

		}
		public function InternosInstitucion(){
			//if($_SESSION['permisosMod']['r']){
				$respuesta = $this->model->Internos();
				if(empty($respuesta))
				{
					$arrResponse = array('status' => false, 'msg' => 'No se Registrann Cumpleaños Para este mes.');
				}else{
					$arrResponse = array('status' => true, 'data' => $respuesta);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

			//}
			die();
			
		}
		public function CumpleanosHoy(){
			//if($_SESSION['permisosMod']['r']){
				$respuesta = $this->model->hoycumple();
				if(empty($respuesta))
				{
					$arrResponse = array('status' => false, 'msg' => 'NINGUNO');
				}else{
					$arrResponse = array('status' => true, 'data' => $respuesta);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

			//}
			die();
			
		}

	}
 ?>