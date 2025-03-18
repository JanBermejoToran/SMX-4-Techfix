<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $mensaje = $_POST["message"];

    // Validación básica
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        die("Todos los campos son obligatorios.");
    }

    // Configuración del correo
    $para = "tu_correo@example.com"; // Cambia esto a tu correo
    $asunto = "Nuevo Ticket de Soporte";
    $contenido = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
    $cabeceras = "From: $email";

    // Enviar el correo
    if (mail($para, $asunto, $contenido, $cabeceras)) {
        echo "Ticket enviado correctamente.";
    } else {
        echo "Error al enviar el ticket.";
    }
}
?>
