<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once './functions.php';

    define("PARAULA", "Teclado");

    $longitud = strlen(PARAULA);

    $arrayGuions = [];

    for($i = 0; $i < $longitud; $i++){
        $arrayGuions[] = '_';
    }

    imprimir($arrayGuions);

    comprovarIntents(PARAULA , 'a', $arrayGuions);

    
    ?>
</body>
</html>