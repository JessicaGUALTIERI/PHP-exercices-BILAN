<?php
    /*
        Transformer la boucle de l'exercice 018 en boucle do...while, pour que le résultat soit exactement le même
     */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP - boucle Do While</title>
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
            do {
                echo '<tr>';
                for ($j = 1 ; $j <= 10 ; $j++) {
                    echo '<td>&nbsp;&nbsp;&nbsp;'.$indice.'&nbsp;&nbsp;&nbsp;</td>';
                    $indice++;
                }                                  
                echo '</tr>';
                $i++;
            } while ($i <= 10);
        ?>
    </table>
</body>
</html>