<?php  

// Llamando a los campos
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefono  = $_POST['phone'];
    $ciudad  = $_POST['ciudad'];
    $servicios = $_POST['servicios'];
    $mensaje = $_POST['mensaje'];
    


// Datos para el correo
$destinatario = "info@piscinasmalen.com.ar";
$asunto = "Consulta de la web Piscinas Malen";
$encabezados = "Enviado: info@piscinasmalen.com.ar\r\n"; 

$carta = "De: $name \n";
$carta .= "Email: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Ciudad: $ciudad \n";
$carta .= "Servicios: $servicios \n";
$carta .= "Mensaje: $mensaje \n";

// Enviando Mensaje
mail($destinatario, $asunto, $carta, $encabezados);
header('Location:envio.html');

?>