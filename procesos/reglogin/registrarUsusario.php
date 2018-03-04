<?php 
require_once '../../clases/conexion.php';
require_once '../../clases/Usuarios.php';

$usu=new usuario();

$datos=array($_POST['nombre'],
	$_POST['apellido'],
	$_POST['usuario'],
	$_POST['pass']
	);

echo $usu->registrarUsuario($datos);

?>