<?php
/*
 * Complétez le script PHP suivant de manière à afficher un tableau HTML composé de $nbLignes lignes
 * et de $nbColonnes colonnes.
 * 
 * On affichera un indice dans chaque case, en commençant par 1.
 * 
 * [Facultatif] Une case sur deux sera grisée.
 */

$nbLignes = 4;
$nbColonnes = 2;


// 1 2
// 3 4
// 5 6
// 7 8

?>


<html lang="fr">
    <head>
        <title>Tableau Dynamique</title>
    </head>
    <body>
        <style>
            .gris {
                background: #cccccc;
            }
            table {
                background: #000000;
            }
            td {
                background: #ffffff;
            }
        </style>
        <table>
            <tbody>
                <?php
                    $indice = 1;
                    echo 'Voici un tableau de '.$nbLignes.' lignes, chacune composée de '.$nbColonnes.' colonnes :','<br>','<br>';
                    for ($i = 1 ; $i <= $nbLignes ; $i++) {
                        echo '<tr>';
                        for ($j = 1 ; $j <= $nbColonnes ; $j++) {
                            if ($indice == 1 || $indice == 4 || $indice == 5 || $indice == 8) {
                                echo '<td class="gris">&nbsp;&nbsp;'.$indice.'&nbsp;&nbsp;</td>';
                                $indice++;
                            } else {
                                echo '<td>&nbsp;&nbsp;'.$indice.'&nbsp;&nbsp;</td>';
                                $indice++;
                            }
                        };
                        echo '</tr>';
                    };
                ?>
            </tbody>
        </table>
    </body>
</html>