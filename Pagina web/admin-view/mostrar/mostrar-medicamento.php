<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../../css/home.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Mostrar datos medicamento: admin</title>

		<!-- php -->
		<?php
			include_once("../../php/conectar.php");
			$consulta = pg_exec("select * from mostrar_medicamentos()") or die("Consulta fallida");
		?>

	</head>
	<body>
		<img src="../../images/logo.png" class="logo">
		<ul id="menuprincipal">
			<li id="elementosmenu"><a href="../../home-admin.html"> <span class="material-symbols-outlined">home</span>Inicio</a></li>
			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">app_registration</span>Registrar</a>
				<div id="dropdown-content">
					<a href="../registrar/registrar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente
					<a href="../registrar/registrar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="../registrar/registrar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="../registrar/registrar-especialidades.php"> <span class="material-symbols-outlined">school</span>Especialidades</a>
					<a href="../registrar/registrar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="../registrar/registrar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="../registrar/registrar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="../registrar/registrar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="../registrar/registrar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="../registrar/registrar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="../registrar/registrar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="../registrar/registrar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>
			</li>

			<li id="elementosmenu">
			<a href="../modificar/modificar-seleccion.php"> <span class="material-symbols-outlined">edit</span>Modificar</a>
			</li>

			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">search</span>Buscar</a>
				<div id="dropdown-content">
					<a href="../buscar/buscar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente</a>
					<a href="../buscar/buscar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="../buscar/buscar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="../buscar/buscar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="../buscar/buscar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="../buscar/buscar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="../buscar/buscar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="../buscar/buscar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="../buscar/buscar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="../buscar/buscar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="../buscar/buscar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>
			</li>
			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">visibility</span>Mostrar</a>
				<div id="dropdown-content">
					<a href="mostrar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente</a>
					<a href="mostrar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="mostrar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="mostrar-especialidades.php"> <span class="material-symbols-outlined">school</span>Especialidades</a>
					<a href="mostrar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="mostrar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="mostrar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="mostrar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="mostrar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="mostrar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="mostrar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="mostrar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>				
			</li>
			<li id="elementosmenu"><a href="../../home-admin-ofertas.html"><span class="material-symbols-outlined"> paid</span>Modificar ofertas</a></li>
			<li id="elementosmenu"><a href="../../home-admin-consultas.html"><span class="material-symbols-outlined">assignment_late</span>Consultas</a></li>
            <li id="elementosmenu"><a href="../../home-modelorelacional.html"><span class="material-symbols-outlined">database</span>Modelo relacional</a></li>
            <li id="elementosmenu"><a href="../../index.php"><span class="material-symbols-outlined">logout</span>Cerrar sesion</a> </li>
		</ul>
	<div id="contenido">
		<h3>Datos medicamento</h3>
		<table>
			<tr>
				<th>
					Nombre comercial medicamento
				</th>
				<th>
					Formula
				</th>
				<th>
					(Codigo) Empresa farmaceutica
				</th>
			</tr>
			<?php 
				while ($contenido = pg_fetch_assoc($consulta)){
					$nombre = pg_fetch_assoc(pg_exec("select nombre from empresafarmaceutica where codigo=".$contenido['codigoefarmaceutica'].""))['nombre'];
					echo "<tr> 
						<td>".ucfirst($contenido['nombrecomercial'])."</td>
						<td>".strtoupper($contenido['formula'])."</td>
						<td>(".$contenido['codigoefarmaceutica'].") ".ucwords($nombre)."</td>
						</tr>";
				}
			?>
		</table>
	</div>
	</body>

	<footer>Hecho por ...</footer>
</html>