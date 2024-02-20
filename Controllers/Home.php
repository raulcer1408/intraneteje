<?php 

	class Home extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['id_Pagina'] = 1;
			$data['Logo'] = media().'/images/eje.png';
			$data['Titulo_Etiqueta'] = "Inicio Usuario | Escuela de Jueces";
			$data['Titulo_Pagina'] = " Intranet | Escuela de Jueces";
			$data['Nombre_Pagina'] = "Pagina de Inicio";
			$data['Nombre_Grid'] = "Pagina de Inicio";
			$this->views->getView($this,"home",$data);
		}

	}
 ?>