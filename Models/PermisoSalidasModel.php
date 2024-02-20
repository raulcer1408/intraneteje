<?php 
	class PermisoSalidasModel extends Mysql
	{
		public function DetalleSalidasParticulares(string $identificacion, string $FechaInicio, string $FechaFin)
		{
			$this->FechaInicio = "'".$FechaInicio."'";
			$this->FechaFin = "'".$FechaFin."'";
			$this->Identificacion = $identificacion;
			if($this->FechaInicio == $this->FechaFin){
				$sql = "SELECT p.NroDocumento, r.NombreCompleto, r.NroPapeleta,r.IdTipoSalida, convert(date,r.FechaHoraSalida,103) as FechaHoraSalida, CONVERT(varchar,r.FechaHoraSalida,8) as HoraSalida, CONVERT(varchar,r.HoraRetorno,8) as HoraRetorno, DATEDIFF(minute, FechaHoraSalida, HoraRetorno) as [MinutosSalida] 
					FROM VPersonal p INNER JOIN VSalidasFuncionarios r ON p.IdPersonal = r.IdPersonal 
					WHERE p.NroDocumento = $this->Identificacion and convert(date,r.FechaHoraSalida,103) = $this->FechaInicio and IdTipoSalida = 'P'";


			}else{
			$sql = "SELECT p.NroDocumento, r.NombreCompleto, r.NroPapeleta, r.IdTipoSalida, convert(date,r.FechaHoraSalida,103) as FechaHoraSalida, CONVERT(varchar,r.FechaHoraSalida,8) as HoraSalida, CONVERT(varchar,r.HoraRetorno,8) as HoraRetorno, DATEDIFF(minute, FechaHoraSalida, HoraRetorno) as [MinutosSalida] 
					FROM VPersonal p INNER JOIN VSalidasFuncionarios r ON p.IdPersonal = r.IdPersonal 
					WHERE p.NroDocumento = $this->Identificacion and convert(date,r.FechaHoraSalida,103) 
					BETWEEN $this->FechaInicio and $this->FechaFin and IdTipoSalida = 'P'";
			}
			$request = $this->con($sql);
			return $request;
		}
		public function diascalculo1()
		{
			$sql = "SELECT DiaInicioCalculo, DiaFinCalculo, Tolerancia,MinPerPar,MinAtrasos
				FROM diacalculo";
			$request = $this->select($sql);
			return $request;

		}
		public function MinutosAcumuladosPermisos(string $identificacion, string $FechaInicio, string $FechaFin){
			$this->FechaInicio = "'".$FechaInicio."'";
			$this->FechaFin = "'".$FechaFin."'";
			$this->Identificacion = "'".$identificacion."'";
			if($this->FechaInicio == $this->FechaFin){
				$sql = "SELECT p.NroDocumento,r.NombreCompleto,r.IdTipoSalida,sum(DATEDIFF(minute, FechaHoraSalida, HoraRetorno)) as [MinutosAcumulados]
						FROM VPersonal p 
						INNER JOIN VSalidasFuncionarios r 
						ON p.IdPersonal = r.IdPersonal 	
						WHERE p.NroDocumento = $this->Identificacion and convert(date,r.FechaHoraSalida,103) = $this->FechaInicio and IdTipoSalida = 'P'
						GROUP BY p.NroDocumento,r.NombreCompleto,r.IdTipoSalida";

			}else{
			$sql = "SELECT p.NroDocumento,r.NombreCompleto,r.IdTipoSalida,sum(DATEDIFF(minute, FechaHoraSalida, HoraRetorno)) as [MinutosAcumulados]
					FROM VPersonal p 
					INNER JOIN VSalidasFuncionarios r
					ON p.IdPersonal = r.IdPersonal
					WHERE p.NroDocumento = $this->Identificacion and convert(date,r.FechaHoraSalida,103) BETWEEN $this->FechaInicio and $this->FechaFin and IdTipoSalida = 'P'
					GROUP BY p.NroDocumento,r.NombreCompleto,r.IdTipoSalida";
			}
			$request = $this->con($sql);
			return $request;
		}
		
	}
 ?>