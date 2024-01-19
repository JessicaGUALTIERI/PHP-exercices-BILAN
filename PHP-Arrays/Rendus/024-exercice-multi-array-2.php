<?php
/*
  [Étape 1]
    Utilisez le tableau $colorsObjectsList défini ci-dessous pour produire une table HTML correspondant à ce modèle :

  +---------------+--------------------+
  | Couleurs      | Objets             |
  +---------------+--------------------+
  | Rouge         | Camion de pompiers |
  +---------------+--------------------+
  | Rouge         | Tomates            |
  +---------------+--------------------+
  | Rouge         | Piment rouge       |
  +---------------+--------------------+
  | Jaune         | Canari             |
  +---------------+--------------------+
  | Jaune         | Citron             |
  +---------------+--------------------+
  | Noir          | Corbeau            |
  +---------------+--------------------+
  | Noir          | Ardoise            |
  +---------------+--------------------+
  | Noir          | Encre              |
  +---------------+--------------------+


  /*

  [Étape 2 - Bonus]
    1. Produisez maintenant le tableau ci-dessous (notez que certaines cases sont vides) :
 
  +---------------+--------------------+
  | Couleurs      | Objets             |
  +---------------+--------------------+
  | Rouge         | Camion de pompiers |
  +---------------+--------------------+
  |               | Tomates            |
  +---------------+--------------------+
  |               | Piment rouge       |
  +---------------+--------------------+
  | Jaune         | Canari             |
  +---------------+--------------------+
  |               | Citron             |
  +---------------+--------------------+
  | Noir          | Corbeau            |
  +---------------+--------------------+
  |               | Ardoise            |
  +---------------+--------------------+
  |               | Encre              |
  +---------------+--------------------+


    2. Affichez un message après le tableau : "Il y a 3 objets de couleur 'Rouge', 2 objets de couleur 'Jaune' et 3 objets de couleur 'Noir'"
    Ce message sera construit automatiquement en fonction de la composition du tableau


 */ 

$colorsObjectsList = [
    0 => [
        'color' => 'Rouge',
        'objects' => [
            'Tomate',
            'Camion de pompiers',
            'Piment rouge',
        ]
    ],
    1 => [
        'color' => 'Jaune',
        'objects' => [
            'Canari',
            'Citron',
        ]
    ],
    2 => [
        'color' => 'Noir',
        'objects' => [
            'Corbeau',
            'Ardoise',
            'Encre',
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    table {
      background: #000000;
    }
    td,th {
      background: #ffffff;
    }
  </style>
  <table>
    <thead>
      <tr>
        <th>Couleurs</th>
        <th>Objets</th>
      </tr>
    </thead>

    <?php
      for ($i=0; $i < 3; $i++) { 
        foreach ($colorsObjectsList[$i]['objects'] as $objets) {
          echo '<tr><td>'.$colorsObjectsList[$i]['color'].'</td><td>'.$objets.'</td></tr>';
        }
      }
    ?>
  </table>
  <br>
  <table>
    <thead>
      <tr>
        <th>Couleurs</th>
        <th>Objets</th>
      </tr>
    </thead>
    <?php
      for ($i=0; $i < 3; $i++) { 
        foreach ($colorsObjectsList[$i]['objects'] as $objets) {
          if ($colorsObjectsList[$i]['objects'][0] == $objets) {
            echo '<tr><td>'.$colorsObjectsList[$i]['color'].'</td><td>'.$objets.'</td></tr>';
          } else {
            echo '<tr><td>&nbsp</td><td>'.$objets.'</td></tr>';
          }
        }
      }
    ?>
  </table>
  <?php
    echo 'Il y a ';
    for ($i=0; $i < count($colorsObjectsList); $i++) { 
      echo (count($colorsObjectsList[$i]['objects'])).' objets de couleur '.$colorsObjectsList[$i]['color'];
      if ($i == count($colorsObjectsList) - 1) {
        echo '.';
      } elseif ($i == count($colorsObjectsList) - 2) {
        echo ' et ';
      } else {
        echo ', ';
      }
    }
  ?>
</body>
</html>