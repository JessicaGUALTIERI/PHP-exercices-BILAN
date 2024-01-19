<?php

    if($_POST) {
        $error = false;
        $lien = '<a href="029_exercice_form_validation.php">Retour</a>';
        foreach ($_POST as $key => $value) {
            // if (isset($_SESSION[$key] && !empty($value))) {
            //     $_SESSION[$key] = $value;
            // }
            if( empty($value) && $key != 'edition') {
                echo 'Une erreur est survenue, le champ '.$key.' est vide.<br>';
                $error = true;
                echo $lien;
            };
            if ($key == 'isbn' && (strlen($value) < 13 || strlen($value) > 18)) {
                echo 'ERREUR : L\'ISBN doit comporter entre 13 et 18 caractères.<br>';
                $error = true;
                echo $lien;
            };
            if ($key == 'parution' && strlen($value) != 4) {
                echo 'ERREUR : L\'année de parution doit comporter 4 caractères.<br>';
                $error = true;
                echo $lien;
            }
        } 
        if(!$error) {
            echo 'Le formulaire a bien été complété et transmis';
        }
    }
?>