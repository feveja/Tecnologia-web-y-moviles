<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="css/user.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Pagina de Inicio: user</title>
		<?php 
		include_once("../php/conectar.php");
		session_start();
		$temp = $_SESSION['POST'];
		$usuario_actual = $temp['user'];
		if ($usuario_actual == null) {
			$usuario_actual = $_GET['id'];
		}
		unset($_SESSION['POST']);
		?>
	</head>
	<body>
		<img src="images/logo.png" class="logo">
		<ul id="menuprincipal">
			<li id="elementosmenu"><a href="javascript:loation.reload();"> <span class="material-symbols-outlined">home</span>Inicio</a></li>
			<!-- <li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn">Registrar <span class="material-symbols-outlined">app_registration</span></a>
				<div id="dropdown-content">
					<a href="javascript:void(0)"><span class="material-symbols-outlined">patient_list</span>Paciente</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">school</span>Especialidades</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="javascript:void(0)"><span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>
			</li> -->

			<li id="elementosmenu">
				<?php
				echo "<a href='user-view/paciente-cambiar-pass.php?id=".$usuario_actual."'> <span class='material-symbols-outlined'>key</span>Cambio de contrase&ntilde;a</a>"
				?>
			</li>
			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">search</span>Buscar</a>
				<div id="dropdown-content">
						<?php 
						echo 
						"<a href='user-view/paciente-ficha.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>patient_list</span> Mi ficha de paciente</a>
						<a href='user-view/paciente-recetas.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>prescriptions</span>Mis recetas</a>
						<a href='user-view/paciente-medico.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>medical_information</span>Mi medico</a>
						<a href='user-view/paciente-compras.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>sell</span>Mis compras</a>
						<!-- <a href='javascript:void(0)'><span class='material-symbols-outlined'>verified_user</span>Supervisor</a> -->
						<a href='user-view/paciente-prevision.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>health_and_safety</span>Mi prevision</a>
						<a href='user-view/paciente-medicamentos.php'><span class='material-symbols-outlined'>medication</span>Medicamentos</a>
						<a href='user-view/paciente-farmacias.php'><span class='material-symbols-outlined'>local_pharmacy</span>Farmacias</a>
						<a href='user-view/paciente-existencias.php'><span class='material-symbols-outlined'>inventory</span>Existencias de medicamentos</a>
						<a href='user-view/paciente-empresasfarmaceuticas.php'><span class='material-symbols-outlined'>vaccines</span>Empresa farmaceutica</a>
						<!-- <a href='javascript:void(0)'><span class='material-symbols-outlined'>contract</span>Contrato</a> -->
						"?>
				</div>
			</li>
			<!-- <li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn">Mostrar <span class="material-symbols-outlined">visibility</span></a>
				<div id="dropdown-content">
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">patient_list</span>Paciente</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">school</span>Especialidades</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="javascript:void(0)"> farmaceutica <span class="material-symbols-outlined">vaccines</spanEmpresa</a>>
					<a href="javascript:void(0)"> <span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>				
			</li> -->
			<!-- <li id="elementosmenu"><a href="javascript:void(0)">Modificar ofertas <span class="material-symbols-outlined"> paid</span> </a></li> -->
			<li id="elementosmenu"><a href="index.php"> <span class="material-symbols-outlined">logout</span>Cerrar sesion</a> </li>
		</ul>
	<div id="contenido">	
		<h3>Bienvenido a la pagina de inicio, utilice el menu superior para interactuar con el sistema</h3>
	</div>
	</body>

	<footer>Hecho por ...</footer>
</html>