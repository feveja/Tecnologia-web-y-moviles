<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../../../css/home.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Borrar prevision: admin</title>
		<?php include_once('../../../php/conectar.php')?>
	</head>
	<body>
		<img src="../../../images/logo.png" class="logo">
		<ul id="menuprincipal">
			<li id="elementosmenu"><a href="../../../home-admin.html"> <span class="material-symbols-outlined">home</span>Inicio</a></li>
			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">app_registration</span>Registrar</a>
				<div id="dropdown-content">
					<a href="../../registrar/registrar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente
					<a href="../../registrar/registrar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="../../registrar/registrar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="../../registrar/registrar-especialidades.php"> <span class="material-symbols-outlined">school</span>Especialidades</a>
					<a href="../../registrar/registrar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="../../registrar/registrar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="../../registrar/registrar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="../../registrar/registrar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="../../registrar/registrar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="../../registrar/registrar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="../../registrar/registrar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="../../registrar/registrar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>
			</li>

			<li id="dropdown">
			<li id="elementosmenu">
				<a href="../modificar-seleccion.php"> <span class="material-symbols-outlined">edit</span>Modificar</a>
			</li>

			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">search</span>Buscar</a>
				<div id="dropdown-content">
					<a href="../../buscar/buscar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente</a>
					<a href="../../buscar/buscar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="../../buscar/buscar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="../../buscar/buscar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="../../buscar/buscar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="../../buscar/buscar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="../../buscar/buscar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="../../buscar/buscar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="../../buscar/buscar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="../../buscar/buscar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="../../buscar/buscar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>
			</li>
			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">visibility</span>Mostrar</a>
				<div id="dropdown-content">
					<a href="../../mostrar/mostrar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente</a>
					<a href="../../mostrar/mostrar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="../../mostrar/mostrar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="../../mostrar/mostrar-especialidades.php"> <span class="material-symbols-outlined">school</span>Especialidades</a>
					<a href="../../mostrar/mostrar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="../../mostrar/mostrar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="../../mostrar/mostrar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="../../mostrar/mostrar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="../../mostrar/mostrar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="../../mostrar/mostrar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="../../mostrar/mostrar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="../../mostrar/mostrar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
				</div>				
			</li>
			<li id="elementosmenu"><a href="../../../home-admin-ofertas.html"><span class="material-symbols-outlined"> paid</span>Modificar ofertas</a></li>
            <li id="elementosmenu"><a href="../../../home-admin-consultas.html"><span class="material-symbols-outlined">assignment_late</span>Consultas</a></li>
            <li id="elementosmenu"><a href="../../../home-modelorelacional.html"><span class="material-symbols-outlined">database</span>Modelo relacional</a></li>
            <li id="elementosmenu"><a href="../../../index.php"><span class="material-symbols-outlined">logout</span>Cerrar sesion</a> </li>
		</ul>
	<div id="contenido">
		<h3>Para borrar una prevision, rellene los datos del formulario a continuacion</h3>
	
	    <form action="borrar-submit.php" method="post">
		<input type="hidden" name="sender" value="prevision"/>
			<p>Nombre de prevision:
				<select name="nombreprevision">
				<option>---</option>
				<?php 
					$consulta = pg_query("select nombre from prevision") or die('Consulta fallida');
					while ($linea = pg_fetch_array($consulta)) {
						echo "<option>" . ucfirst($linea['nombre']) . "</option>";
					}
				?>
				</select>
			</p>
            <p><input type="submit" value="Borrar"> <input type="reset" value="Limpiar formulario"></p>
	    </form>
		<table>
			<tr>
				<th>
					Nombre
				</th>
				<th>
					Tipo
				</th>
			</tr>
			<?php 
				$consulta = pg_exec("select * from mostrar_prevision()") or die("Consulta fallida");
				while ($contenido = pg_fetch_assoc($consulta)){
					echo "<tr> 
						<td>".ucfirst($contenido['prevision'])."</td>
						<td>".ucfirst($contenido['tipo'])."</td>
						</tr>";
				}
			?>
		</table>
	</div>
	</body>

	<footer>Hecho por ...</footer>
</html>