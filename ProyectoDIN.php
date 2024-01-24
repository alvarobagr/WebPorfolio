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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibiendo datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $comentarios = $_POST['comentarios'];

    // Destinatario del correo
    $to = "alvaro230604@gmail.com"; 

    // Asunto del correo
    $subject = "Nuevo mensaje de contacto desde AppLoad";

    // Cuerpo del mensaje
    $message = "Nombre: $nombre\n";
    $message .= "Apellidos: $apellidos\n";
    $message .= "Correo electrónico: $correo\n";
    $message .= "Comentarios:\n$comentarios";

    // Cabeceras del correo
    $headers = "From: $correo";

    // Enviar correo
    mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppLoad</title>
    <link rel="stylesheet" href="styles.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boton animado para Redes Sociales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="Carpetadephp/IMG/iconoappload.PNG" type="image/x-icon">

</head>

<body>
    <header>
        <img src="Carpetadephp/IMG/fondo gris.PNG" alt="Logo de AppLoad" width="50">

    </header>
    <nav>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="#servicio">Servicio</a></li>
            <li><a href="#quienes-somos">Quiénes somos</a></li>
            <li><a href="#politica-privacidad">Política de Privacidad</a></li>
        </ul>
    </nav>
    <main>
        <section id="inicio">
            <img src="Carpetadephp/IMG/fondo-cosmico-luces-laser-colores-perfecto-fondo-pantalla-digital.jpg"
                alt="Imagen principal de AppLoad">
            <p>Esto es AppLoad <br> </p>
        </section>

        <section id="quienes-somos">
            <h2>Quiénes Somos</h2>
            <div>
                <p class="texto">AppLoad es una innovadora empresa de desarrollo de aplicaciones que transforma ideas
                    en experiencias digitales impactantes. Con un equipo apasionado de expertos en diseño y
                    programación, nos dedicamos a crear aplicaciones personalizadas que satisfacen las necesidades
                    únicas de nuestros clientes. Nuestra misión es cargar tus ideas con funcionalidad, usabilidad y
                    estilo, brindando soluciones móviles de vanguardia que impulsan el éxito empresarial y mejoran la
                    vida
                    de los usuarios. En AppLoad, estamos comprometidos con la excelencia en el desarrollo de
                    aplicaciones y la satisfacción
                    del cliente, y estamos listos para llevar tus conceptos al siguiente nivel digital.
            </div>
            <div>
                <h3>Conoce al equipo</h3>
                <section class="Equipo">
                    <div class="miembro"><img src="Carpetadephp/IMG/El CEO.jpg" alt="CEO de AppLoad" width="245">
                        <p class="nombre">
                        <h3>El CEO</h3> Álvaro Ballester Grau</p>
                    </div>
                    <div class="miembro"><img src="Carpetadephp/IMG/EL BD.jpg" alt="Responsable de la DB de AppLoad" width="200">
                        <p class="nombre">
                        <h3>El Base de Datos</h3> Pau Roig Varea</p>
                    </div>
                    <div class="miembro"><img src="Carpetadephp/IMG/EL PROGRAMADOR.jpg" alt="Director programador de AppLoad"
                            width="200">
                        <p class="nombre">
                        <h3>El Programador</h3> Daniel Núñez Moreno</p>
                    </div>
                    <div class="miembro"><img src="Carpetadephp/IMG/El RH.jpg" alt="Responsable de recursos humanos de AppLoad"
                            width="200">
                        <p class="nombre">
                        <h3>El Recursos Humanos</h3> Vicent Bellés Barreda</p>
                    </div>
                </section>
            </div>
            </p>

        </section>

        <section id="servicio">
            <h2>Servicio</h2>
            <p class="texto"><strong>1.Desarrollo de aplicaciones móviles:</strong> Creación de aplicaciones para
                dispositivos iOS
                (iPhone y iPad) y Android, desde aplicaciones nativas hasta aplicaciones multiplataforma. <br>
                <strong>2.Desarrollo de aplicaciones web:</strong> Diseño y desarrollo de aplicaciones web modernas y
                responsivas
                que funcionen en múltiples navegadores y dispositivos.<br>
                <strong>3.Consultoría y estrategia:</strong> Asesoramiento experto en la planificación de proyectos de
                aplicaciones, desde la conceptualización hasta la estrategia de lanzamiento y marketing.<br>
                <strong>4.Diseño de interfaz de usuario (UI) y experiencia de usuario (UX):</strong> Creación de
                interfaces atractivas y fáciles de usar para garantizar una experiencia de usuario
                excepcional.<br>
                <strong>5.Desarrollo de aplicaciones empresariales:</strong> Creación de soluciones personalizadas
                para empresas, incluyendo aplicaciones de gestión, automatización de procesos y sistemas
                de colaboración.<br>
                <strong>6.Aplicaciones de comercio electrónico:</strong> Desarrollo de aplicaciones de compras en
                línea seguras y eficientes para impulsar el comercio electrónico.<br>
                <strong>7.Mantenimiento y soporte continuo:</strong> Ofrecen servicios de mantenimiento,
                actualizaciones y soporte técnico para garantizar que las aplicaciones sigan
                funcionando sin problemas.<br>
                <strong>8.Pruebas y aseguramiento de calidad:</strong> Realización de pruebas rigurosas
                para garantizar que las aplicaciones sean seguras, estables y libres de
                errores.<br>
                <strong>9.Desarrollo de prototipos y MVP:</strong> Creación de prototipos y versiones
                mínimas viables de aplicaciones para validar conceptos antes de la
                inversión a gran escala.
            </p>
            <section class="imagenservicios">
                <img src="Carpetadephp/IMG/representacion-experiencia-usuario-diseno-interfaz-telefono-inteligente.jpg"
                    alt="imagen servicios 3" width="200">
                <img src="Carpetadephp/IMG/representacion-experiencia-usuario-diseno-interfaz-computadora.jpg"
                    alt="imagen servicios 2" width="250">
                <img src="Carpetadephp/IMG/mujer-atletica-su-telefono-inteligente.jpg" alt="imagen servicios 1" width="250">


            </section>

        </section>

        <section id="contacto">
            <h2>Contacto</h2>
            <section class="contacto">
                <p class="texto">Puedes contactar con nosotros de las maneras siguientes: <br>
                    Puedes hacer click en cualquira de nuestras redes Sociales. <br>
                    O mediante el formulario de abajo
                </p>
                <div class="formu">
                    <h3>Formulario de Contacto</h3>
                    <form action="" method="post">
                        <p> <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </p>

                        <p><label for="apellidos">Apellidos:</label>
                            <input type="text" id="apellidos" name="apellidos" required>
                        </p>

                        <p><label for="correo">Correo electrónico:</label>
                            <input type="email" id="correo" name="correo" required>
                        </p>

                        <p><label for="comentarios">Comentarios:</label>
                            <textarea id="comentarios" name="comentarios" rows="4"></textarea>
                        </p>

                        <button type="submit">Enviar</button>
                        <button type="button" onclick="cancelar()">Cancelar</button>
                    </form>
                </div>

                <script>
                    function cancelar() {
                        // Vaciar el contenido de las cajas de texto y el área de comentarios
                        document.getElementById('nombre').value = '';
                        document.getElementById('apellidos').value = '';
                        document.getElementById('correo').value = '';
                        document.getElementById('comentarios').value = '';

                        alert("Formulario cancelado");
                    }
                </script>

            </section>
            <section class="mapa"> <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d725.9849378175666!2d-0.4572127853736466!3d39.54569149706596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd605b3656ab2423%3A0xdc9d84ba75ece2eb!2sMAHLE%20Electronics%20S.A.!5e0!3m2!1ses!2ses!4v1695204554133!5m2!1ses!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></section>
        </section>

        <section id="politica-privacidad">
            <h2>Política de Privacidad</h2>
            <p class="texto">Las políticas de privacidad de AppLoad son <strong> fundamentales</strong> para garantizar
                la protección de
                la información
                personal de nuestros usuarios y clientes. Nuestra empresa se compromete a cumplir con las leyes de
                privacidad aplicables y a adoptar las mejores prácticas en la gestión de datos. A continuación, se
                presenta un resumen de las políticas de privacidad que podrían aplicarse en la empresa: <br><br>
                <strong> 1. Recopilación de Datos:</strong> AppLoad solo recopila información personal necesaria para
                proporcionar
                nuestros servicios y mejorar la experiencia del usuario. Esto puede incluir nombres, direcciones de
                correo electrónico, información de contacto y datos de uso. <br><br>
                <strong>2. Uso de la Información:</strong> Los datos personales recopilados se utilizan exclusivamente
                para los fines
                para los cuales se proporcionaron, como el desarrollo y la prestación de servicios de aplicaciones. No
                compartiremos ni venderemos esta información a terceros sin el consentimiento explícito del
                usuario.<br><br>
                <strong>3. Seguridad de Datos:</strong> Implementamos medidas de seguridad sólidas para proteger la
                información personal
                contra accesos no autorizados, divulgación, alteración o destrucción. Esto incluye el uso de cifrado de
                datos y prácticas de seguridad estándar de la industria.<br><br>
                <strong>4. Consentimiento Informado:</strong> Cuando sea necesario, obtendremos el consentimiento
                informado de los
                usuarios antes de recopilar o procesar sus datos personales. Los usuarios tendrán la opción de retirar
                su consentimiento en cualquier momento.<br><br>
                <strong>5. Derechos del Usuario:</strong> Los usuarios tienen el derecho de acceder, corregir o eliminar
                sus datos
                personales. AppLoad facilitará el ejercicio de estos derechos y responderá a las solicitudes en un plazo
                razonable.<br><br>
                <strong>6. Cookies y Tecnologías de Seguimiento:</strong> Podemos utilizar cookies u otras tecnologías
                de seguimiento
                para mejorar la funcionalidad y la experiencia del usuario. Los usuarios pueden administrar sus
                preferencias de cookies.<br><br>
                <strong>7. Comunicación:</strong> Podemos enviar comunicaciones relacionadas con nuestros servicios,
                actualizaciones o promociones a los usuarios que lo permitan. Los usuarios pueden optar por no recibir
                estas
                comunicaciones en cualquier momento.<br><br>
                <strong>8. Transferencias Internacionales:</strong> Si es necesario, informaremos a los usuarios si
                sus datos
                personales se transfieren a ubicaciones fuera de su país de origen y cómo se protegerán durante
                dicha transferencia.<br><br>
                <strong>9. Niños:</strong> No recopilamos intencionadamente información personal de niños menores de
                13 años sin el
                consentimiento verificable de sus padres o tutores legales.<br><br>
                <strong>10. Actualizaciones de la Política:</strong> AppLoad puede actualizar su política de
                privacidad
                periódicamente. Se notificarán a los usuarios los cambios significativos y se les brindará la
                oportunidad de revisar y aceptar la nueva política.<br><br>
                <strong>11. Responsabilidad:</strong> AppLoad designará a un responsable de la protección de datos
                encargado de
                garantizar el cumplimiento de las políticas de privacidad y de responder a las preguntas y
                preocupaciones de los usuarios.<br><br>
                Estas políticas de privacidad son fundamentales para garantizar que AppLoad maneje la información
                personal de manera responsable y ética. La privacidad y la seguridad de nuestros usuarios son
                prioridades clave en todos nuestros esfuerzos.
            </p>
        </section>

    </main>
    <footer>
        <ul class="buttons">
            <a href="https://www.facebook.com/?locale=es_ES" class="fa fa-facebook"></a>
            <a href="https://twitter.com/X?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
            <a href="https://www.linkedin.com/home/?originalSubdomain=es" class="fa fa-linkedin"></a>
        </ul>
    </footer>

</body>

</html>