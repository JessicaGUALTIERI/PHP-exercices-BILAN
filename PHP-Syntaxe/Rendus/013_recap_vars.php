<?php

/* 
    Récapitulatif des notions abordées


    Le développeur Senior qui travaille dans la même entreprise que vous vous demande de développer un script PHP.
    Le script affichera une fiche de commande basée sur un tableau PHP.


    [Etape 1] Concevoir le tableau PHP comprenant les objets commandés, leurs quantités et leurs prix.
            Pour ceux qui n'ont pas trop d'imagination, voici quelques exemples de produits pris sur Amazon au hasard :
                    Ultrasport Vélo d'appartement - 89€ HT
                    Thermomètre digital infrarouge - 48,18€ HT
                    Garmin Fenix 2 Montre GPS Outdoor - 259€ HT
                    Ventouse pour GoPro Hero - 10,99€
                    Singer 3229 MC Simple Machine à coudre - 149,90€ HT
                    Adaptateur CPL dLAN 3 ports Ethernet - 44,90€ HT
                    VicTsing 4-Ports USB 3.0 Hub Portable - 14,80€ HT

    [Étape 2] Afficher un tableau HTML décrivant les articles qui ont été commandés

    [Étape 3] Dans de nouvelles colonnes, afficher la quantité, le prix unitaire et le prix total (quantité x prix unitaire)

    [Étape 4] Dans une nouvelle ligne, afficher le total hors taxe et dans une autre le total TTC

*/

$commande = [
    'produit_1' => [
        'Nom' => 'Ultrasport Vélo d\'appartement',
        'Prix' => 89,
        'Quantite' => '3'
    ],
    'produit_2' => [
        'Nom' => 'Thermomètre digital infrarouge',
        'Prix' => 48.18,
        'Quantite' => '1'
    ],
    'produit_3' => [
        'Nom' => 'Garmin Fenix 2 Montre GPS Outdoor',
        'Prix' => 259,
        'Quantite' => '1'
    ],
    'produit_4' => [
        'Nom' => 'Ventouse pour GoPro Hero',
        'Prix' => 10.99,
        'Quantite' => '8'
    ],
    'produit_5' => [
        'Nom' => 'Singer 3229 MC Simple Machine à coudre',
        'Prix' => 149.90,
        'Quantite' => '1'
    ],
    'produit_6' => [
        'Nom' => 'Adaptateur CPL dLAN 3 ports Ethernet',
        'Prix' => 44.90,
        'Quantite' => '0'
    ],
    'produit_7' => [
        'Nom' => 'icTsing 4-Ports USB 3.0 Hub Portable',
        'Prix' => 14.80,
        'Quantite' => '2'
    ]
]
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP : Récapitulatif variables</title>
</head>
<body>
    <style>
        table {
            background: #000000;
        }
        td, th {
            background: #ffffff;
            text-align: center;
        }
        .total {
            background: #000000;
            color: #ffffff;
            border: #ffffff 1px solid;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Quantité</th>
                <th>Prix unitaire (HT)</th>
                <th>Prix du lot (HT)</th>
            </tr>
        </thead>
        <?php
            $somme = 0;
            foreach ($commande as $produit) {
                echo '<tr><td>'.$produit['Nom'].'</td>';
                echo '<td>'.$produit['Quantite'].'</td>';
                echo '<td>'.$produit['Prix'].'€</td>';
                echo '<td>'.$produit['Quantite']*$produit['Prix'].'€</td></tr>';
                $somme += $produit['Quantite']*$produit['Prix'];
            }
            echo '<tr>
            <td colspan="2" class="total">Prix HT :'.$somme.'</td>
            <td colspan="2" class="total">Prix TTC :'.$somme*1.24.'
            </tr>';
        ?>

    </table>
</body>
</html>