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
                $informacion_sistema = pg_exec("select * from buscar_paciente('".$_POST['run']."')") or die("Consulta fallida");
                $informacion_sistema = pg_fetch_assoc($informacion_sistema);
                if (
                    $informacion_sistema['run'] == $_POST['run']
                    and
                    $informacion_sistema['fechanacimiento'] == $_POST['fechanac']
                    and
                    $informacion_sistema['correo'] == $_POST['correo']
                    and
                    $informacion_sistema['nombre'] == $_POST['nombre']
                    and
                    $informacion_sistema['apellido'] == $_POST['apellido']
                    and
                    $informacion_sistema['fechainicioacargo'] == $_POST['fechainicioacargo']
                    and
                    $informacion_sistema['fechaterminoacargo'] == $_POST['fechaterminoacargo']
                    and
                    $informacion_sistema['nombreprevision'] == $_POST['prevision']
                    and
                    $informacion_sistema['runmedico'] == $_POST['runmedico']
                    and
                    $informacion_sistema['numero_telefono'] == $_POST['telefono']
                    and
                    $informacion_sistema['codigopostal_direccion'] == $_POST['codigopostal']
                    and
                    $informacion_sistema['calle_direccion'] == $_POST['calle']
                    and
                    $informacion_sistema['numero_direccion'] == $_POST['numero']
                    and
                    $informacion_sistema['comuna_direccion'] == $_POST['comuna']
                ) {
                    $ejecucion = pg_exec("select modificar_paciente(7,'".$_POST['run']."','000')");
                    if ($ejecucion == false) {
                        echo "<script language='Javascript'>alert('Algo ha salido mal')</script>";
                        echo "<script>history.back()</script>";
                    }else{
                        echo "<script>alert('Se ha restablecido la contraseña, debera iniciar sesion nuevamente con la clave provisoria 000')</script>";
                        echo "<script>window.location.href='index.php'</script>";
                    }
                }else {
                    echo "<script>alert('Los datos ingresados no son correctos, intente nuevamente')</script>";
                	echo "<script>history.back()</script>";
                }
            ?>
			</div>
	</body>
</html>