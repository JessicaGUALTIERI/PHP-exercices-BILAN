<?php
    $nom = strip_tags($_POST['nom']);
   $marque = strip_tags($_POST['marque']);
   $chevaux = strip_tags($_POST['chevaux']);
   $vitesse = strip_tags($_POST['vitesse']);
   if (!empty($nom) && !empty($marque) && !empty($chevaux) && !empty($vitesse)) {
         echo "Le véhicule a bien été ajouté en base de données";
   } else {
         echo "Impossible d'enregistrer le véhicule ! Merci de renseigner les champs manquants : <ul>";
         foreach ($_POST as $label => $valeur) {
            if (empty($valeur)) {
                echo '<li>'.$label.'</li>';
            }
         }
   }
?>