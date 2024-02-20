<?php 
	class AtrasosModel extends Mysql
	{
		public function diascalculo1()
		{
			$sql = "SELECT DiaInicioCalculo, DiaFinCalculo, Tolerancia,MinPerPar,MinAtrasos
				FROM diacalculo";
			$request = $this->select($sql);
			return $request;

		}
		public function MinutosAcumuladosAtrasos(string $identificacion, string $FechaInicio, string $FechaFin, int $Tolerancia){
			$this->FechaInicio = "'".$FechaInicio."'";
			$this->FechaFin = "'".$FechaFin."'";
			$this->Identificacion = $identificacion;
			$this->Tolerancia = $Tolerancia;
			$sql = "SELECT NroTarjetaAsistencia,NombreCompleto,convert(date,Fecha,103) as Fecha,CONVERT(varchar,IngresoM,8) as IngresoM,( SELECT CASE WHEN DATEDIFF(minute, HoraIngresoM,IngresoM)>$this->Tolerancia THEN DATEDIFF(minute, HoraIngresoM,IngresoM) ELSE 0 END) AS [RetrasoManana],CONVERT(varchar,IngresoT,8) as IngresoT,( SELECT CASE WHEN DATEDIFF(minute, HoraIngresoT,IngresoT)>$this->Tolerancia THEN DATEDIFF(minute, HoraIngresoT,IngresoT) ELSE 0 END) AS [RetrasoTarde] FROM VAsistencias WHERE NroTarjetaAsistencia = $this->Identificacion AND  convert(date,Fecha,103) BETWEEN $this->FechaInicio AND $this->FechaFin and DATEDIFF(minute, HoraIngresoM,IngresoM)>$this->Tolerancia or  NroTarjetaAsistencia = $this->Identificacion AND  convert(date,Fecha,103) BETWEEN $this->FechaInicio AND $this->FechaFin and  DATEDIFF(minute, HoraIngresoT,IngresoT)>$this->Tolerancia ";
			$request = $this->con($sql);
			return $request;
		}
	}
 ?>