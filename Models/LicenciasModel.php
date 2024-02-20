<?php 
	class LicenciasModel extends Mysql
	{
		public function diascalculo1()
		{
			$sql = "SELECT DiaInicioCalculo, DiaFinCalculo, Tolerancia,MinPerPar,MinAtrasos
				FROM diacalculo";
			$request = $this->select($sql);
			return $request;

		}
		public function DetalleLicencias(string $identificacion, string $FechaInicio, string $FechaFin){
			$this->FechaInicio = "'".$FechaInicio."'";
			$this->FechaFin = "'".$FechaFin."'";
			$this->Identificacion = $identificacion;
			$sql = "SELECT c.NroTarjetaAsistencia, c.NombreCompleto,  convert(date,a.FechaLicencia,103) as FechaLicencia,(SELECT CASE WHEN a.Turno = 'T' THEN 'Tarde' ELSE 'Mañana' END) as Turno, a.IdMotivo,a.Descripcion,( SELECT CASE WHEN a.ConGoceHaberes = 1 THEN 'Con Haberes' ELSE 'Sin Haberes' END) as ConGoceHaberes, b.Motivo  
			 		FROM dbo.LicenciasAsistencias a INNER JOIN
			 		dbo.MotivosLicencias b ON a.IdMotivo = b.IdMotivo INNER JOIN
			 		dbo.VFuncionarios c ON a.IdFuncionario = c.IdFuncionario WHERE c.NroTarjetaAsistencia = $this->Identificacion AND convert(date,a.FechaLicencia,103) BETWEEN $this->FechaInicio AND $this->FechaFin AND a.IdMotivo <> 3";
			$request = $this->con($sql);
			return $request;
		}
	}
