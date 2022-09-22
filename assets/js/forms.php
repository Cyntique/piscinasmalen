<?php  

// Llamando a los campos
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefono  = $_POST['telefono'];
    $ciudad  = $_POST['ciudad'];
    $servicios = $_POST['servicios'];
    


// Datos para el correo
$destinatario = "cyntybod@gmail.com";
$asunto = "Consulta de la web Piscinas Malen";
$encabezados = "Enviado: cyntybod@gmail.com\r\n"; 

$carta = "De: $name \n;
$carta .= "Email: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Ciudad: $ciudad \n";
$carta .= "Servicios: $servicios \n";

// Enviando Mensaje
mail($destinatario, $asunto, $carta, $encabezados);
header('Location:/envio.html');

?>