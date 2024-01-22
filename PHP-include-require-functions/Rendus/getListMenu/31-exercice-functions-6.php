<?php
    /*
        1. Dans le fichier `functions.php`, créez une nouvelle fonction :
        `getListMenu` qui renverra une liste ul > li, dont chacun des éléments
        sera contenu dans un tableau passé en paramètre.

        On appelera cette fonction ainsi :

        $myMenuArray = array('Homepage', 'Archives', 'Plan du site');
        $myMenu = getListMenu($myMenuArray);
        echo $myMenu;
        <ul>
            <li><a href="home.php">Homepage</a></li>
            ...
        </ul>

        Bonus : 
        2. Modifiez cette fonction pour qu'elle puisse également prendre
        en compte l'url de chacune de ces pages :
            - On modifiera le tableau passé en paramètre
            - Les éléments de liste <li> contiendront un <a> dirigeant vers chacune des pages
     */

     require_once 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php 
    echo getListMenu([
        'Homepage',
        'Archives',
    ]);
    
    $tab = array(
        'Google' => 'https://www.google.fr/',
        'Facebook' => 'https://www.facebook.fr',
        'Twitter' => 0);

    getListMenuURL($tab);
    ?>
</body>
</html>