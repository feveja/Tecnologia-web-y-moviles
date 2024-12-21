<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="css/login.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Farmacia Rayos X</title>	
		<?php 
		include_once("php/conectar.php");
		?>
	</head>
	<body>
		<img class="logo" src="images/logo.png">
		<h1>Iniciar sesion</h1>
		<span class="material-symbols-outlined">login</span>
		
		<form action="login-check.php" method="post">
			<div class="cajas">
			<p>Usuario <input type="text" name="user">
			Contrase&ntilde;a <input type="password" name="pwd">
			Tipo de cuenta 
			<select name="tipo">
				<option>Paciente</option>
				<option>Supervisor</option>	
			</select>
			</p>
			</div>
			<input type="submit" value="Iniciar sesion">
		</form>
		<p>Contrase&ntilde;a olvidada? <a href="recuperar-pass.php">Click aqui</a></p>
	</body>
</html>