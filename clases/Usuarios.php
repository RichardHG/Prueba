<?php 
	

	class usuario{

		public function registrarUsuario($datos){
			$obj=new conectar();
			$conectar=$obj->conecta();

			$fecha=date('Y-m-d');
			$sql="INSERT INTO usuarios(nombre,apellido,email,password,fechaCaptura) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$fecha')";

			return mysqli_query($conectar,$sql);
		}

		public function validaracceso($datos){
			$obj=new conectar();
			$conectar=$obj->conecta();

			$_SESSION['usuario']=$datos[0];
			$_SESSION['iduser']=self:: traerID($datos);

			$sql="SELECT email,password,id_usuario from usuarios where email='$datos[0]' and password='$datos[1]'";

			 $result=mysqli_query($conectar,$sql);
			//return $dato=mysql_fetch_row($result);
			if (mysqli_num_rows($result)>0) {
				return 1;
			}else{
				return 0;
			}
		}

		public function traerID($datos){
			$obj=new conectar();
			$conectar=$obj->conecta();

			$sql="SELECT id_usuario from usuarios where email='$datos[0]' and password='$datos[1]'";
			$result=mysqli_query($conectar,$sql);

			return mysqli_fetch_row($result)[0];
		}
	}
 ?>