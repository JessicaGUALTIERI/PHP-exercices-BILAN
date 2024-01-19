<?php
//Exercice 1
/*
  À l'aide de la fonction date(), affichez dans une liste la date du jour, sous différentes formes :

      1. 10/10/2024
      2. 2024-10-10
      3. Le 10/10 à 10h30
      4. Il est exactement 10:30 et 35 seconde(s)
        Bonus : Prenez en compte le "s" qui apparaîtra uniquement au pluriel
*/

date_default_timezone_set('Europe/Paris');

            $reponse_1 = date('d/m/Y');
            echo '<li>'.$reponse_1,'</li>';

            $reponse_2 = date('Y-m-d');
            echo '<li>'.$reponse_2,'</li>';

            $reponse_3_date = date('d/m');
            $reponse_3_heure = time();
            echo '<li>Le '.$reponse_3_date.' à '.date('H:i',$reponse_3_heure),'</li>';

            $reponse_4 = time();
            echo '<li>Il est exactement '.date('H:i',$reponse_4).' et '.date('s',$reponse_4);
            if (date('s',$reponse_4) > 1) {
                echo ' secondes.</li>';
            } else {
                echo ' seconde.</li>';
            }