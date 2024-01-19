<?php 
//Exercice 3
/*
  Ecrivez un script qui affiche la date à laquelle nous serons dans 
      - une semaine
      - un mois
      - un an
*/

date_default_timezone_set('Europe/Paris');

$date = strtotime('now');
echo 'La date d\'aujourdh\'hui est le '.date('d/m/Y',$date).' !<br><br>';

$date = strtotime('+1 week');
echo 'La date dans une semaine sera '.date('d/m/Y',$date).' !<br><br>';

$date = strtotime('+1 month');
echo 'La date dans un mois sera '.date('d/m/Y',$date).' !<br><br>';

$date = strtotime('+1 year');
echo 'La date dans un an sera '.date('d/m/Y',$date).' !';