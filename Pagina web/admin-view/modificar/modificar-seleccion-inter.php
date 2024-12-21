<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../../css/home.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Modificar datos: admin</title>
		<?php 
		include_once('../../php/conectar.php');
		$identificador_editar = $_POST['editar'];
		$identificador_borrar = $_POST['borrar'];
		?>
		<script language="Javascript">
			function redireccionar_pagina(pagina) {
				switch (pagina) {
					case 'editarcontrato':
						window.location.href="editar/editar-contrato.php";
						break;
					case 'editardireccion':
						window.location.href="editar/editar-direccion.php";
						break;
					case 'editarempresafarmaceutica':
						window.location.href="editar/editar-empresafarmaceutica.php";
						break;
					case 'editarfarmacia':
						window.location.href="editar/editar-farmacia.php";
						break;
					case 'editarfechasup':
						window.location.href="editar/editar-fechasup.php";
						break;
					case 'editarmedico':
						window.location.href="editar/editar-medico.php";
						break;
					case 'editarpaciente':
						window.location.href="editar/editar-paciente.php";
						break;
					case 'editarprevision':
						window.location.href="editar/editar-prevision.php";
						break;
					case 'editarreceta':
						window.location.href="editar/editar-receta.php";
						break;
					case 'editarsupervisor':
						window.location.href="editar/editar-supervisor.php";
						break;
					case 'borrarcomprar':
						window.location.href="borrar/borrar-comprar.php";
						break;
					case 'borrarcontrato':
						window.location.href="borrar/borrar-contrato.php";
						break;
					case 'borrarempresafarmaceutica':
						window.location.href="borrar/borrar-empresafarmaceutica.php";
						break;
					case 'borrarespecialidad':
						window.location.href="borrar/borrar-especialidad.php";
						break;
					case 'borrarexisteen':
						window.location.href="borrar/borrar-existeen.php";
						break;
					case 'borrarfarmacia':
						window.location.href="borrar/borrar-farmacia.php";
						break;
					case 'borrarmedicamento':
						window.location.href="borrar/borrar-medicamento.php";
						break;
					case 'borrarmedico':
						window.location.href="borrar/borrar-medico.php";
						break;
					case 'borrarpaciente':
						window.location.href="borrar/borrar-paciente.php";
						break;
					case 'borrarprevision':
						window.location.href="borrar/borrar-prevision.php";
						break;
					case 'borrarreceta':
						window.location.href="borrar/borrar-receta.php";
						break;
					case 'borrarsupervisor':
						window.location.href="borrar/borrar-supervisor.php";
						break;
				}
			}
		</script>
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
				<a href="modificar-seleccion.php"> <span class="material-symbols-outlined">edit</span>Modificar</a>
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
		<?php 
		if ($identificador_editar != NULL and $identificador_editar != "---") {
			switch ($identificador_editar) {
				case 'contrato':
					echo "<script>redireccionar_pagina('editarcontrato')</script>";
					break;
				case 'direccion':
					echo "<script>redireccionar_pagina('editardireccion')</script>";
					break;
				case 'empresafarmaceutica':
					echo "<script>redireccionar_pagina('editarempresafarmaceutica')</script>";
					break;
				case 'farmacia':
					echo "<script>redireccionar_pagina('editarfarmacia')</script>";
					break;
				case 'fechasup':
					echo "<script>redireccionar_pagina('editarfechasup')</script>";
					break;
				case 'medico':
					echo "<script>redireccionar_pagina('editarmedico')</script>";
					break;
				case 'paciente':
					echo "<script>redireccionar_pagina('editarpaciente')</script>";
					break;
				case 'prevision':
					echo "<script>redireccionar_pagina('editarprevision')</script>";
					break;
				case 'receta':
					echo "<script>redireccionar_pagina('editarreceta')</script>";
					break;
				case 'supervisor':
					echo "<script>redireccionar_pagina('editarsupervisor')</script>";
					break;
			}
		} elseif ($identificador_borrar != NULL and $identificador_borrar != "---") {
			switch ($identificador_borrar) {
				case 'comprar':
					echo "<script>redireccionar_pagina('borrarcomprar')</script>";
					break;
				case 'contrato':
					echo "<script>redireccionar_pagina('borrarcontrato')</script>";
					break;
				case 'empresafarmaceutica':
					echo "<script>redireccionar_pagina('borrarempresafarmaceutica')</script>";
					break;
				case 'especialidad':
					echo "<script>redireccionar_pagina('borrarespecialidad')</script>";
					break;
				case 'existeen':
					echo "<script>redireccionar_pagina('borrarexisteen')</script>";
					break;
				case 'farmacia':
					echo "<script>redireccionar_pagina('borrarfarmacia')</script>";
					break;
				case 'medicamento':
					echo "<script>redireccionar_pagina('borrarmedicamento')</script>";
					break;
				case 'medico':
					echo "<script>redireccionar_pagina('borrarmedico')</script>";
					break;
				case 'paciente':
					echo "<script>redireccionar_pagina('borrarpaciente')</script>";
					break;
				case 'prevision':
					echo "<script>redireccionar_pagina('borrarprevision')</script>";
					break;
				case 'receta':
					echo "<script>redireccionar_pagina('borrarreceta')</script>";
					break;
				case 'supervisor':
					echo "<script>redireccionar_pagina('borrarsupervisor')</script>";
					break;

			}
		} else{
			echo "<script language='Javascript'>alert('Debe seleccionar alguna opcion')</script>";
			echo "<script language='Javascript'>window.location.href='modificar-seleccion.php'</script>";
		}
		?>
	</div>
	</body>

	<footer>Hecho por ...</footer>
</html>