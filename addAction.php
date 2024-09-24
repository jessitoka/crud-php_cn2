<html>
<head>
    <title>Agregar Proyecto</title>
</head>

<body>
<?php
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
    $titulo_proyecto = mysqli_real_escape_string($mysqli, $_POST['titulo_proyecto']);
    $descripcion = mysqli_real_escape_string($mysqli, $_POST['descripcion']);
    $linku = mysqli_real_escape_string($mysqli, $_POST['linku']);
	$fecha_creacion = mysqli_real_escape_string($mysqli, $_POST['fecha_creacion']);
    
    if (empty($titulo_proyecto) || empty($descripcion) || empty($linku) || empty($fecha_creacion)) {
        if (empty($titulo_proyecto)) {
            echo "<font color='red'>El campo del titulo esta vacio.</font><br/>";
        }
        
        if (empty($descripcion)) {
            echo "<font color='red'>El campo de la descripcion esta vacio.</font><br/>";
        }
        
        if (empty($linku)) {
            echo "<font color='red'>El campo del enlace esta vacio.</font><br/>";
        }

		if (empty($fecha_creacion)) {
            echo "<font color='red'>El campo del enlace esta vacio.</font><br/>";
        }
        
        echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
    } else { 

        $result = mysqli_query($mysqli, "INSERT INTO proyectos (titulo_proyecto, descripcion, linku, fecha_creacion) VALUES ('$titulo_proyecto', '$descripcion', '$linku','$fecha_creacion')");
        
        if ($result) {
            echo "<p><font color='green'> --- Proyecto agregado exitosamente ---</font></p>";
            echo "<a href='index.php'>Ver Resultados</a>";
        } else {
            echo "<font color='red'>Error al agregar el proyecto.</font><br/>";
        }
    }
}
?>
</body>
</html>

