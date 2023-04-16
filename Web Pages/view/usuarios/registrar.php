<?php
// Incluir archivo de conexión a la base de datos
include('C:\xampp\htdocs\co.edu.udec.act1.AdrianJadid\co.edu.udec.act1.AdrianJadid.modelo\bd.php');

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $cc = $_POST["cc"];
    $pass = $_POST["pass"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];

    // Validar que los campos no estén vacíos
    if (empty($cc) || empty($pass) || empty($nombre) || empty($apellido) || empty($genero) || empty($email)) {
        echo "Por favor complete todos los campos.";
    } else {
        // Crear consulta SQL para insertar nuevo usuario
        $sql = "INSERT INTO Usuarios (cc, pass, nombre, apellido, genero, email)
                VALUES ('$cc', '$pass', '$nombre', '$apellido', '$genero', '$email')";

        // Ejecutar consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Usuario registrado exitosamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de usuario</title>
    <style>
        /* Estilos para centrar el formulario */
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf4ff; /* Cambiar color de fondo de la página a #eaf4ff */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
            color: #b1ddff;
            border: 1px solid #45c9ff;
            border-radius: 5px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        }

        .form-container input[type="submit"] {
            font-family: Arial, sans-serif;
            width: auto;
            color: #eaf4ff;
            background-color: #00b9ff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        }

        .form-container a {
            font-family: Arial, sans-serif;
            color: #00b9ff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Registro de usuario</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label class="color2">CC:</label>
            <input type="text" name="cc"><br>
            <label class="color2">Contraseña:</label>
            <input type="password" name="pass"><br>
            <label class="color2">Nombre:</label>
            <input type="text" name="nombre"><br>
            <label class="color2">Apellido:</label>
            <input type="text" name="apellido"><br>
            <label class="color2">Género:</label>
            <select name="genero">
                <option value="M" class="color3">Masculino</option>
                <option value="F" class="color3">Femenino</option>
            </select><br>
            <label class="color2">Email:</label>
            <input type="email" name="email"><br>
            <input type="submit" value="Registrar" class="color5">
        </form>
        <a href="http://localhost:3000/Web%20Pages/view/usuarios/login.php" class="color1">¿Ya tienes una cuenta? Inicia sesión aquí</a>
    </div>

</body>
</html>




