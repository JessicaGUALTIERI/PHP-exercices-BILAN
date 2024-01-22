<?php
/*
  Quelques exercices pratiques sur les chaines de caractères :

  Créez le code PHP qui permet de réaliser ces opérations :

  1. Un formulaire HTML comportant un champ de texte, Le formulaire pointera sur la même page pour traiter les résultas en PHP.
  2. Les boutons `submit` envoient la chaine entrée, et qui affiche dans un <div> le résultat du traitement de cette chaine.
  3. Le premier submit renvoie la chaine en majuscules
  3. le second la chaine en minuscules
  4. le troisième ajouter une majuscule à chaque mot
  5. Le quatrième ajouter une majuscule, mais seulement au début de la chaine.
  6. Le cinquième n'affichera la chaine que jusqu'au caractère '.' (point) non inclus
  - Utilisez pour cela la fonction `explode`.
  - Utilisez maintenant la fonction `strpos` et `substr` pour produire le même résultat.
  7. Bonus : Créez pour finir le dernier submit affiche les deux premiers mots de la chaine entrée, séparés par un tiret ("-")
  S'il n'y a pas assez de mots, affichez le message "Entrez au moins deux mots"
 */


function modif() {
  if ($_POST) {
    $string = $_POST['string'];
    foreach ($_POST as $key => $value) {
      if ($key == 'upper') {
        $newString = strtoupper($string);
      }
      if ($key == 'lower') {
        $newString = strtolower($string);
      }
      if ($key == 'ucwords') {
        $newString = ucwords($string);
      }
      if ($key == 'ucfirst') {
        $newString = ucfirst($string);
      }
      if ($key == 'truncate') {
        $point = false;
        for ($i=0; $i < strlen($string); $i++) { 
          if ($string[$i] == '.') {
            $point = true;
          }
        }
        if ($point) {
          $newString = explode('.',$string);
          $newString = $newString[0];
        } else {
          die('Pas de "." dans la phrase entrée.');
        }
      }
      if ($key == 'separate') {
        $espace = false;
        for ($i=0; $i < strlen($string); $i++) { 
          if ($string[$i] == ' ') {
            $espace = true;
          }
        }
        if ($espace) {
          $newString = explode(' ',$string);
          $newString = $newString[0].'-'.$newString[1];
        } else {
          die('Entrez au moins deux mots');
        }
      }
    }
    echo '<pre>';
    print_r($newString);
    echo '</pre>';
  }
}
  
?>
<html lang="fr">

<head>
  <title>Chaines</title>
</head>

<body>
  <form action="#" method="post">
    <!-- champ de texte en entrée -->
    <input type="text" id="string" name="string">
    <!-- différentes actions : -->
    <input type="submit" name="upper" value="Majuscules">
    <input type="submit" name="lower" value="Minuscules">
    <input type="submit" name="ucwords" value="Maj. pour les mots">
    <input type="submit" name="ucfirst" value="Maj. pour la phrase">
    <input type="submit" name="truncate" value="Tronquer au point">
    <!-- bonus -->
    <input type="submit" name="separate" value="Deux premiers mots">
  </form>

  <h3>Résultat</h3>
  <p>
    <?php if ($_POST) {
            echo 'Chaîne entrée : "'.$_POST['string'].'"';
          }
          echo '<br>';
          modif();
    ?>
  </p>
</body>

</html>