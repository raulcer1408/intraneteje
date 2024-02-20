<?php
class Cumpleanos extends Controllers{
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

		public function Cumpleanos()
		{
			$data['id_Pagina'] = 2;
			$data['Logo'] = media().'/images/eje.png';
			$data['Titulo_Etiqueta'] = "Detalle de Cumpleaños | Escuela de Jueces";
			$data['Titulo_Pagina'] = " Intranet | Escuela de Jueces";
			$data['Nombre_Pagina'] = "Detalle de Cumpleanos";
			$data['Nombre_Grid'] = "Detalle de Cumpleanos";
			$data['page_functions_js'] = "functions_cumpleanos.js";
			$this->views->getView($this,"Cumpleanos",$data);
		}
		public function CumpleanosMes($FechaInicio = ""){
			if(isset($FechaInicio)){
			$resultado= 0;
			$calculodia = $this->model->diascalculo1();
			if(empty($FechaInicio)){
				$FechaInicio = date('m',strtotime(diacalculofinal($calculodia['DiaInicioCalculo'])));
			}
			$mensaje = array();
			$respuesta = $this->model->mescumple($FechaInicio);
				if(empty($respuesta))
				{
					$arrResponse = array('status' => false, 'msg' => 'No se Registran Cumpleaños Para este mes.');
				}else{
					$arrResponse = array('status' => true, 'data' => $respuesta);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		}
}
	public function FechaCalculo(){
			$calculodia = $this->model->diascalculo1();
			$FechaInicio = date('m',strtotime(diacalculofinal($calculodia['DiaInicioCalculo'])));
			$FechaFin = date('m',strtotime(diacalculofinal($calculodia['DiaFinCalculo'])));
			$arrResponse = array('FechaInicio' => $FechaInicio, 'FechaFin' => $FechaFin);
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
	}
	
}
