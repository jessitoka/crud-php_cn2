<?php
include 'dbConnection.php';
?>

<html>
<head>
    <title>Agregar Proyecto</title>
</head>

<body>
    <h2>Agregar Proyecto</h2>
    <p>
        <a href="index.php">Inicio</a>
    </p>

    <form action="addAction.php" method="post" name="add">
        <table width="25%" border="0">
            <tr> 
                <td>Titulo del Proyecto</td>
                <td><input type="text" name="titulo_proyecto"></td>
            </tr>
            <tr> 
                <td>Descripcion</td>
                <td><input type="text" name="descripcion"></td>
            </tr>
            <tr> 
                <td>Link</td>
                <td><input type="text" name="linku"></td>
            </tr>
			<tr> 
                <td>Fecha de creacion</td>
                <td><input type="date" name="fecha_creacion"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Agregar Proyecto"></td>
            </tr>
        </table>
    </form>
</body>
</html>


