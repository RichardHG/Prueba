<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php require_once 'dependencias.php' ?>
</head>
<body style="background-color: gray">
<br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading">Registrar Administador</div>
					<div class="panel panel-body">
						<form id="form_registro">
							<label>Nombre</label>
							<input type="text" class="form-control" name="nombre" id="nombre">
							<label>Apellido</label>
							<input type="text" class="form-control" name="apellido" id="apellido">
							<label>Usuario</label>
							<input type="text" class="form-control" name="usuario" id="usuario">
							<label>Password</label>
							<input type="text" class="form-control" name="pass" id="pass">
						</form><br>
						<span class="btn btn-danger" id="Btnregistrar">Registrar</span>	
						<a href="login.php" class="btn btn-success">Regresar Login</a>
						
					</div>
				</div>

			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#Btnregistrar").click(function(){
			datos=$("#form_registro").serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/reglogin/registrarUsusario.php",
				success:function(r){
					alert(r);
					if (r==1) {
						alert("Datos registrado con exito");	
					}else{
						alert("No se pudo registrar");
					}
				}
			});
		});
	});
</script>