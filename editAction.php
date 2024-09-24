<?php
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $titulo_proyecto = mysqli_real_escape_string($mysqli, $_POST['titulo_proyecto']);
    $descripcion = mysqli_real_escape_string($mysqli, $_POST['descripcion']);
    $linku = mysqli_real_escape_string($mysqli, $_POST['linku']);
	$fecha_creacion = mysqli_real_escape_string($mysqli, $_POST['fecha_creacion']);
    
    if (empty($titulo_proyecto) || empty($descripcion) || empty($linku) || empty($fecha_creacion)) {
        if (empty($titulo_proyecto)) {
            echo "<font color='red'>El campo del título está vacío.</font><br/>";
        }
        
        if (empty($descripcion)) {
            echo "<font color='red'>El campo de descripción está vacío.</font><br/>";
        }
        
        if (empty($linku)) {
            echo "<font color='red'>El campo del enlace está vacío.</font><br/>";
        }
		if (empty($fecha_creacion)) {
            echo "<font color='red'>El campo del título está vacío.</font><br/>";
        }
    } else {
        $result = mysqli_query($mysqli, "UPDATE proyectos SET `titulo_proyecto` = '$titulo_proyecto', `descripcion` = '$descripcion', `linku` = '$linku', `fecha_creacion` = '$fecha_creacion' WHERE `id` = $id");
        
        echo "<p><font color='green'>¡Proyecto actualizado exitosamente!</p>";
        echo "<a href='index.php'>Ver Resultado</a>";
    }
}
?>
