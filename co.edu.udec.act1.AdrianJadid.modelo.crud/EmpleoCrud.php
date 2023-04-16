<?php include('C:\xampp\htdocs\co.edu.udec.act1.AdrianJadid\co.edu.udec.act1.AdrianJadid.modelo\bd.php');

// Insertar un nuevo empleo en la base de datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $areaTrabajo = $_POST['areaTrabajo'];
    $empresa = $_POST['empresa'];
    $nivel = $_POST['nivel'];
    $sueldo = $_POST['sueldo'];
    $funciones = $_POST['funciones'];
    $cargoJefe = $_POST['cargoJefe'];
    $ccUsuario = $_POST['cc_usuario'];

    $sql = "INSERT INTO empleos (id, nombre, categoria, areaTrabajo, empresa, nivel, sueldo, funciones, cargoJefe, cc_usuario) 
            VALUES ('$id', '$nombre', '$categoria', '$areaTrabajo', '$empresa', '$nivel', '$sueldo', '$funciones', '$cargoJefe', '$ccUsuario')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo empleo agregado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Empleos</title>
    <style>
        .container {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
        }
        .form-container {
            font-family: Arial, sans-serif;
            width: 45%;
            border: 1px solid #00b9ff;
            padding: 10px;
        }
        .table-container {
            font-family: Arial, sans-serif;
            width: 100%;
        }
        .recuadro {
            font-family: Arial, sans-serif;
            margin-bottom: 0px;
            border: 1px solid #00b9ff;
            padding: 10px;
        }
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 95%;
        }
        th, td {
            font-family: Arial, sans-serif;
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            font-family: Arial, sans-serif;
            background-color: #45c9ff;
            color: #ffffff;
        }
        label {
            font-family: Arial, sans-serif;
            display: block;
            margin-bottom: 5px;
            color: #00b9ff;
        }
        input[type="text"], textarea {
            font-family: Arial, sans-serif;
            padding: 10px;
            border: 1px solid #b1ddff;
            border-radius: 3px;
            width: 50%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            font-family: Arial, sans-serif;
            background-color: #45c9ff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf4ff;
            color: #333333;
        }
    </style>
</head>
<body>
    <h1>REGISTRE UN NUEVO EMPLEO</h1>
    <div class="container">
        <div class="form-container">
            <div class="recuadro">
                <h2 class="color2">Nuevo empleo</h2>
                <form action="EmpleoCrud.php" method="post">
                    <label>ID:</label>
                    <input type="text" name="id">

                    <label>Nombre:</label>
                    <input type="text" name="nombre">

                    <label>Categoría:</label>
                    <input type="text" name="categoria">

                    <label>Área de trabajo:</label>
                    <input type="text" name="areaTrabajo">

                    <label>Empresa:</label>
                    <input type="text" name="empresa">

                    <label>Nivel:</label>
                    <input type="text" name="nivel">

                    <label>Sueldo:</label>
                    <input type="text" name="sueldo">

                    <label>Funciones:</label>
                    <textarea name="funciones"></textarea>

                    <label>Cargo del jefe:</label>
                    <input type="text" name="cargoJefe">

                    <label>Cédula del usuario:</label>
                    <input type="text" name="cc_usuario">

                    <input type="submit" value="Guardar">
                </form>

</form>

            </div>
        </div>

        <div class="table-container">
  <div class="recuadro">
    <h2 class="color2">LISTA DE EMPLEOS</h2>
    <table style="width: 100%; border-collapse: collapse; margin: auto; text-align: center;">
      <tr style="background-color: #f2f2f2;">
        <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Nombre</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Categoría</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Área de trabajo</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Empresa</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Nivel</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Sueldo</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Funciones</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Cargo del jefe</th>
        <th style="padding: 10px; border: 1px solid #ddd;">CC del usuario</th>
      </tr>
      
      <?php include('C:\xampp\htdocs\co.edu.udec.act1.AdrianJadid\Web Pages\view\Empleos\listar.php'); ?>
      
    </table>
    <div>
    <div>
  <button style="float: left; background-color: #45c9ff; color: #fff; border: none; padding: 10px 20px; margin-right: 10px; margin-top: 20px; cursor: pointer;" onclick="location.href='http://localhost:3000/Web%20Pages/view/Empleos/eliminar.php'" type="button">Eliminar</button>
  <button style="float: left; background-color: #45c9ff; color: #fff; border: none; padding: 10px 20px; margin-top: 20px; cursor: pointer;" onclick="location.href='http://localhost:3000/Web%20Pages/view/Empleos/editar.php'" type="button">Editar</button>
</div>

</div>
