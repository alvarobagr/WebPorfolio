<?php
$servidor = "localhost";
$usuario = "AlvaroPorfolio";
$contraseña="alumne";
$BD="porfolio";
$conexion = new mysqli($servidor, $usuario, $contraseña, $BD);

if (!$conexion) { 
    die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 
} 
mysqli_select_db($conexion, $BD) or die(mysqli_error($conexion));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Currículum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff9e6; /* Cambia el color de fondo a crema */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }

        p {
            font-size: 18px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            font-weight: bold;
        }

        .contact {
            display: flex;
            align-items: center;
        }

        .contact i {
            margin-right: 10px;
        }

        .skills ul {
            list-style: none;
            padding: 0;
        }

        .skills li {
            margin-bottom: 5px;
        }
        
        .profile-image {
            text-align: center;
        }

        .FotoCurriculum img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="FotoCurriculum">
            <img src="IMG/El CEO.jpg" alt="Foto de Perfil">
        </div>
        <header>
            <h1>Álvaro Ballester Grau</h1>
            <p>Técnico Superior de Desarrollo de Aplicaciones Multiplataforma</p>
        </header>
        <section class="section">
            <h2 class="section-title">Información de Contacto</h2>
            <div class="contact">
                <i class="mail"></i> alvaro230604@gmail.com
            </div>
            <div class="contact">
                <i class="telefono"></i> +34 650481038
            </div>
            <div class ="contact">
                <i class="paginaweb"></i> www.AppLoad.com
            </div>
            <div class="contact">
                <i class="localidad"></i> Valencia, España
            </div>
        </section>
        <section class="section">
            <h2 class="section-title">Educación</h2>
            <p><strong>Campus Cámara FP</strong> - Valencia, España <br> Técnico Superior de Desarrollo de Aplicaciones Multiplataforma - 23/06/2024</p>
            <p><strong>Colegio Palma</strong> - Valencia, España <br> Bachillerato Científico - 15/05/2022</p>
        </section>
        <section class="section">
            <h2 class="section-title">Habilidades</h2>
            <div class="skills">
                <ul>
                    <li>Desarrollo web y apps front-end</li>
                    <li>Desarrollo web y apps back-end</li>
                    <li>Java, Kotlin, HTML, CSS, JavaScript</li>
                    <li>Base de datos (ej. MySQL, MongoDB)</li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
