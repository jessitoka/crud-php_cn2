<?php
require_once("dbConnection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM proyectos WHERE id=$id");

while ($res = mysqli_fetch_assoc($result)) {
    $titulo_proyecto = $res['titulo_proyecto'];
    $descripcion = $res['descripcion'];
    $linku = $res['linku'];
	$fecha_creacion = $res['fecha_creacion'];
}
?>

<html>
<head>
    <title>Editar Proyecto</title>
</head>

<body>
    <h2>Editar Proyecto</h2>
    <p>
        <a href="index.php">Inicio</a>
    </p>

    <form action="editAction.php" method="post" name="edit">
        <table width="25%" border="0">
            <tr> 
                <td>Titulo del Proyecto</td>
                <td><input type="text" name="titulo_proyecto" value="<?php echo $titulo_proyecto; ?>"></td>
            </tr>
            <tr> 
                <td>Descripcion</td>
                <td><input type="text" name="descripcion" value="<?php echo $descripcion; ?>"></td>
            </tr>
            <tr> 
                <td>Link</td>
                <td><input type="text" name="linku" value="<?php echo $linku; ?>"></td>
            </tr>
			<tr> 
                <td>Fecha de creacion</td>
                <td><input type="date" name="fecha_creacion" value="<?php echo $fecha_creacion; ?>"></td>
            </tr>
            <tr> 
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="submit" value="Actualizar Proyecto"></td>
            </tr>
        </table>
    </form>
</body>
</html>
