<?php
    /*

        1. En utilisant le code de l'exercice sur l'enregistrement d'un utilisateur, fusionnez les deux fichiers signin.php et recap-signin.php en un seul.
                Si on arrive sur la page sans que le formulaire ait été soumis, on affichera le formulaire,
                sinon on affichera le récapitulatif.

        2. Ajouter des validateurs sur les différents champs du formulaire :
                - Le nom et le prénom sont obligatoires.
                - L'e-mail doit avoir une longueur comprise entre 8 et 50 caractères
                - Les champs "Mot de passe" et "Confirmation" doivent être identiques et comporter au moins 8 caractères

        3. Ajouter une case "J'accepte les conditions d'utilisation du produit.", qui doit obligatoirement être cochée.

        Bonus : Faire en sorte que les valeurs du formulaire réapparaissent à chaque soumission, en cas d'erreur.

		
    */

    function formulaire() {
        echo '<form action="#" role="form" method="POST">
                Nom :<br>
                <input type="text" name="nom">
        
                <br>

                Prénom :<br>
                <input type="text" name="prenom">

                <br>

                Mail :<br>
                <input type="text" name="mail">

                <br>

                Mot de passe :<br>
                <input type="password" name="mdp">

                <br>

                Confirmation de mot de passe :<br>
                <input type="password" name="mdpconf">

                <br>

                S\'abonner à la newsletter :
                <input type="checkbox" name="newsletter">

                <br>

                J\'accepte les conditions d\'utilisation du produit :
                <input type="checkbox" name="newsletter" required>

                <br><br><br>

                <input type="submit" value="Envoyer">
        </form>';
    }
    

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>
    </head>
    <body>
        
        <?php
        if($_POST) {
                
                $mail = $_POST['mail'];
                $error = false;
                foreach ($_POST as $key => $value) {
                        if(( $key == 'nom' && empty($value) ) ||  ( $key == 'prenom' && empty($value) )) {
                        echo "Une erreur est survenue, le champ $key est vide.<br>";
                        $error = true;
                        }
                }
        
                if ($_POST['mdp'] != $_POST['mdpconf']) {
                        echo 'Une erreur est survenue : les mots de passe ne correspondent pas. Veuillez réessayer.<br><br>';
                        $error = true;
                }

                if (!empty($_POST['mdp']) && strlen($_POST['mdp']) < 8) {
                        echo 'Une erreur est survenue : le mot de passe est trop court (8 caractères requis). Veuillez réessayer.<br><br>';
                        $error = true;
                }
                
                if (!empty($_POST['mail']) && !filter_var($mail, FILTER_VALIDATE_EMAIL) || strlen($_POST['mail']) < 8 || strlen($_POST['mail']) > 50) {
                        echo 'Une erreur est survenue : mail invalide. Veuillez réessayer.<br><br>';
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

                if ($error) {
                        formulaire();
                }
        } else {
                formulaire();
        }
        ?>
    </body>
</html>


</head>
<body>