<?php
//TOKEN QUE NOS DA FACEBOOK

$token = 'EAADgIehx20sBO0zUvL4a8CZBBLCOrEsrl1BX3wyC7jjuHAcPoc3OSarqAo4NgAdzT0sOZA7ek86QUFdB5BpuqiY5lGZCLvSCRxX904wdCnTJ9o9Y6xfbd0S3zUyQCLtGn3Fwdr3JR4jM13d3nVriX2kavqbaZCZCwscv4UhdHnLOPvaoquKUuY0MtWwg3228Dfg8mid7hHXY0zHZCmhwa8';
//NUESTRO TELEFONO
$telefono = '51913245598';
//URL A DONDE SE MANDARA EL MENSAJE
$url = 'https://graph.facebook.com/v17.0/107394555787486/messages';

//CONFIGURACION DEL MENSAJE
$mensaje = ''
        . '{'
        . '"messaging_product": "whatsapp", '
        . '"to": "'.$telefono.'", '
        . '"type": "template", '
        . '"template": '
        . '{'
        . '     "name": "hello_world",'
        . '     "language":{ "code": "en_US" } '
        . '} '
        . '}';
//DECLARAMOS LAS CABECERAS
$header = array("Authorization: Bearer " . $token, "Content-Type: application/json",);
//INICIAMOS EL CURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//OBTENEMOS LA RESPUESTA DEL ENVIO DE INFORMACION
$response = json_decode(curl_exec($curl), true);
//IMPRIMIMOS LA RESPUESTA 
print_r($response);
//OBTENEMOS EL CODIGO DE LA RESPUESTA
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//CERRAMOS EL CURL
curl_close($curl);
echo "todo bien";
?>