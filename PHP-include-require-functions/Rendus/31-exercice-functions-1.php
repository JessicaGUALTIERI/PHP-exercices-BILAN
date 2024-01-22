<?php
    /*
        1. Créez la fonction `getRealString` qui recevra en argument une chaine de caractères,
        et qui renverra cette chaine débarassée d'espacements au début et à la fin.
        La chaine renvoyée sera également mise en minuscules.

        2. Modifiez cette fonction pour qu'elle supprime également les balises HTML
        qui pourraient être présentes à l'intérieur.

     */

    function getRealString($string) {
        $string = trim($string);
        $string = strtolower($string);
        $string = strip_tags($string);
        echo $string;
    }

    getRealString('    <h1>   TEST 1, 2,       TeSt 3, 4     </h1>       ');