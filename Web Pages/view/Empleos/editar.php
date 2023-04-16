<?php
// Conexión a la base de datos
include('C:\xampp\htdocs\co.edu.udec.act1.AdrianJadid\co.edu.udec.act1.AdrianJadid.modelo\bd.php');

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Comprobar si se ha enviado un formulario POST y si existe la variable edit_id
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $editarNombre = $_POST['editar_nombre'];
    $editarCategoria = $_POST['editar_categoria']; // Obtener el nuevo valor para categoria
    $editarAreaTrabajo = $_POST['editar_area_trabajo']; // Obtener el nuevo valor para areaTrabajo
    $editarEmpresa = $_POST['editar_empresa']; // Obtener el nuevo valor para empresa
    $editarNivel = $_POST['editar_nivel']; // Obtener el nuevo valor para nivel
    $editarSueldo = $_POST['editar_sueldo']; // Obtener el nuevo valor para sueldo
    $editarFunciones = $_POST['editar_funciones']; // Obtener el nuevo valor para funciones
    $editarCargoJefe = $_POST['editar_cargo_jefe']; // Obtener el nuevo valor para cargoJefe
    $editarCCUsuario = $_POST['editar_cc_usuario']; // Obtener el nuevo valor para cc_usuario

    // Consulta SQL de actualización con todos los campos
    $sql = "UPDATE empleos SET nombre='$editarNombre', categoria='$editarCategoria', areaTrabajo='$editarAreaTrabajo', empresa='$editarEmpresa', nivel='$editarNivel', sueldo='$editarSueldo', funciones='$editarFunciones', cargoJefe='$editarCargoJefe', cc_usuario='$editarCCUsuario' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "El empleo con ID $id fue actualizado correctamente";
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
    <title>Editar registro</title>
    <style>
        /* Estilos para centrar el formulario y dar colores */
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf4ff; /* Cambiar color de fondo de la página a #eaf4ff */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
        }
        .form-container {
        font-family: Arial, sans-serif;
        background-color: #ffffff; /* Cambiar color de fondo del formulario a #ffffff */
        padding: 20px;
        text-align: center;
        border: 1px solid #00b9ff;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        width: 400px;
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
    }

    .form-container input, .form-container select {
        font-family: Arial, sans-serif;
        width: 95%;
        padding: 5px;
        margin-bottom: 20px;
        border: 1px solid #ffffff;
        border-radius: 5px;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
    }

    .form-container input[type="number"],
    .form-container input[type="text"] {
        color: #45c9ff;
        background-color: #ffffff;
        border: 1px solid #00b9ff;
        padding: 10px 1px;
        cursor: pointer;
    }

    .form-container button[type="submit"] {
        color: #ffffff;
        background-color: #45c9ff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    .form-container a {
        font-family: Arial, sans-serif;
        color: #00b9ff;
        text-decoration: none;
    }

    .color1 {color: #00b9ff;}
    .color2 {color: #45c9ff;}
    .color3 {color: #b1ddff;}
    .color4 {color: #eaf4ff;}
    .color5 {color: #ffffff;}
</style>



</head>
<body>
    <div class="form-container">
        <h1 class="color1">Editar registro</h1>
        <form method="POST">
            <label class="color2">Ingrese el ID del registro a editar:</label>
            <input type="number" name="edit_id" required>
            <label class="color2">Nuevo nombre:</label>
            <input type="text" name="editar_nombre" required>
            <label class="color2">Nueva categoría:</label>
            <input type="text" name="editar_categoria" required>
            <label class="color2">Nueva área de trabajo:</label>
            <input type="text" name="editar_area_trabajo" required>
            <label class="color2">Nueva empresa:</label>
            <input type="text" name="editar_empresa" required>
            <label class="color2">Nuevo nivel:</label>
            <input type="text" name="editar_nivel" required>
            <label class="color2">Nuevo sueldo:</label>
            <input type="text" name="editar_sueldo" required>
            <label class="color2">Nuevas funciones:</label>
            <input type="text" name="editar_funciones" required>
            <label class="color2">Nuevo cargo de jefe:</label>
            <input type="text" name="editar_cargo_jefe" required>
            <label class="color2">Nuevo CC de usuario:</label>
            <input type="text" name="editar_cc_usuario" required>
            <button style="float: right;" type="submit">Actualizar</button>
            <button style="float: left; background-color: #45c9ff; color: #fff; border: none; padding: 10px 20px; margin-top: 1 px; cursor: pointer;" onclick="location.href='http://localhost:3000/co.edu.udec.act1.AdrianJadid.modelo.crud/EmpleoCrud.php'" type="button">Regresar</button>
    </form>
</body>
</html>


