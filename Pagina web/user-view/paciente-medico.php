<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../css/user.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Mi medico: user</title>
		<?php include_once("../php/conectar.php");
			$usuario_actual=$_GET['id'];
		?>
	</head>
	<body>
		<img src="../images/logo.png" class="logo">
		<ul id="menuprincipal">
			<li id="elementosmenu"><a href=<?php echo "../home-user.php?id=".$usuario_actual?>> <span class="material-symbols-outlined">home</span>Inicio</a></li>
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
				echo "<a href='paciente-cambiar-pass.php?id=".$usuario_actual."'> <span class='material-symbols-outlined'>key</span>Cambio de contrase&ntilde;a</a>"
				?>
			</li>
			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">search</span>Buscar</a>
				<div id="dropdown-content">
				<?php 
					echo 
					"<a href='paciente-ficha.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>patient_list</span> Mi ficha de paciente</a>
					<a href='paciente-recetas.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>prescriptions</span>Mis recetas</a>
					<a href='paciente-medico.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>medical_information</span>Mi medico</a>
					<a href='paciente-compras.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>sell</span>Mis compras</a>
					<a href='paciente-prevision.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>health_and_safety</span>Mi prevision</a>
					<a href='paciente-medicamentos.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>medication</span>Medicamentos</a>
					<a href='paciente-farmacias.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>local_pharmacy</span>Farmacias</a>
					<a href='paciente-existencias.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>inventory</span>Existencias de medicamentos</a>
					<a href='paciente-empresasfarmaceuticas.php?id=".$usuario_actual."'><span class='material-symbols-outlined'>vaccines</span>Empresa farmaceutica</a>
					"
				?>
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
			<li id="elementosmenu"><a href="../index.php"> <span class="material-symbols-outlined">logout</span>Cerrar sesion</a> </li>
		</ul>
	<div id="contenido">	
		<h3>Informacion medico a cargo</h3>
        <div id="contenidofichapaciente">
            <h5>Datos medico a cargo</h5>
			<?php
			$consulta = pg_exec("select tabla.* from mostrar_medicos() as tabla, paciente as p where p.run='".$usuario_actual."' and p.runmedico=tabla.run;");
			$imagen = pg_exec("select imagen from medico as m, paciente as p where p.run='".$usuario_actual."' and p.runmedico=m.run");
			$imagen = pg_fetch_assoc($imagen);
			echo "<img src='".$imagen['imagen']."' class='avatar'>";
            while ($contenido=pg_fetch_assoc($consulta)) {
			echo "<p>RUN: ".$contenido['run']." Fecha de Nacimiento: ".$contenido['fechanacimiento']."</p>
            <p>Nombre: ".ucfirst($contenido['nombre'])." Apellido: ".ucfirst($contenido['apellido'])."  </p>
            <h5>Informacion profesional</h5>
            <p>A&ntilde;os ejerciendo: ".$contenido['aniosejerciendo']." Especialidad: ".ucfirst($contenido['nombre_especialidad'])."</p>";
			}
			?>
			</div>
    </div>
	</body>

	<footer>Hecho por ...</footer>
</html>