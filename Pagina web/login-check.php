<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/CSS" href="css/login.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<title>Farmacia Rayos X</title>	
		<?php 
		include_once("php/conectar.php");
		?>
        <script language="Javascript">
            function redireccion_login(pagina) {
                if (pagina == 1) {
                    window.location.href='home-admin.html';
                } else {
                    window.location.href='index.php'
                }
            }
            function alerta_usuario() {
                alert('Usuario y/o contraseña incorrectos');
            }
            function alerta_pass() {
                alert('Usuario y/o contraseña incorrectos');
            }
        </script>
	</head>
	<body>
		<img class="logo" src="images/logo.png">
		<h1>Iniciar sesion</h1>
		<span class="material-symbols-outlined">login</span>
		<div class="cajas">
			<?php 
                $user = $_POST['user'];
                $pass = $_POST['pwd'];

                $check_supervisor = pg_exec("select * from supervisor where run='$user'");
                $check_paciente = pg_exec("select * from paciente where run='$user'");
                if (pg_numrows($check_supervisor) > 0 and $_POST['tipo'] == 'Supervisor') {
                    $check_pass = pg_exec("select * from supervisor where (run='$user' and pass=md5('$pass'))");
                    if (pg_numrows($check_pass) > 0) {
                        echo "<script>redireccion_login(1)</script>";
                    }else {
                        echo "<script>alerta_pass()</script>";
                    }
                } elseif (pg_numrows($check_paciente) > 0 and $_POST['tipo'] == 'Paciente') {
                    $check_pass = pg_exec("select * from paciente where (run='$user' and pass=md5('$pass'))");
                    if (pg_numrows($check_pass) > 0) {
                        session_start();
                        $_SESSION['POST'] = $_POST;
                        header('Location: home-user.php');
                        // echo "<script>redireccion_login(2)</script>";
                    }else {
                        echo "<script>alerta_pass()</script>";
                        echo "<script>redireccion_login(3)</script>";
                    }
                }else {
                    echo "<script>alerta_usuario()</script>";
                    echo "<script>redireccion_login(3)</script>";
                }
            ?>
		</div>
	</body>
</html>