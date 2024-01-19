<?php 
    
//Exercice 2
/*
Ecrivez un script qui vous dit "Bonjour", "Bonsoir" ou "Bonne nuit" en fonction de l'heure qu'il est actuellement.
*/

date_default_timezone_set('Europe/Paris');

// POUR LES TESTS : ne fonctionnent uniquement à l'heure de rédaction de l'exercice, à modifier
$reponse = time(); // Pour le bonjour
//$reponse = strtotime('+8 hours'); // Pour le bonsoir 
//$reponse = strtotime('+12 hours'); // Pour le bonne nuit

if ((date('H',$reponse) > 06) && (date('H',$reponse) < 17)) {
    echo 'Il est '.date('H:i:s',$reponse).'. Bonjour !';
} else if ((date('H',$reponse) > 17) && (date('H',$reponse) < 22)) {
    echo 'Il est '.date('H:i:s',$reponse).'. Bonsoir !';
} else {
    echo 'Il est '.date('H:i:s',$reponse).'. Bonne nuit !';
}