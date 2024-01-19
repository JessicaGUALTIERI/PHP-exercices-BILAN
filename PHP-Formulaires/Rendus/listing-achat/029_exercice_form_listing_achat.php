<?php

/*
    1. Concevez un formulaire PHP qui passera les données
    suivantes en POST à un deuxième script :
            - Matériel (carte mère, RAM, souris, écran..) : dropdown (select)
            - Description (ex : "MSI X99A")
            - Date d'achat : Utilisez un datepicker JQuery
            - Prix d'achat : Champ texte

    2. Dans le script qui recoit les données de ce formulaire,
    affichez une phrase en français du genre :
            "Le 9/02/15, j'ai acheté : carte mère MSI X99A pour 350€"
*/
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        </script>
    </head>
    <body>
        <form action="donnees_form.php" role="form" method="POST">
            <label>Matériel :</label>    
            <select name="matos">
                    <option value="Carte mère">Carte mère</option>
            </select>
            
            <br>

            <label>Description :</label>
            <textarea name="desc"></textarea>

            <br>

            <p>Date: <input type="text" id="datepicker" name="date"></p>

            <br>


            Prix d'achat : <input type="text" name="prix">

            <br>

            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>


</head>
<body>
 
