<?php
// Conexión a la base de datos
include('C:\xampp\htdocs\co.edu.udec.act1.AdrianJadid\co.edu.udec.act1.AdrianJadid.modelo\bd.php');

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Comprobar si se ha enviado un formulario POST y si existe la variable delete_id
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM empleos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "El empleo con ID $id fue eliminado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar registro</title>
    <style>
        /* Estilos para centrar el formulario y dar colores */
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf4ff; /* Cambiar color de fondo de la página a #eaf4ff */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }
        .form-container {
        font-family: Arial, sans-serif;
        background-color: #ffffff; /* Cambiar color de fondo del formulario a #ffffff */
        padding: 20px;
        text-align: center;
        border: 1px solid #00b9ff;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .form-container h1 {
        font-family: Arial, sans-serif;
        margin-top: 0;
        color: #00b9ff;
    }

    .form-container label {
        font-family: Arial, sans-serif;
        display: block;
        margin-bottom: 10px;
        color: #45c9ff;
    }

    .form-container input, .form-container select {
        font-family: Arial, sans-serif;
        width: 100%;
        padding: 5px;
        margin-bottom: 20px;
        border: 1px solid #45c9ff;
        border-radius: 5px;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
    }

    .form-container input[type="number"] {
        color: #45c9ff;
        background-color: #ffffff;
        border: 1px solid #45c9ff;
        padding: 10px 1px;
        cursor: pointer;
    }

    .form-container a {
        font-family: Arial, sans-serif;
        color: #45c9ff;
        text-decoration: none;
    }

  
</style>
</head>
<body>
    <div class="form-container">
        <h1>Eliminar registro</h1>
        <form method="POST">
            <label class="color2">Ingrese el ID del registro a eliminar:</label>
            <input type="number" name="delete_id" required>
            <button type="submit" style="float: right; background-color: #45c9ff; color: #fff; border: none; padding: 10px 20px; margin-top: 20px; cursor: pointer;">Eliminar</button>
            <button style="float: left; background-color: #45c9ff; color: #fff; border: none; padding: 10px 20px; margin-top: 20px; cursor: pointer;" onclick="location.href='http://localhost:3000/co.edu.udec.act1.AdrianJadid.modelo.crud/EmpleoCrud.php'" type="button">Regresar</button>
        </form>
    </div>
</body>
</html>