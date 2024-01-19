<?php
/*
  1. Ecrivez un script PHP qui indique le nombre de chaines de caractères vides dans le tableau $strings

  2. Indiquez maintenant le nombre de chaines qui contiennent effectivement du texte
 */

$countEmpty = 0;
$countFull = 0;
$strings = array('Bonjour', '', 'Bom dia', 'Hello', 'Guten Tag', '');

$count_string = count($strings);
        echo 'Le tableau est composé de '.$count_string.' valeurs';

        $count_string_set=0;
        foreach ($strings as $valeur) {
            if (!empty($valeur)) {
                $count_string_set++;
            }
        }
        echo ' dont : '.$count_string_set.' valeurs non-vides et '.($count_string-$count_string_set).' valeurs vides.';