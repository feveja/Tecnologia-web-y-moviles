<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../../css/home.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Resultados de busqueda: admin</title>
		<?php 
		include_once("../../php/conectar.php");
		$identificador = $_POST['sender'];
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
					<a href="buscar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente</a>
					<a href="buscar-receta.php"> <span class="material-symbols-outlined">prescriptions</span>Receta</a>
					<a href="buscar-medico.php"> <span class="material-symbols-outlined">medical_information</span>Medico</a>
					<a href="buscar-compra.php"> <span class="material-symbols-outlined">sell</span>Compra</a>
					<a href="buscar-supervisor.php"> <span class="material-symbols-outlined">verified_user</span>Supervisor</a>
					<a href="buscar-prevision.php"> <span class="material-symbols-outlined">health_and_safety</span>Prevision</a>
					<a href="buscar-medicamento.php"> <span class="material-symbols-outlined">medication</span>Medicamento</a>
					<a href="buscar-farmacia.php"> <span class="material-symbols-outlined">local_pharmacy</span>Farmacia</a>
					<a href="buscar-existencias.php"> <span class="material-symbols-outlined">inventory</span>Existencias</a>
					<a href="buscar-empresafarmaceutica.php"> <span class="material-symbols-outlined">vaccines</span>Empresa farmaceutica</a>
					<a href="buscar-contrato.php"> <span class="material-symbols-outlined">contract</span>Contrato</a>
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
		<h3>Resultados busqueda</h3>
		<table>
        <?php switch ($identificador) {
			case 'comprar':
				$consulta = pg_exec("select * from buscar_comprar('".$_POST['runpaciente']."')") or die("Consulta fallida");
				echo "<tr>
					<th>
						RUN Paciente
					</th>
					<th>
						Nombre comercial medicamento
					</th>
					</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".$contenido['runpaciente']."</td>
							<td>".ucfirst($contenido['nombrecomermed'])."</td>
							</tr>";
					}
				break;
			case 'contrato':
				$consulta = pg_exec("select * from buscar_contratos(".$_POST['codigocontrato'].")") or die("Consulta fallida");
				echo "<tr>
				<th>
					Codigo contrato
				</th>
				<th>
					Fecha inicio contrato
				</th>
				<th>
					Fecha termino contrato
				</th>
				<th>
					Contenido contrato
				</th>
				<th>
					(Codigo) empresa farmaceutica
				</th>
				<th>
					(Codigo) farmacia
				</th>
				<th>
					RUN Supervisor
				</th>
				<th>
					Fecha inicio supervision
				</th>
				<th>
					Fecha termino supervision
				</th>
			</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						$nombrefarmacia = pg_fetch_assoc(pg_exec("select nombre from farmacia where codigo=".$contenido['codigofarmacia'].""))['nombre'];
						$nombreempresa = pg_fetch_assoc(pg_exec("select nombre from empresafarmaceutica where codigo=".$contenido['codigoefarmaceutica'].""))['nombre'];
						echo "<tr> 
							<td>".$contenido['codigocontrato']."</td>
							<td>".date("d-m-Y", strtotime($contenido['fechainicio']))."</td>
							<td>".date("d-m-Y", strtotime($contenido['fechatermino']))."</td>
							<td>".ucfirst($contenido['contenidocontrato'])."</td>
							<td>(".$contenido['codigoefarmaceutica'].") ".ucwords($nombreempresa)."</td>
							<td>(".$contenido['codigofarmacia'].") ".ucwords($nombrefarmacia)."</td>
							<td>".$contenido['runsupervisor']."</td>
							<td>".date("d-m-Y", strtotime($contenido['fechainiciosupervision']))."</td>
							<td>".date("d-m-Y", strtotime($contenido['fechaterminosupervision']))."</td>
							</tr>";
					}
				break;
			case 'empresafarmaceutica':
				$consulta = pg_exec("select * from buscar_empresafarmaceutica('".$_POST['codigoempresafarmaceutica']."')") or die("Consulta fallida");
				echo "<tr>
				<th>
					Codigo
				</th>
				<th>
					Nombre
				</th>
				<th>
					Telefono
				</th>
				</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".$contenido['codigo']."</td>
							<td>".ucfirst($contenido['nombre'])."</td>
							<td>".$contenido['telefono']."</td>
							</tr>";
					}
				break;
			case 'existencias':
				$consulta = pg_exec("select * from buscar_existeen('".strtolower($_POST['nombrecomermed'])."')") or die("Consulta fallida");
				echo "<tr>
				<th>
					Nombre comercial medicamento
				</th>
				<th>
					(Codigo) Farmacia
				</th>
				<th>
					Precio medicamento
				</th>
				<th>
					Cantidad medicamento
				</th>
				<th>
					Precio original
				</th>
				<th>
					Fecha inicio oferta
				</th>
				<th>
					Fecha termino oferta
				</th>
			</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
					$nombre = $nombre = pg_fetch_assoc(pg_exec("select nombre from farmacia where codigo=".$contenido['codigofarmacia'].""))['nombre'];						
					echo "<tr> 
						<td>".ucfirst($contenido['nombrecomermed'])."</td>
						<td>(".$contenido['codigofarmacia'].") ".ucwords($nombre)."</td>
						<td>".$contenido['preciomed']."</td>
						<td>".$contenido['cantidadmed']."</td>";
					if ($contenido['preciooriginal'] == null) {
						echo "<td>No hay registros</td>";
					}else {
						echo "<td>".$contenido['preciooriginal']."</td>";
					}
					if ($contenido['fechainiciooferta'] == null) {
						echo "<td>No hay registros</td>";
					}else {
						echo "<td>".date("d-m-Y", strtotime($contenido['fechainiciooferta']))."</td>";
					}
					if ($contenido['fechafinoferta'] == null) {
						echo "<td>No hay registros</td>";
					} else {
						echo "<td>".date("d-m-Y", strtotime($contenido['fechafinoferta']))."</td>";
					}
					echo "</tr>";
				}
				break;
			case 'farmacia':
				$consulta = pg_exec("select * from buscar_farmacia('".$_POST['codigofarmacia']."')") or die("Consulta fallida");
				echo "<tr>
				<th>
					Codigo
				</th>
				<th>
					Nombre
				</th>
				<th>
					Telefono
				</th>
				<th>
					Direccion
				</th>
				</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".$contenido['codigo']."</td>
							<td>".ucwords($contenido['nombre'])."</td>
							<td>".$contenido['telefono']."</td>
							<td>".ucwords($contenido['direccion'])."</td>
							</tr>";
					}
				break;
			case 'medicamento':
				$consulta = pg_exec("
				select f.nombrecomercial, f.formula, f.codigoefarmaceutica, t.nombre 
				from buscar_medicamento('".strtolower($_POST['nombrecomermed'])."') as f, empresafarmaceutica as t 
				where f.codigoefarmaceutica = t.codigo;") or die("Consulta fallida");
				echo "<tr>
				<th>
					Nombre Comercial
				</th>
				<th>
					Formula
				</th>
				<th>
					Codigo empresa farmaceutica
				</th>
				<th>
					Nombre empresa farmaceutica
				</th>
				</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".ucwords($contenido['nombrecomercial'])."</td>
							<td>".strtoupper($contenido['formula'])."</td>
							<td>".$contenido['codigoefarmaceutica']."</td>
							<td>".ucwords($contenido['nombre'])."</td>
							</tr>";
					}
				break;
			case 'medico':
				$consulta = pg_exec("select * from buscar_medico('".$_POST['runmedico']."')") or die("Consulta fallida");
				echo "<tr>
				<th>
					RUN
				</th>
				<th>
					Nombre
				</th>
				<th>
					Apellido
				</th>
				<th>
					Fecha de nacimiento
				</th>
				<th>
					Años ejerciendo
				</th>
				<th>
					Especialidad
				</th>
				<th>
					Imagen
				</th>
				</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".$contenido['run']."</td>
							<td>".ucwords($contenido['nombre'])."</td>
							<td>".ucwords($contenido['apellido'])."</td>
							<td>".date("d-m-Y", strtotime($contenido['fechanacimiento']))."</td>
							<td>".$contenido['aniosejerciendo']."A&ntilde;os</td>
							<td>".ucwords($contenido['nombre_especialidad'])."</td>
							<td><img src='".$contenido['imagen']."' class='avatar'></td>
							</tr>";
					}
				break;
			case 'paciente':
				$consulta = pg_exec("select * from buscar_paciente('".$_POST['runpaciente']."')") or die("Consulta fallida");
				echo "<tr>
				<th>
					RUN
				</th>
				<th>
					Nombre
				</th>
				<th>
					Apellido
				</th>
				<th>
					Fecha de nacimiento
				</th>
				<th>
					Correo electronico
				</th>
				<th>
					Codigo de telefono en sistema
				</th>
				<th>
					Numero de telefono
				</th>
				<th>
					Nombre prevision
				</th>
				<th>
					RUN del medico a cargo
				</th>
				<th>
					Fecha de inicio de medico a cargo
				</th>
				<th>
					Fecha de termino de medico a cargo
				</th>
				<th>
					Direccion
				</th>
				</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".$contenido['run']."</td>
							<td>".ucwords($contenido['nombre'])."</td>
							<td>".ucwords($contenido['apellido'])."</td>
							<td>".date("d-m-Y", strtotime($contenido['fechanacimiento']))."</td>
							<td>".$contenido['correo']."</td>
							<td>".$contenido['codigo_telefono']."</td>
							<td>".$contenido['numero_telefono']."</td>
							<td>".ucwords($contenido['nombreprevision'])."</td>
							<td>".$contenido['runmedico']."</td>
							<td>".date("d-m-Y", strtotime($contenido['fechainicioacargo']))."</td>
							<td>".date("d-m-Y", strtotime($contenido['fechaterminoacargo']))."</td>
							<td>".ucwords($contenido['calle_direccion']).", ".$contenido['numero_direccion'].", ".ucwords($contenido['comuna_direccion'])." ".$contenido['codigopostal_direccion']."</td>
							</tr>";
					}
				break;
			case 'prevision':
				$consulta = pg_exec("select * from buscar_prevision('".strtolower($_POST['nombreprevision'])."')") or die("Consulta fallida");
				echo "<tr>
				<th>
					Nombre
				</th>
				<th>
					Tipo
				</th>
				</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".ucwords($contenido['nombre'])."</td>
							<td>".ucwords($contenido['tipo'])."</td>
							</tr>";
					}
				break;
			case 'receta':
				$consulta = pg_exec("select * from buscar_receta('".$_POST['codigoreceta']."')") or die("Consulta fallida");
				echo "<tr>
				<th>
					Codigo
				</th>
				<th>
					Fecha
				</th>
				<th>
					RUN Paciente
				</th>
				<th>
					RUN Medico
				</th>
				<th>
					Nombre comercial del medicamento
				</th>
				<th>
					Contenido
				</th>
				</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".$contenido['codigo']."</td>
							<td>".date("d-m-Y", strtotime($contenido['fecha']))."</td>
							<td>".$contenido['runpaciente']."</td>
							<td>".$contenido['runmedico']."</td>
							<td>".ucwords($contenido['nombrecomermed'])."</td>
							<td>".ucfirst($contenido['texto'])."</td>
							</tr>";
					}
				break;
			case 'supervisor':
				$consulta = pg_exec("select * from buscar_supervisor('".$_POST['runsupervisor']."')") or die("Consulta fallida");
				echo "<tr>
				<th>
					RUN
				</th>
				<th>
					Nombre
				</th>
				<th>
					Apellido
				</th>
				</tr>";
					while ($contenido = pg_fetch_assoc($consulta)){
						echo "<tr> 
							<td>".$contenido['run']."</td>
							<td>".ucfirst($contenido['nombre'])."</td>
							<td>".ucfirst($contenido['apellido'])."</td>
							</tr>";
					}
				break;
		} ?>
		</table>
	</div>
	</body>

	<footer>Hecho por ...</footer>
</html>