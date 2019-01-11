<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['Telefono'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "rbalderrama41@gmail.com";
    $asunto = "Contacto de Pagina Web";

    $carta = "De: $nombre\n";
    $carta .= "Correo: $correo \n";
    $carta .= "mensaje: $mensaje";

    mail($destinatario,$asunto,$carta);

?>