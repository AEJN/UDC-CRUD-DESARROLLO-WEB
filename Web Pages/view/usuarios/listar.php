<?php
// Incluir archivo de conexión a la base de datos
include('C:\xampp\htdocs\co.edu.udec.act1.AdrianJadid\co.edu.udec.act1.AdrianJadid.modelo\bd.php');

// Crear consulta SQL para seleccionar todos los usuarios de la tabla "Usuarios"
$sql = "SELECT * FROM Usuarios";

// Ejecutar consulta SQL y guardar resultados en una variable
$resultado = $conn->query($sql);

// Verificar si se obtuvieron resultados
if ($resultado->num_rows > 0) {
    // Imprimir encabezado de la tabla
    echo "<table>";
    echo "<tr><th>CC</th><th>Nombre</th><th>Apellido</th><th>Género</th><th>Email</th></tr>";

    // Recorrer los resultados y mostrar cada usuario en una fila de la tabla
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["cc"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["genero"] . "</td><td>" . $row["email"] . "</td></tr>";
    }

    // Imprimir cierre de la tabla
    echo "</table>";
} else {
    echo "No se encontraron usuarios.";
}

// Cerrar conexión a la base de datos
$conn->close();
?>
