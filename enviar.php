<html lang="es">

<head>

</head>

<body>
    <?php
    //Recibimos los campos del formulario
    if (!empty($_POST['nombre'])) $nombre = $_POST['nombre'];
    else $nombre = '';
    if (!empty($_POST['email'])) $email = $_POST['email'];
    else $email = '';
    if (!empty($_POST['mensaje'])) $mensaje = $_POST['mensaje'];
    else $mensaje = '';
    $headers = "From:" . $email;
    $asunto = 'MENSAJE DE HyS Office';
    //Acomodamos todo para darle orden al cuerpo del mensaje
    mail("bazo.pedro@gmail.com", $asunto, $mensaje, $headers);
    header("Location: contact.php");

    ?>
    <script>
        alert("Tu mensaje se ha enviado correctamente");
        javascript:history.back();
    </script>
</body>

</html>