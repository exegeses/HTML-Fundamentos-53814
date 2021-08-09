<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header></header>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="empresa.html">Empresa</a>
        <a href="servicios.html">Servicios</a>
        <a href="clientes.html">Clientes</a>
        <a href="contacto.html">Contacto</a>
    </nav>
    <main>
        <h1>Contáctenos</h1>

        <p>
<?php
    //capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentarios = $_POST['comentarios'];

    //configuramos datos de email de destino
    $destinatario = "ACA PONE TU EMAIL";
    $asunto = 'Email enviado desde mi sitio';
    $cuerpo = "<div style='padding:30px; background-color: #f9d5c1; color: #723d20;'>";
    $cuerpo .= "Nombre: ".$nombre. '<br>';
    $cuerpo .= "Email: ".$email. '<br>' ;
    $cuerpo .= "Comentarios: ".$comentarios;
    $cuerpo .= '</div>';

    //
    $headers[] = 'MIME-Version: 1.0'."\r\n";
    $headers[] = 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    //enviamos email
    mail( $destinatario, $asunto, $cuerpo, $headers );

    //mensaje de agradecimiento
    echo 'Gracias '.$nombre. 'por contactanos.';
?>
        </p>
        

    </main>
    <footer></footer>
</body>
</html>