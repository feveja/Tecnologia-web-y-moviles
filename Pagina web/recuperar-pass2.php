<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="css/home.css"/>
        <link rel="stylesheet" type="text/CSS" href="css/login.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Farmacia Rayos X</title>	
		<?php 
		include_once("php/conectar.php");
		?>
	</head>
	<body>
		<img class="logo" src="images/logo.png">
		<h1>Recuperar contrase&ntilde;a</h1>
		<span class="material-symbols-outlined">key</span>
			<div id="contenido">
			<?php 
                $check_paciente = pg_exec("select * from paciente where run='".$_POST['user']."'");
                $check_supervisor = pg_exec("select * from supervisor where run='".$_POST['user']."'");
                if (pg_numrows($check_supervisor) > 0) {
                    echo "<script>alert('Contacte un supervisor para recuperar su contraseña')</script>";
                    echo "<script>history.back()</script>";
                } elseif (pg_numrows($check_paciente) > 0) {
                    echo "
                    Ingrese toda la informacion solicitada
                    <form action='recuperar-pass-check.php' method='post'>
		            <p>RUN: <input type='text' name='run' value=".$_POST['user']." readonly> Fecha de nacimiento: <input type='date' name='fechanac'> Correo: <input type='text' name='correo'></p>
		            <p>Nombre: <input type='text' name='nombre'> Apellido: <input type='text' name='apellido'></p>
		            <p>Fecha inicio de medico a cargo: <input type='date' name='fechainicioacargo'></p>
		            <p>Fecha termino de medico a cargo: <input type='date' name='fechaterminoacargo'></p>
		            <p>Prevision: <input type='text' name='prevision'> 
			        RUN medico a cargo:<input type='text' name='runmedico'> </p>
		            Telefono:<input type='number' name='telefono'></p>
		            <p>Codigo postal: <input type='number' name='codigopostal'> Calle: <input type='text' name='calle'></p>
		            <p>Numero calle: <input type='number' name='numero'> Comuna: <input type='text' name='comuna'></p>
		            <p><input type='submit' value='Continuar'> <input type='reset' value='Limpiar formulario'></p>
                    ";
                } else {
                    echo "<script>alert('RUN no registrado')</script>";
                    echo "<script>history.back()</script>";
                }
            ?>
			</div>
	</body>
</html>