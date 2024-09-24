<?php
require_once("dbConnection.php");

$result = mysqli_query($mysqli, "SELECT * FROM proyectos ORDER BY id DESC");
?>

<html>
<head>
    <title>Computo en la nube</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        h2 {
            margin-top: 80px;
        }
        table {
            margin: 20px auto; 
        }
        .add-project {
            margin-top: 100px; 
        }
    </style>
</head>

<body>
    <h2>Jessica Judith Alamilla Torres</h2>
    <h3>212H17100</h3>
    
    <p class="add-project">
        <a href="add.php">Agregar mas proyectos</a>
    </p>

    <table width='80%' border=0>
        <tr bgcolor='#9DE6EB'>
            <td><strong>Titulo del proyecto</strong></td>
            <td><strong>Descripcion</strong></td>
            <td><strong>Link</strong></td>
            <td><strong>Fecha de creacion</strong></td>
        </tr>
        <?php
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$res['titulo_proyecto']."</td>";
            echo "<td>".$res['descripcion']."</td>";
            echo "<td>".$res['linku']."</td>";    
            echo "<td>".$res['fecha_creacion']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
            <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Esta seguro que quiere borrarlo?')\">Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
