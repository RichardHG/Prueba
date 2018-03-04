<?php 
session_start();
if (isset($_SESSION['usuario'])) { ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Bienvenido</h1>
	</body>
	</html>

<?php 
}else{
	header('location: ../index.php');
}
?>

