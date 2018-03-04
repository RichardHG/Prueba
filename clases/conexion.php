<?php 
	class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $password="";
		private $db="ventas";

		public function conecta(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->db);

			return $conexion;
		}
	}

	$obj= new conectar();
		/*var_dump($obj->conecta());*/
		/*if ($obj->conecta()) {
			echo "conectado";
		}else{
			echo "error";
		}*/

 ?>