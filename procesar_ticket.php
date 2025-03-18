<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $mensaje = $_POST["message"];

    // Validación básica
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        die("Todos los campos son obligatorios.");
    }

    // Guardar en archivo (puedes usar una base de datos)
    $archivo = fopen("tickets.txt", "a");
    fwrite($archivo, "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje\n---\n");
    fclose($archivo);

    echo "Ticket enviado correctamente.";
}
?>
