<?php

    if(isset($_COOKIE['nom_usuari'])){
        $nom = $_COOKIE['nom_usuari'];


        $saludo = 'Hola '. $nom;
        setcookie('nom_usuari', 'jose', time() + 3600, '/');
        echo 'Hola ' . $nom;
        echo $saludo;
    }else{
        echo 'Cookie no encontrada, se la habrán comido';
    }
?>
