<?php
/*
    1. Construisez un tableau à 2 dimensions, associant des noms de couleur à des objets (par exemple, rouge : tomate et camion de pompiers)

        Rouge ----- Tomate
                 -- Camion de pompiers
        Vert ------ Pomme
                 -- Salade

    2. Parcourez l'ensemble de ce tableau en utilisant deux boucles `foreach`. Produisez une page HTML lisible affichant le contenu de ce tableau.
 */

$couleursObjets = [
    'Rouge' => [
        'Tomate',
        'Camion de pompiers'
    ],
    'Vert' => [
        'Pomme',
        'Salade'
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP - Arrays</title>
</head>
<body>
    <?php
        foreach ($couleursObjets as $couleurs => $objets) {
            echo '<p>La couleur "'.$couleurs.'" correspond aux objets :<br><ul>';
            foreach ($objets as $couleur => $objet) {
                echo '<li>'.$objet.'</li>';
            }
            echo '</ul></p>';
        }
        
    ?>
</body>
</html>

