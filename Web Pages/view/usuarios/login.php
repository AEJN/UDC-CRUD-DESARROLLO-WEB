<?php
// Incluir archivo de conexión a la base de datos
include('C:\xampp\htdocs\co.edu.udec.act1.AdrianJadid\co.edu.udec.act1.AdrianJadid.modelo\bd.php');

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $cc = $_POST["cc"];
    $pass = $_POST["pass"];

    // Validar que los campos no estén vacíos
    if (empty($cc) || empty($pass)) {
        echo "Por favor complete todos los campos.";
    } else {
        // Crear consulta SQL para verificar usuario
        $sql = "SELECT * FROM Usuarios WHERE cc='$cc' AND pass='$pass'";

        // Ejecutar consulta SQL
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Inicio de sesión exitoso, redirigir a EmpleoCrud.php
            header("Location: http://localhost:3000/co.edu.udec.act1.AdrianJadid.modelo.crud/EmpleoCrud.php");
            exit();
        } else {
            echo "Cédula o contraseña incorrecta.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <style>
        /* Estilos para el recuadro */
        body {
            background-color: #eaf4ff; /* Cambiar color de fondo de la página */
        }

        .login-box {
            font-family: Arial, sans-serif;
            width: 300px;
            margin: 0 auto;
            margin-top: 50vh;
            transform: translateY(-50%);
            padding: 20px;
            background-color: #ffffff; /* Cambiar color de fondo del recuadro a blanco */
            text-align: center;
            border: 1px solid #00b9ff;
            border-radius: 5px; /* Borde redondeado */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Sombra */
        }

        .login-box h1 {
            font-family: Arial, sans-serif;
            margin-top: 0;
            color: #00b9ff;
        }

        .login-box label {
            font-family: Arial, sans-serif;
            display: block;
            margin-bottom: 10px;
            color: #45c9ff;
        }

        .login-box input {
            font-family: Arial, sans-serif;
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            color: #b1ddff;
            border: 1px solid #45c9ff; /* Cambiar color del borde a #45c9ff */
            border-radius: 5px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        }

        .login-box input[type="submit"] {
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
    </style>
</head>
<body>
    <div class="login-box">
        <h1>Iniciar sesión</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>CC:</label>
            <input type="text" name="cc"><br>
            <label>Contraseña:</label>
            <input type="password" name="pass"><br>
            <input type="submit" value="Iniciar sesión">
        </form>
    </div>
</body>
</html>


