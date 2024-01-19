<?php

    /*
        1. A l'aide d'une boucle `while`, écrire un tableau HTML comportant 10 lignes.

        2. Chacune des lignes comportera 10 cases, générées par une boucle `for`.

        3. Chaque case sera numérotée de 1 à 100.
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP - boucle While</title>
    <link  href="main.css" rel="stylesheet">
</head>
<body>
    <style>
        table {
            background: #000000;
            text-align : center;
        }
        td {
            background: #ffffff;
        }
    </style>
    <table>  
        <?php
        $i = 1;
        $indice = 1;
            while ($i <= 10) {
                echo '<tr>';
                for ($j = 1 ; $j <= 10 ; $j++) {
                    echo '<td>&nbsp;&nbsp;&nbsp;'.$indice.'&nbsp;&nbsp;&nbsp;</td>';
                    $indice++;
                }                                  
                echo '</tr>';
                $i++;
            }
        ?>
    </table>
</body>
</html>