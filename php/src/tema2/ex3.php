<?php
    session_start();

    $_SESSION['nom'] = 'Jose';
    $_SESSION['rol'] = 'Admin';

    session_unset();
    session_destroy();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>