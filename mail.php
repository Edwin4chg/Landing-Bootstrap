<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    $para = "info@edwin4chg.com";
    $asunto = "Nuevo mensaje de contacto desde tu sitio web Boostrap";

    $mensajeCorreo = "Nombre: " . $nombre . "\n";
    $mensajeCorreo .= "Correo electrónico: " . $email . "\n";
    $mensajeCorreo .= "Mensaje:\n" . $mensaje;

    // Envía el correo
    mail($para, $asunto, $mensajeCorreo);

    // Redirige al usuario al archivo index.html
    header("Location: index.html");
    exit; // Asegura que el script se detenga después de la redirección
}
?>
