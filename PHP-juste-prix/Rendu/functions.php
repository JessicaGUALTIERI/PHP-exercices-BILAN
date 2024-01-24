<?php

/*
    Créez un petit jeu en PHP :

    Le jeu du plus ou moins.

    Le serveur génère un nombre aléatoire compris entre 1 et 100.

    L'utilisateur est invité à entrer un nombre.

    Le serveur indique si le nombre entré est inférieur ou
    supérieur au sien.

    Une fois que l'utilisateur a trouvé le nombre, un message
    est affiché, indiquant le nombre de tentatives qu'il aura
    fallu.

    On créera une fonction `testerNombre($nombreUtilisateur, $nombreATrouver)`
    qui renverra trois valeurs différentes, selon le cas :
        1 : le nombre entré est encore trop petit
        -1 : le nombre entré est encore trop grand
        0 : le nombre entré est correct

    Pour obtenir un nombre aléatoire en PHP, cherchez dans la 
    documentation la fonction appropriée.


    Deuxième étape :
    - Filtrez et nettoyez les saisies utilisateur :
        on attend rien d'autre qu'un nombre.
    - Faites en sorte qu'on puisse voir tous les essais déjà réalisés, ainsi que le message "trop grand" ou "trop petit" à côté de chaque essai.

        On pourra utiliser des tableaux d'éléments HTML dans le formulaire :
        <input type="hidden" name="mon-tableau[]" value="Première valeur" />
        <input type="hidden" name="mon-tableau[]" value="Deuxième valeur" />
        <input type="hidden" name="mon-tableau[]" value="Troisième valeur" />

        => Ces éléments, placés dans un formulaire envoyé en POST, seront reçues ainsi par PHP :
        $_POST['mon-tableau'] => array(
            0 => "Première valeur"
            1 => "Deuxième valeur"
            2 => "Troisième valeur"
        )

    - Affichez le temps écoulé entre le début et la fin de la partie.

*/

// REGLAGES :
date_default_timezone_set('Europe/Paris');
session_start();

// DECLARATIONS DE VARIABLES :
if ($_POST) {
    // Heure du début
    if (!isset($_SESSION['debut'])) {
        $_SESSION['debut'] = microtime(true);
    }
    // Heure de fin :
    $_SESSION['fin'] = microtime(true);
    // Conditions entre 1 et 100 :
    if ($_POST['nombreUtilisateur'] < 1 || $_POST['nombreUtilisateur'] > 100) {
        echo '<p class="error"><U>ERREUR :</U><br>Veuillez entrer un nombre entre 1 et 100.<br></p>';
        $error = true;
    } else {
        $nombreUtilisateur = $_POST['nombreUtilisateur'];
        $error = false;
    }
    // On set les SESSION
    if (!isset($_SESSION['nombreATrouver'])) {
        $_SESSION['nombreATrouver'] = rand(1, 100);
    }
    if (!isset($_SESSION['nombreTentatives'])) {
        $_SESSION['nombreTentatives'] = 1;
    }
    if (!isset($_SESSION['history']) && !$error) {
        $_SESSION['history'] = [];
    }
    // On réattribue la SESSION à une variable pour la fonction :
    $nombreATrouver = $_SESSION['nombreATrouver'];
    // Si aucune erreur, on démarre la fonction qu'on stocke dans une variable :
    if (!$error) {
        $resultat = testerNombre($nombreUtilisateur,$nombreATrouver);
    }
}

// DÉCLARATIONS DE FONCTIONS :
    // FONCTION testerNombre()
        // Fonction qui compare le nombre entré par l'utilisateur au nombre à deviner
        // Renvoie 0 (correct), 1 (inférieur) ou -1 (supérieur)
function testerNombre($nombreUtilisateur,$nombreATrouver) {
    global $error;
    if (!$error) {
        if ($nombreUtilisateur == $nombreATrouver) {
            return 0;
        } elseif ($nombreUtilisateur < $nombreATrouver) {
            return 1;
        } else {
            return -1;
        }
    }   
}
    // FONCTION resultatToString()
        // Fonction qui fait appel à testerNombre() et transforme ce qu'elle retourne en chaîne de caractères
        // Fonction qui fait aussi appel à showHistory() pour afficher l'historique des réponses
        // Aucun retour mais affiche des chaînes de craactère
function resultatToString() {
    global $resultat;
    global $nombreUtilisateur;
    global $error;
    global $debut;
    if (!$error) {
        if ($resultat == 0) {
            $duree = round($_SESSION['fin']-$_SESSION['debut']);
            echo '<h1>VICTOIRE </h1><br>Le nombre recherché était bien "<b class="b">'.$_SESSION['nombreATrouver'].'</b>" et a été trouvé au <b class="b">'.$_SESSION['nombreTentatives'];
            if ($_SESSION['nombreTentatives'] == 1) {
                echo '<sup>er</b></sup>';
            } else {
                echo '<sup>ème</b></sup>';
            }
            echo ' coup !<br>(Durée de la partie : '.$duree.' secondes)';
            session_destroy();
        } elseif ($resultat == 1) {
            $_SESSION['history'][count($_SESSION['history'])] = ['Essai n°'.$_SESSION['nombreTentatives'].' : Le nombre "'.$nombreUtilisateur.'" est <b class="b">inférieur</b> au nombre recherché !<br>'];
            showHistory();
            $_SESSION['nombreTentatives']++;
        } else {
            $_SESSION['history'][count($_SESSION['history'])] = ['Essai n°'.$_SESSION['nombreTentatives'].' : Le nombre "'.$nombreUtilisateur.'" est <b class="b">supérieur</b> au nombre recherché !<br>'];
            showHistory();
            $_SESSION['nombreTentatives']++;
        }
    }
}
    // FONCTION showHistory()
        // Fonction qui permet l'affichage de l'historique des nombres entrés par l'utilisateur
        // Aucun retour mais affiche l'historique
function showHistory() {
    foreach ($_SESSION['history'] as $key => $value) {
        $valueAffichee = implode(' ',$value);
        echo $valueAffichee;
    }
} 

    // FONCTION form()
        // Fonction qui affiche le formulaire
        // Aucun retour mais affiche le formulaire
function form() {
    echo '<h1>LE JUSTE PRIX</h1>
    <form action="" method="post">
        <label>
            <p> Vous devez deviner un nombre mystère entre 1 et 100 :</p>
        </label>
        <input type="number" name="nombreUtilisateur">
        <button type="submit">Deviner</button>
    <form><br>';
}