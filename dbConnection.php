<?php
$databaseHost = 'localhost';
$databaseName = 'crud';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, 3307); 

if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}
mysqli_set_charset($mysqli, "utf8mb4");
?>
