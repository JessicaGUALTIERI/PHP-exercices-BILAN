<?php

    /*
    Créez deux pages :
        - signin.php : Page d'inscription d'un utilisateur, avec les champs suivants :
            - Nom
            - Prénom
            - E-mail
            - Mot de passe
            - Confirmation de mot de passe
            - Checkbox "S'abonner à la newsletter"

        - recap-signin.php : Page affichant le récapitulatif des informations saisies.
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
        <form action="recap_signin.php" role="form" method="POST">
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

                S'abonner à la newsletter :
                <input type="checkbox" name="newsletter">

                <br><br><br>

                <input type="submit" value="Envoyer">
        </form>
        
    </body>
</html>


</head>
<body>