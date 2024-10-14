<?php
    setcookie(
            'Nom',
            'Jose',
        [
            'expires' => time() + 3600,
            'path' => '/',
            'domain' => ''
        ]
    );
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo cookie segura</title>
</head>
<body>

</body>
</html>
