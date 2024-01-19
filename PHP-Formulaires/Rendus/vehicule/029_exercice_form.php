<?php

   /*
        1. Créez un formulaire en HTML renseignant les caractéristiques d'un véhicule
        (poids, chevaux, vitesse de pointe, type de boite..)

        2. Créez un script PHP `enregistrer_vehicule.php` qui simulera l'insertion
        du véhicule en base de données.
        Ce script affichera en réalité un message "Le véhicule a bien été ajouté en base de données"
        seulement si tous les champs sont remplis

        3. Dans la page de confirmation, ajoutez si besoin un message
        "Merci d'entrer les champs suivants :
        - Chevaux
        - Vitesse de pointe
        (et les autres champs manquants)"

   */ 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>
    </head>
    <body>
        <form action="donnees_form.php" role="form" method="POST">
            Nom : <input type="text" name="nom">

            <br>

            <label for="marque-select">Marque du véhicule :</label>
            <select name="marque">
                <option value="">--Choisir la marque--</option>
                <option value="kia">Kia</option>
                <option value="renault">Renault</option>
                <option value="peugeot">Peugeot</option>
                <option value="citroen">Citroën</option>
                <option value="maserati">Maserati</option>
                <option value="ferrari">Ferrari</option>
            </select>

            <br>

            Chevaux : <input type="number" name="chevaux">

            <br>

            Vitesse de pointe (km/h) : <input type="number" name="vitesse">
            
            <br>

            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>