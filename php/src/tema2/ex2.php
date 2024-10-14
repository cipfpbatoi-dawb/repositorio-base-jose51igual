<?php
    session_start();

    $_SESSION['nom'] = 'Jose';
    $_SESSION['rol'] = 'Estudiant';

    session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercici 2 sesions</title>
</head>
<body>
    <?php
    echo 'Benvingut '. $_SESSION['nom'] . '<br>';
    echo 'El teu rol es de '. $_SESSION['rol'] . '<br>';
    ?>
    
</body>
</html>