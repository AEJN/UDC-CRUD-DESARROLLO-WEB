<?php

$host = "localhost"; // dirección del servidor de la base de datos
$user = "root"; // nombre de usuario de la base de datos
$password = ""; // contraseña de la base de datos
$dbname = "bd crud"; // nombre de la base de datos

// Establecer la conexión con la base de datos
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar si se ha establecido la conexión con la base de datos
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

?>
