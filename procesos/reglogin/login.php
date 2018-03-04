<?php 
session_start();
	require_once "../../clases/conexion.php";
	require_once "../../clases/Usuarios.php";

	$obj= new usuario();
	

	$datos=array(
	$_POST['usuario'],
	$_POST['pass']
	);

	echo $obj->validaracceso($datos);

 ?>