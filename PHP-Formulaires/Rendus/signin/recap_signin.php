<?php
    if($_POST) {
        $error = false;
        $mail = $_POST['mail'];
        
        foreach ($_POST as $key => $value) {
            if( empty($value) ) {
                echo "Une erreur est survenue, le champ $key est vide.<br>";
            };
            if(!$error) {
                $error = empty($value);
            }
        }

        if ($_POST['mdp'] != $_POST['mdpconf']) {
            echo 'Une erreur est survenue : les mots de passe ne correspondent pas. Veuillez réessayer.<br><br>';
            echo '<a href="029a_exercice_form_signin.php">Retour</a>';
            $error = true;
        }
        
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
           echo 'Une erreur est survenue : mail invalide. Veuillez réessayer.<br><br>';
           echo '<a href="029a_exercice_form_signin.php">Retour</a>';
            $error = true;
        }
        
        if(!$error) {
            echo '<p>Voici votre récapitulatif de connexion :<br>
            Nom : '.$_POST['nom'].'<br>
            Prénom : '.$_POST['prenom'].'<br>
            Mail : '.$_POST['mail'].'<br>
            Mot de passe : '.$_POST['mdp'].'</p>';
            if (isset($_POST['newsletter'])) {
                echo 'Inscription à la newsletter demandée.';
            }
        }
    }
?>