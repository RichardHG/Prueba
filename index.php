<!DOCTYPE html>
<html>
<head>
	<title>Login de Usuario</title>
	<?php require_once 'dependencias.php' ?>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body style="background-color: gray">
<br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">login de Usuario</div>
					<div class="panel panel-body">
						<form id="formLogin">
							<label><span class="glyphicon glyphicon-user"></span> Usuario</label>
							<input type="text"  class="form-control" name="usuario" id="usuario" required="">
							<label>Password</label>
							<input type="password" class="form-control" name="pass" id="pass" required="">
						</form><br>
						<button class="btn btn-primary" id="BtnEntrar">Entrar</button>
						<a  class="btn btn-success" href="registro.php">Registrar</a>
						
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
		$("#BtnEntrar").click(function(){
			datos=$("#formLogin").serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/reglogin/login.php",
				success:function(r){
					alert(r);
					if (r==1) {
						window.location="vistas/inicio.php";
					}else{
						alert("No se pudo acceder");
					}
				}
			});
		});
	});
</script>