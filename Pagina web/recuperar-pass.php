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
		<h1>Recuperar contrase&ntilde;a</h1>
		<span class="material-symbols-outlined">key</span>
		
		<form action="recuperar-pass2.php" method="post">
            
			<div class="cajas2">
            Rellene el formulario a continuacion para restablecer su contrase&ntilde;a
			<p>RUN <input type="text" name="user"></p>
			</div>
			<input type="submit" value="Continuar">
		</form>
	</body>
</html>