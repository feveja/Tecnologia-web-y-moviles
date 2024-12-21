<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="../../../css/home.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Editar: admin</title>
		<?php include_once('../../../php/conectar.php')?>
	</head>
	<body>
		<img src="../../../images/logo.png" class="logo">
		<ul id="menuprincipal">
			<li id="elementosmenu"><a href="../../../home-admin.html"> <span class="material-symbols-outlined">home</span>Inicio</a></li>
			<li id="dropdown">
				<a href="javascript:void(0)" id="dropbtn"> <span class="material-symbols-outlined">app_registration</span>Registrar</a>
				<div id="dropdown-content">
					<a href="../../registrar/registrar-paciente.php"> <span class="material-symbols-outlined">patient_list</span>Paciente</a>
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
		<?php 
			$identificador = $_POST['sender'];
			switch ($identificador) {
				case 'comprar':
					$ejecucion = pg_exec("select borrar_comprar('".$_POST['runpaciente']."','".strtolower($_POST['nombrecomermed'])."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-comprar.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (".$_POST['runpaciente']." ".$_POST['nombrecomermed'].")')</script>";
						echo "<script>window.location.href='borrar-comprar.php'</script>";
					}
					break;
				case 'contrato':
					$ejecucion = pg_exec("select borrar_contrato(".$_POST['codigocontrato'].",'".$_POST['runsupervisor']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-contrato.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (Codigo contrato".$_POST['codigocontrato']." RUN Supervisor".$_POST['runsupervisor'].")')</script>";
						echo "<script>window.location.href='borrar-contrato.php'</script>";
					}
					break;
				case 'empresafarmaceutica':
					$ejecucion = pg_exec("select borrar_empresafarmaceutica(".$_POST['codigo'].")");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-empresafarmaceutica.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (Codigo ".$_POST['codigo'].")')</script>";
						echo "<script>window.location.href='borrar-empresafarmaceutica.php'</script>";
					}
					break;
				case 'especialidad':
					$ejecucion = pg_exec("select borrar_especialidad('".strtolower($_POST['nombreespecialidad'])."')");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-especialidad.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (Nombre comercial del medicamento ".$_POST['nombreespecialidad'].")')</script>";
						echo "<script>window.location.href='borrar-especialidad.php'</script>";
					}
					break;
				case 'existeen':
					$ejecucion = pg_exec("select borrar_existeen('".strtolower($_POST['nombrecomercialmedicamento'])."',".$_POST['codigofarmacia'].")");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-existeen.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (Nombre comercial medicamento ".$_POST['nombrecomercialmedicamento']." Codigo de farmacia ".$_POST['codigofarmacia'].")')</script>";
						echo "<script>window.location.href='borrar-existeen.php'</script>";
					}
					break;
				case 'farmacia':
					$ejecucion = pg_exec("select borrar_farmacia(".$_POST['codigofarmacia'].")");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-farmacia.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (Codigo de farmacia ".$_POST['codigofarmacia'].")')</script>";
						echo "<script>window.location.href='borrar-farmacia.php'</script>";
					}
					break;
				case 'medicamento':
					$ejecucion = pg_exec("select borrar_medicamento('".strtolower($_POST['nombrecomercialmedicamento'])."')");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-medicamento.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (Nombre comercial del medicamento ".$_POST['nombrecomercialmedicamento'].")')</script>";
						echo "<script>window.location.href='borrar-medicamento.php'</script>";
					}
					break;
				case 'medico':
					$ejecucion = pg_exec("select borrar_medico('".$_POST['runmedico']."')");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-medico.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (RUN Medico ".$_POST['runmedico'].")')</script>";
						echo "<script>window.location.href='borrar-medico.php'</script>";
					}
					break;
				case 'paciente':
					$ejecucion = pg_exec("select borrar_paciente('".$_POST['runpaciente']."')");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-paciente.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (RUN Paciente ".$_POST['runpaciente'].")')</script>";
						echo "<script>window.location.href='borrar-paciente.php'</script>";
					}
					break;
				case 'prevision':
					$ejecucion = pg_exec("select borrar_prevision('".strtolower($_POST['nombreprevision'])."')");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-prevision.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (Nombre prevision ".$_POST['nombreprevision'].")')</script>";
						echo "<script>window.location.href='borrar-prevision.php'</script>";
					}
					break;
				case 'receta':
					$ejecucion = pg_exec("select borrar_receta(".$_POST['codigoreceta'].")");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-receta.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (Codigo de receta ".$_POST['codigoreceta'].")')</script>";
						echo "<script>window.location.href='borrar-receta.php'</script>";
					}
					break;
				case 'supervisor':
					$ejecucion = pg_exec("select borrar_supervisor('".$_POST['runsupervisor']."')");
					
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='borrar-supervisor.php'</script>";
					}else{
						echo "<script>alert('Se ha borrado la entrada solicitada (RUN Supervisor ".$_POST['runsupervisor'].")')</script>";
						echo "<script>window.location.href='borrar-supervisor.php'</script>";
					}
					break;
			}
		?>
		</div>
	</body>

	<footer>Hecho por ...</footer>
</html>