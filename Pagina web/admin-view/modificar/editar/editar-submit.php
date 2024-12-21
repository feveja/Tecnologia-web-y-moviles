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
		<?php 
			$identificador = $_POST['sender'];
			switch ($identificador) {
				case 'contrato':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'fechainicio':
							$parametro=1;
							break;
						case 'fechatermino':
							$parametro=2;
							break;
						case 'contenidocontrato':
							$parametro=3;
							break;
					}
					$ejecucion = pg_exec("select modificar_contrato(".$parametro.",".$_POST['codigocontrato'].",'".strtolower($_POST['contenidonuevo'])."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-contrato.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-contrato.php'</script>";
					}
					break;
				case 'direccion':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'calle':
							$parametro = 1;
							break;
						case 'numero':
							$parametro = 2;
							break;
						case 'comuna':
							$parametro = 3;
							break;
					}
					$ejecucion = pg_exec("select modificar_direccion(".$parametro.",".$_POST['codigo'].",'".strtolower($_POST['contenidonuevo'])."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-direccion.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-direccion.php'</script>";
					}
					break;
				case 'empresafarmaceutica':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'nombre':
							$parametro = 1;
							break;
						case 'telefono':
							$parametro = 2;
							break;
					}
					$ejecucion = pg_exec("select modificar_empresafarmaceutica(".$parametro.",".$_POST['codigo'].",'".$_POST['contenidonuevo']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-empresafarmaceutica.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-empresafarmaceutica.php'</script>";
					}
					break;
				case 'farmacia':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'nombre':
							$parametro = 1;
							break;
						case 'telefono':
							$parametro = 2;
							break;
						case 'direccion':
							$parametro = 3;
							break;
					}
					$ejecucion = pg_exec("select modificar_farmacia(".$parametro.",".$_POST['codigo'].",'".$_POST['contenidonuevo']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-farmacia.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-farmacia.php'</script>";
					}
					break;
				case 'fechasup':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'fechainiciosupervision':
							$parametro = 1;
							break;
						case 'fechaterminosupervision':
							$parametro = 2;
							break;
					}
					$ejecucion = pg_exec("select modificar_fechasup(".$parametro.",'".$_POST['runsupervisor']."','".$_POST['contenidonuevo']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-fechasup.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-fechasup.php'</script>";
					}
					break;
				case 'medico':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'fechanacimiento':
							$parametro = 1;
							break;
						case 'aniosejerciendo':
							$parametro = 2;
							break;
						case 'nombre':
							$parametro = 3;
							break;
						case 'apellido':
							$parametro = 4;
							break;
						case 'imagen':
							$parametro = 5;
					}
					$ejecucion = pg_exec("select modificar_medico(".$parametro.",'".$_POST['codigo']."','".$_POST['contenidonuevo']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-medico.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-medico.php'</script>";
					}
					break;
				case 'paciente':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'fechanacimiento':
							$parametro = 1;
							break;
						case 'correo':
							$parametro = 2;
							break;
						case 'nombre':
							$parametro = 3;
							break;
						case 'apellido':
							$parametro = 4;
							break;
						case 'fechainicioacargo':
							$parametro = 5;
							break;
						case 'fechaterminoacargo':
							$parametro = 6;
							break;
						case 'pass':
							$parametro = 7;
							break;
					}
					$ejecucion = pg_exec("select modificar_paciente(".$parametro.",'".$_POST['codigo']."','".$_POST['contenidonuevo']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-paciente.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-paciente.php'</script>";
					}
					break;
				case 'prevision':
					$parametro = $_POST['atributo'];
					switch ($parametro) {
						case 'tipo':
							$parametro = 1;
							break;
					}
					$ejecucion = pg_exec("select modificar_prevision(".$parametro.",'".$_POST['codigo']."','".$_POST['contenidonuevo']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-prevision.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-prevision.php'</script>";
					}
					break;
				case 'receta':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'fecha':
							$parametro = 1;
							break;
						case 'texto':
							$parametro = 2;
							break;
					}
					$ejecucion = pg_exec("select modificar_receta(".$parametro.",".$_POST['codigo'].",'".$_POST['contenidonuevo']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-receta.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-receta.php'</script>";
					}
					break;
				case 'supervisor':
					$parametro = $_POST['atributo'];
					switch ($parametro){
						case 'nombre':
							$parametro = 1;
							break;
						case 'apellido':
							$parametro = 2;
							break;
						case 'pass':
							$parametro = 3;
							break;
					}
					$ejecucion = pg_exec("select modificar_supervisor(".$parametro.",'".$_POST['codigo']."','".$_POST['contenidonuevo']."')");
					if ($ejecucion == false) {
						echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
						echo "<script>window.location.href='editar-supervisor.php'</script>";
					}else{
						echo "<script>alert('Se ha editado la entrada solicitada')</script>";
						echo "<script>window.location.href='editar-supervisor.php'</script>";
					}
					break;
			}
		?>
	</body>

	<footer>Hecho por ...</footer>
</html>