<?php
    /*
        Créez la fonction `displayDateAndGreetings` qui affichera un message du genre :
        "Bonjour ! Nous sommes le 15/10"
      
        Attention, on demande d'afficher, pas de retourner.
     */
    date_default_timezone_set('Europe/Paris');
    function displayDateAndGreetings() {
        $date = date('d/m');
        echo 'Bonjour ! Nous sommes le '.$date.'.';
    }

    displayDateAndGreetings();