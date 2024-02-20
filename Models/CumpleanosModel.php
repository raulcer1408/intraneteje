<?php 
	class CumpleanosModel extends Mysql
	{
		public function diascalculo1()
		{
			$sql = "SELECT DiaInicioCalculo, DiaFinCalculo, Tolerancia,MinPerPar,MinAtrasos
				FROM diacalculo";
			$request = $this->select($sql);
			return $request;

		}
		public function mescumple($Mes){
			$Mes = "'".$Mes."'";
			$sql = "SELECT ROW_NUMBER() OVER (order by Funcionarios.NroItem) as Id, dbo.Funcionarios.Estado, dbo.VPersonal.NroDocumento, dbo.VPersonal.NombreCompleto, cast(DAY(dbo.VPersonal.FechaNacimiento)as varchar(2)) + ' de ' + datename(MONTH,dbo.VPersonal.FechaNacimiento) + ' de ' + cast(YEAR(getdate()) as varchar(4)) as FechaNacimiento
				FROM dbo.Funcionarios 
				INNER JOIN dbo.VPersonal ON dbo.Funcionarios.IdPersonal = dbo.VPersonal.IdPersonal
				WHERE datepart(mm, FechaNacimiento) = $Mes and Estado = 'V'";
			$request = $this->con($sql);
			return $request;
		}
	}
