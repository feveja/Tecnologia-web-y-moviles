<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../../css/home.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Registrar compra: admin</title>
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
		<?php 
			switch ($identificador) {
				case 'compra':
					$ejecucion = pg_exec("select Insertar_Comprar(
										'".$_POST['runpaciente']."',
										'".strtolower($_POST['nombrecomermed'])."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-compra.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-compra.php'</script>";
					}
					break;
				case 'contrato':
					$total = pg_fetch_row(pg_exec("select count(*) from contrato"));
					$total = $total[0]+1;
					$ejecucion = pg_exec("select Insertar_Contrato(".$total.",
										'".$_POST['fechainiciocontrato']."',
										'".$_POST['fechaterminocontrato']."',
										'".strtolower($_POST['textocontrato'])."',
										".$_POST['codigoempresafarmaceutica'].",
										".$_POST['codigofarmacia'].",
										'".$_POST['runsupervisor']."',
										'".$_POST['fechainiciosupervision']."',
										'".$_POST['fechaterminosupervision']."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-contrato.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-contrato.php'</script>";
					}
					break;
				case 'empresafarmaceutica':
					$total = pg_fetch_row(pg_exec("select count(*) from empresafarmaceutica"));
					$total = $total[0]+1;
					$ejecucion = pg_exec("select Insertar_EmpresaFarmaceutica(
										".$total.",
										'".strtolower($_POST['nombreempresafarmaceutica'])."',
										".$_POST['telefonoempresafarmaceutica']."
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-empresafarmaceutica.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-empresafarmaceutica.php'</script>";
					}
					break;
				case 'especialidades':
					$ejecucion = pg_exec("select Insertar_Especialidad(
										'".strtolower($_POST['nombreespecialidad'])."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-especialidades.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-especialidades.php'</script>";
					}
					break;
				case 'existencias':
					$ejecucion = pg_exec("select Insertar_ExisteEn(
										'".strtolower($_POST['nombrecomermed'])."',
										".$_POST['codigofarmacia'].",
										".$_POST['preciomed'].",
										".$_POST['cantidadmed']."
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-existencias.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-existencias.php'</script>";
					}
					break;
				case 'farmacia':
					$total = pg_fetch_row(pg_exec("select count(*) from farmacia"));
					$total = $total[0]+1;
					$ejecucion = pg_exec("select Insertar_Farmacia(
										".$total.",
										'".strtolower($_POST['nombrefarmacia'])."',
										".$_POST['telefonofarmacia'].",
										'".strtolower($_POST['direccionfarmacia'])."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-farmacia.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-farmacia.php'</script>";
					}
					break;
				case 'medicamento':
					$ejecucion = pg_exec("select Insertar_Medicamento(
										'".strtolower($_POST['nombrecomermed'])."',
										'".strtolower($_POST['formula'])."',
										".$_POST['codigoempresafarmaceutica']."
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-medicamento.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-medicamento.php'</script>";
					}
					break;
				case 'medico':
					$ejecucion = pg_exec("select Insertar_Medico(
										'".$_POST['runmedico']."',
										'".$_POST['fechanacimiento']."',
										".$_POST['aniosejerciendo'].",
										'".strtolower($_POST['nombre'])."',
										'".strtolower($_POST['apellido'])."',
										'".strtolower($_POST['especialidad'])."',
										'".strtolower($_POST['imagen'])."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-medico.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-medico.php'</script>";
					}
					break;
				case 'paciente':
					$total = pg_fetch_row(pg_exec("select count(*) from telefono"));
					$total = $total[0]+1;
					$ejecucion = pg_exec("select Insertar_Paciente(
										'".$_POST['run']."',
										'".$_POST['fechanac']."',
										'".strtolower($_POST['correo'])."',
										'".strtolower($_POST['nombre'])."',
										'".strtolower($_POST['apellido'])."',
										'".$_POST['fechainicioacargo']."',
										'".$_POST['fechaterminoacargo']."',
										'".strtolower($_POST['prevision'])."',
										'".$_POST['runmedico']."',
										".$total.",
										".$_POST['telefono'].",
										".$_POST['codigopostal'].",
										'".strtolower($_POST['calle'])."',
										".$_POST['numero'].",
										'".strtolower($_POST['comuna'])."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-paciente.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-paciente.php'</script>";
					}
					break;
				case 'prevision':
					$ejecucion = pg_exec("select Insertar_Prevision(
										'".strtolower($_POST['nombreprevision'])."',
										'".strtolower($_POST['tipoprevision'])."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-prevision.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-prevision.php'</script>";
					}
					break;
				case 'receta':
					$total = pg_fetch_row(pg_exec("select count(*) from receta"));
					$total = $total[0]+1;
					$ejecucion = pg_exec("select Insertar_Receta(
										".$total.",
										'".$_POST['fechareceta']."',
										'".strtolower($_POST['textoreceta'])."',
										'".$_POST['runpaciente']."',
										'".$_POST['runmedico']."',
										'".strtolower($_POST['nombrecomermed'])."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-receta.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-receta.php'</script>";
					}
					break;
				case 'supervisor':
					$ejecucion = pg_exec("select Insertar_Supervisor(
										'".$_POST['runsupervisor']."',
										'".strtolower($_POST['nombresupervisor'])."',
										'".strtolower($_POST['apellidosupervisor'])."'
										)");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='registrar-supervisor.php'</script>";
					}else{
						echo "<script>alert('Se ha registrado la entrada solicitada')</script>";
						echo "<script>window.location.href='registrar-supervisor.php'</script>";
					}
					break;
			}
		?>
	</div>
	</body>

	<footer>Hecho por ...</footer>
</html>