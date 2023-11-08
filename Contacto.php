<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    
    $destinatario = "nicorfire1.4@gmail.com";
    $asunto = "Mensaje de contacto de $nombre";
    $cuerpo = "Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje";
    
    if (mail($destinatario, $asunto, $cuerpo)) {
        echo "El mensaje se ha enviado correctamente. Gracias por ponerte en contacto con nosotros.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
