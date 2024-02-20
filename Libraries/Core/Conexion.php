<?php
class Conexion{
	private $conect;
	private $conectSQL;

	public function __construct(){
		$connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
		$connectionStringSQL = "sqlsrv:server=".DB_HOST_SQL.";database=".DB_NAME_SQL;
		try{
			$this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo "conexión exitosa";
		   // $this->conectSQL = new PDO($connectionStringSQL, DB_USER_SQL, DB_PASSWORD_SQL);
			//$this->conectSQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			$this->conect = 'Error de conexión';
		    echo "ERROR: " . $e->getMessage();
		}
		//conexion sql
		
	}

	public function conect(){
		return $this->conect;
	}
	public function conectSQL(){
		return $this->conectSQL;

	}
	 
}

?>