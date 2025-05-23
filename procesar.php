<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $comentarios = htmlspecialchars($_POST['comentarios']);
    

    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Datos Recibidos</title>
        
    </head>
    <body>
        <div class='container'>
            <h1>Datos recibidos</h1>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Correo:</strong> $correo</p>
            <p><strong>Comentarios:</strong> $comentarios</p>
            <a href='index.php' class='btn-volver'>← Regresar al formulario</a>
        </div>
    </body>
    </html>";
} else {
    header("Location: ../index.php");
    exit;
}
?>