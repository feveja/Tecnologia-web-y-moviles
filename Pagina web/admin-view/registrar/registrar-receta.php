<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../../css/home.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Registrar receta: admin</title>
		<?php 
		include_once("../../php/conectar.php");
		?>
		 <head>
		<!-- utilizaremos la libreria jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		</head> 
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
		<h3>Para registrar una nueva receta, ingrese los datos del formulario a continuacion</h3>
	
	    <form action="registrar-submit.php" method="post">
			<input type="hidden" name="sender" value="receta"/>
            <p>Codigo:	
			<?php
					$total = pg_fetch_row(pg_exec("select max(codigo) from receta"));
				?> 
			<input type="number" value=<?php echo $total[0]+1 ?> name="codigoreceta" disabled> 
			Fecha: <input type="date" name="fechareceta"></p>
            <p>Texto receta: <textarea name="textoreceta" rows="10" cols="30"></textarea></p>
            <p>Paciente: 
			
			<select id="runpaciente" name="runpaciente">
				<option>---</option>
				<?php 
					$consulta = pg_query("select run, nombre, apellido from paciente") or die('Consulta fallida');
					while ($linea = pg_fetch_array($consulta)) {
						echo "<option label='".$linea['run']." ".ucfirst($linea['nombre'])." ".ucfirst($linea['apellido'])."'>" . $linea['run'] . "</option>";
					}
				?>
			</select>
			Medico: 
			<select id="runmedico" name="runmedico">
				<option>---</option>
				<?php 
					$consulta = pg_query("select run,nombre,apellido from medico") or die('Consulta fallida');
					while ($linea = pg_fetch_array($consulta)) {
						echo "<option label='".$linea['run']." ".ucfirst($linea['nombre'])." ".ucfirst($linea['apellido'])."'>" . $linea['run'] . "</option>";
					}
				?>
			</select></p>
			<script>
				//obtenemos informacion del select 'runpaciente' y modificamos el evento a ejecutar
				//cuando cambie su valor
				document.getElementById('runpaciente').addEventListener('change', function() {
				//obtenemos el valor actual del select y lo guardamos en una variable
				pacienteId = document.getElementById('runpaciente').value;
				//usamos la libreria jquery y ajax para ejecutar una funcion php dentro de javascript
				jQuery.ajax({
    				type: "POST",
    				url: '../../php/obtenerMedico.php',
    				dataType: 'json',
    				data: {paciente: pacienteId},
    				success: function (obj) {
    				            resultado = obj.result;
								//si el resultado es nulo, se selecciona el valor por defecto y si no, se seleccion al medico de cabecera del paciente.
								if (resultado['run'] == null) {
									document.getElementById('runmedico').value = '---';
								}else {
								document.getElementById('runmedico').value = resultado['run'];
								}
    				        }
				});
				});
			</script>

            <p>Nombre comercial medicamento: 
			<select name="nombrecomermed">
				<option>---</option>
				<?php 
					$consulta = pg_query("select nombrecomercial from medicamento") or die('Consulta fallida');
					while ($linea = pg_fetch_array($consulta)) {
						echo "<option>" . ucfirst($linea['nombrecomercial']) . "</option>";
					}
				?>
			</select></p>
            <p><input type="submit" value="Registrar"> <input type="reset" value="Limpiar formulario"></p>
	    </form>
	</div>
	</body>

	<footer>Hecho por ...</footer>
</html>