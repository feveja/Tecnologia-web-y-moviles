<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../../css/home.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Registrar contrato: admin</title>
		<?php 
		include_once("../../php/conectar.php");
		?>
	</head>
	<body>
		<img src="../../images/logo.png" class="logo">
		<ul id="menuprincipal">
			<li id="elementosmenu"><a href="../../home-admin.html"> <span class="material-symbols-outlined">home</span>Inicio</a></li>
			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">app_registration</span>Registrar</a>
				<div id="dropdown-content">
					<a href="registrar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente
					<a href="registrar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="registrar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="registrar-especialidades.php"> <span class="material-symbols-outlined">school</span>Especialidades</a>
					<a href="registrar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="registrar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="registrar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="registrar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="registrar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="registrar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="registrar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="registrar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
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
					<a href="../mostrar/mostrar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente</a>
					<a href="../mostrar/mostrar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="../mostrar/mostrar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="../mostrar/mostrar-especialidades.php"> <span class="material-symbols-outlined">school</span>Especialidades</a>
					<a href="../mostrar/mostrar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="../mostrar/mostrar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="../mostrar/mostrar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="../mostrar/mostrar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="../mostrar/mostrar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="../mostrar/mostrar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="../mostrar/mostrar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="../mostrar/mostrar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>				
			</li>
			<li id="elementosmenu"><a href="../../home-admin-ofertas.html"><span class="material-symbols-outlined"> paid</span>Modificar ofertas</a></li>
            <li id="elementosmenu"><a href="../../home-admin-consultas.html"><span class="material-symbols-outlined">assignment_late</span>Consultas</a></li>
            <li id="elementosmenu"><a href="../../home-modelorelacional.html"><span class="material-symbols-outlined">database</span>Modelo relacional</a></li>
            <li id="elementosmenu"><a href="../../index.php"><span class="material-symbols-outlined">logout</span>Cerrar sesion</a> </li>
		</ul>
	<div id="contenido">
		<h3>Para registrar un nuevo contrato, ingrese los datos del formulario a continuacion</h3>
	
	    <form action="registrar-submit.php" method="post">
			<input type="hidden" name="sender" value="contrato"/>
			<p>
			Codigo contrato: 
				<?php
					$total = pg_fetch_row(pg_exec("select max(codigocontrato) from contrato"));
				?> 
			<input type="number" value=<?php echo $total[0]+1 ?> name="codigocontrato" disabled> 

			Fecha de inicio de contrato: 
			<input type="date" name="fechainiciocontrato" min=<?php echo date("Y-m-d")?>> 
			Fecha de termino de contrato: 
			<input type="date" name="fechaterminocontrato" min=<?php echo date("Y-m-d")?>> </p>
			<p>Contenido contrato: <textarea name="textocontrato" rows="10" cols="30"></textarea></p>
			<p>Empresa farmaceutica: 
			<select name="codigoempresafarmaceutica">
				<option>---</option>
				<?php 
					$consulta = pg_query("select * from empresafarmaceutica") or die('Consulta fallida');
					while ($linea = pg_fetch_array($consulta)) {
						echo "<option label='".$linea['codigo']." ".ucwords($linea['nombre'])."'>" . $linea['codigo'] . "</option>";
					}
				?>
			</select>
			Farmacia: 
			<select name="codigofarmacia">
				<option>---</option>
				<?php 
					$consulta = pg_query("select * from farmacia") or die('Consulta fallida');
					while ($linea = pg_fetch_array($consulta)) {
						echo "<option label='".$linea['codigo']." ".ucwords($linea['nombre'])."'>" . $linea['codigo'] . "</option>";
					}
				?>
			</select>
			<p>Supervisor: 
			<select name="runsupervisor">
				<option>---</option>
				<?php 
					$consulta = pg_query("select * from supervisor") or die('Consulta fallida');
					while ($linea = pg_fetch_array($consulta)) {
						echo "<option label='".$linea['run']." ".ucfirst($linea['nombre'])." ".ucfirst($linea['apellido'])."'>" . $linea['run'] . "</option>";
					}
				?>
			</select>
			Fecha de inicio de supervision: 
			<input type="date" name="fechainiciosupervision" min=<?php echo date("Y-m-d")?>> 
			Fecha de termino de supervision: 
			<input type="date" name="fechaterminosupervision" min=<?php echo date("Y-m-d")?>></p>
            <p><input type="submit" value="Registrar"> <input type="reset" value="Limpiar formulario"></p>
	    </form>
	</div>
	</body>

	<footer>Hecho por ...</footer>
</html>