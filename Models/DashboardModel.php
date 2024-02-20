<?php 
	class DashboardModel extends Mysql
	{
		public function MinutosAcumuladosPermisos(string $identificacion, string $FechaInicio, string $FechaFin){
			$this->FechaInicio = "'".$FechaInicio."'";
			$this->FechaFin = "'".$FechaFin."'";
			$this->Identificacion = "'".$identificacion."'";
			$sql = "SELECT p.NroDocumento,r.NombreCompleto,r.IdTipoSalida,sum(DATEDIFF(minute, FechaHoraSalida, HoraRetorno)) 
					as [MinutosAcumulados]
					FROM VPersonal p 
					INNER JOIN VSalidasFuncionarios r
					ON p.IdPersonal = r.IdPersonal
					WHERE p.NroDocumento = $this->Identificacion and convert(date,r.FechaHoraSalida,103) 
					BETWEEN $this->FechaInicio and $this->FechaFin and IdTipoSalida = 'P'
					GROUP BY p.NroDocumento,r.NombreCompleto,r.IdTipoSalida";
			$request = $this->con($sql);
			return $request;
		}
		public function MinutosAcumuladosAtrasos(string $identificacion, string $FechaInicio, string $FechaFin, int $Tolerancia){
			$this->FechaInicio = "'".$FechaInicio."'";
			$this->FechaFin = "'".$FechaFin."'";
			$this->Identificacion = $identificacion;
			$this->Tolerancia = $Tolerancia;
			$sql = "SELECT NroTarjetaAsistencia,NombreCompleto,convert(date,Fecha,103) as Fecha,CONVERT(varchar,IngresoM,8) as IngresoM,( SELECT CASE WHEN DATEDIFF(minute, HoraIngresoM,IngresoM)>$this->Tolerancia THEN DATEDIFF(minute, HoraIngresoM,IngresoM) ELSE 0 END ) AS [RetrasoMañana],CONVERT(varchar,IngresoT,8) as IngresoT,( SELECT CASE WHEN DATEDIFF(minute, HoraIngresoT,IngresoT)>$this->Tolerancia THEN DATEDIFF(minute, HoraIngresoT,IngresoT) ELSE 0 END) AS [RetrasoTarde] FROM VAsistencias WHERE NroTarjetaAsistencia = $this->Identificacion AND  convert(date,Fecha,103) BETWEEN $this->FechaInicio AND $this->FechaFin and DATEDIFF(minute, HoraIngresoM,IngresoM)>$this->Tolerancia or  NroTarjetaAsistencia = $this->Identificacion AND  convert(date,Fecha,103) BETWEEN $this->FechaInicio AND $this->FechaFin and  DATEDIFF(minute, HoraIngresoT,IngresoT)>$this->Tolerancia ";
			$request = $this->con($sql);
			return $request;
		}
		public function Internos(){
			$sql = " SELECT (@s := @s+ 1) AS Id ,NombreCompleto,ci,Interno,Celular,TelefonoCasa,Oficina,Cargo,CorreoInstitucional,CorreoPersonal FROM internospersonal, (SELECT @s:=0) AS s WHERE STATUS = 1";
			$request = $this->select_all($sql);
			return $request;
		}
		public function hoycumple(){
			$sql = "SELECT ROW_NUMBER() OVER (order by Funcionarios.NroItem) as Id, dbo.Funcionarios.Estado, dbo.VPersonal.NroDocumento, dbo.VPersonal.NombreCompleto, cast(DAY(dbo.VPersonal.FechaNacimiento)as varchar(2)) + ' de ' + datename(MONTH,dbo.VPersonal.FechaNacimiento) + ' de ' + cast(YEAR(getdate()) as varchar(4)) as FechaNacimiento
				FROM dbo.Funcionarios 
				INNER JOIN dbo.VPersonal ON dbo.Funcionarios.IdPersonal = dbo.VPersonal.IdPersonal
				WHERE datepart(dd, FechaNacimiento) = datepart(dd, getdate()) and datepart(mm, FechaNacimiento) = datepart(mm, getdate()) and Estado = 'V'";
			$request = $this->con($sql);
			return $request;
		}
		public function diascalculo(){
			$sql = "SELECT DiaInicioCalculo, DiaFinCalculo, Tolerancia,MinPerPar,MinAtrasos
				FROM diacalculo";
			$request = $this->select($sql);
			return $request;

		}

	}
 ?>