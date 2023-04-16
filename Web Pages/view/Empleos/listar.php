<?php 
include('C:\xampp\htdocs\co.edu.udec.act1.AdrianJadid\co.edu.udec.act1.AdrianJadid.modelo\bd.php');

// Seleccionar todos los registros de la tabla empleos
$sql = "SELECT * FROM Empleos";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>
            <tr>
             
            </tr>";
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>".$fila["id"]."</td>
                <td>".$fila["nombre"]."</td>
                <td>".$fila["categoria"]."</td>
                <td>".$fila["areaTrabajo"]."</td>
                <td>".$fila["empresa"]."</td>
                <td>".$fila["nivel"]."</td>
                <td>".$fila["sueldo"]."</td>
                <td>".$fila["funciones"]."</td>
                <td>".$fila["cargoJefe"]."</td>
                <td>".$fila["cc_usuario"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros";
}

$conn->close();

?>
