

<?php
$servidor = "localhost";
$usuario = "AlvaroPorfolio";
$contraseña="alumne";
$BD="gestion_notas";
$conexion = new mysqli($servidor, $usuario, $contraseña, $BD);

if (!$conexion) { 
    die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
 
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
 
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
 
        form {
            display: flex;
            flex-direction: column;
        }
 
        label {
            text-align: left;
            margin-bottom: 5px;
            color: #555;
        }
 
        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
 
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
 
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
 
        <?php
        // Verifica si se han enviado datos del formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Define las credenciales correctas
            //$correct_username = "alvaro@gmail.com";
            $username = $_POST["username"];
            $sql = "SELECT * FROM alumno WHERE Email='$username'";
            $resultado = $conexion->query($sql);
            if ($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                $emailResultado = $fila['Email'];
                $_SESSION['Email'] = $emailResultado;
                $_SESSION['id'] = $fila['ID'];
                echo $fila['Email'];
                echo "<p>Login exitoso. Redirigiendo...</p>";
                header("Refresh: 3; URL=ProyectoDIN.php"); // Redirige después de 3 segundos
            } else {
                echo 'Introduce bien los datos';
            }
           
            //$correct_password = "hola123";
           
 
            // Obtiene las credenciales del formulario
           
            //$password = $_POST["password"];
 
            // Verifica las credenciales
         
        }
        ?>
 
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
 
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
 
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
