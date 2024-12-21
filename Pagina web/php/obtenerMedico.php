<?php
    //conectamos con la base de datos
    include_once('conectar.php');
    //definimos la consulta
    $consulta = pg_query("select medico.run, medico.nombre, medico.apellido from medico, paciente where paciente.run='".$_POST['paciente']."' and paciente.runmedico=medico.run; ") or die('Consulta fallida');
    //guardamos el resultado en un array donde clave 'result' sera un array con los resultados de la consulta
    $resultado['result'] = pg_fetch_array($consulta);
    //convertimos a json para ser utilizado con ajax
    echo json_encode($resultado);

?>