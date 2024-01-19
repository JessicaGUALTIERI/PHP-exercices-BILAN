<?php
/*
 * On doit souvent manipuler dans des scripts PHP des variables dont on est pas certain de l'existence, par exemple après une requête en base de données.
 * La fonction `isset` permet de vérifier si une variable existe bien.
 * Ce code risque de générer des erreurs, rendez-le sûr à l'aide de la fonction isset()
 */

$nom = 'Preteur';
$prenom = 'Jacques';
$profession;
$age = 42;
?>
<html lang="fr">
    <head>
        <title>Isset</title>
    </head>
    <body>
    <div class="container">
        <?php if(isset($nom)): ?>
            Nom : <?php echo $nom ?><br>
        <?php endif ?>
            
        <?php if(isset($prenom)) : ?>
            Prénom : <?php echo $prenom ?><br>
        <?php endif ?>
            
        <?php if(isset($profession)) : ?>
            Profession : <?php echo $profession ?><br>
        <?php endif ?>
            
        <?php if(isset($nationalite)) : ?>
            Nationalité : <?php echo $nationalite ?><br>
        <?php endif ?>
            
        <?php if(isset($age)) : ?>
            Age : <?php echo $age ?><br>
        <?php endif ?>
    </div>
    </body>
</html>