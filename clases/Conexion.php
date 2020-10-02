<?php
	/**
	 * 
	 */
	class Conectar
	{
		
		public function conexion(){
			$servidor = "localhost";
			$usuario = "root";
			$password = "";
			$bd = "konami";
			$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
			$conexion->set_charset('utf8');
			return $conexion;
		}
	}

?>