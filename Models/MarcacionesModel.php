<?php 
	class MarcacionesModel extends Mysql
	{
		public function diascalculo1()
		{
			$sql = "SELECT DiaInicioCalculo, DiaFinCalculo, Tolerancia,MinPerPar,MinAtrasos
				FROM diacalculo";
			$request = $this->select($sql);
			return $request;

		}
		public function DetalleAsistencia(string $identificacion, string $FechaInicio, string $FechaFin){
			$this->FechaInicio = "'".$FechaInicio."'";
			$this->FechaFin = "'".$FechaFin."'";
			$this->Identificacion = $identificacion;
			$sql = "SELECT NroTarjetaAsistencia, NombreCompleto,(SELECT CASE WHEN TipoM = 'S' THEN convert(varchar,Fecha,103)+'-P' ELSE (SELECT CASE WHEN TipoM = 'L' THEN convert(varchar,Fecha,103)+'-L'ELSE convert(varchar,Fecha,103)END) END) as Fecha, TipoM, CONVERT(varchar,IngresoM,8) as IngresoM, CONVERT(varchar,SalidaM,8) as SalidaM, TipoT, CONVERT(varchar,IngresoT,8) as IngresoT, CONVERT(varchar,SalidaT,8) as SalidaT, Tolerancia FROM VAsistencias 
    		 WHERE NroTarjetaAsistencia = $this->Identificacion AND convert(date,Fecha,103) BETWEEN $this->FechaInicio AND $this->FechaFin ORDER BY convert(DATE,Fecha,103) DESC ";
			$request = $this->con($sql);
			return $request;
		}
	}
 ?>