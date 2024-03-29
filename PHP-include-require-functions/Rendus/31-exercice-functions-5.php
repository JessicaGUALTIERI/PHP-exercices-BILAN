<?php

    /*
     * Créez une fonction isStringLowerCase(), qui acceptera une chaine de caractères en paramètre.
     * Elle renverra true si toutes les lettres sont en minuscule.
     * Exemple : 
     * 
     * 
            var_dump(isStringLowerCase('je suis une chaine en minuscules :) '));    -> affichera true
            var_dump(isStringLowerCase('moi j\'aime ECRIRE EN GROS'));              -> affichera false
     * 
     * Fonctions utiles qu'il sera possible d'utiliser :
     *  - ord()
     *  - strcmp()
     * 
     * Rappel : les chaines de caractères sont comme des tableaux, on a le droit d'écrire `echo $string[0];` pour afficher la première lettre de la chaine
     */

       function isStringLowerCase($string) {
              $result = 'true';
              for ($i=0; $i < strlen($string); $i++) { 
                     $value = ord($string[$i]);
                     if ($value > 65 && $value < 90) {
                            $result = 'false';
                     }
              }
              echo $result;
       }

       isStringLowerCase('je suis une chaine en minuscules :) ');
       echo '<br>';
       isStringLowerCase('moi j\'aime ECRIRE EN GROS');
