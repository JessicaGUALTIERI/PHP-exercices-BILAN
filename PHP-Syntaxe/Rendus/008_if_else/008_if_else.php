<?php

    /*

        1. En se basant sur la fiche 'personnage', faire en sorte que, si sa caractéristique "Endurance" ou "Résistance"
        est supérieure à 9, un message supplémentaire s'affiche :

        <div class="alert">
            <strong>Félicitations !</strong> Votre personnage est prêt à combattre le boss <strong>WebForce3 !</strong>
        </div>

        2. Ajouter une condition : si cette caractéristique est en-dessous de 5, le message suivant s'affichera :

        <div class="alert">
            <strong>Attention !</strong> Votre personnage doit reprendre du poil de la bête !
        </div>

     */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice fiche de personnage</title>
  <link  href="main.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
  <h1>Mon super perso</h1>
  <div class="container">
		<div class="infos-perso">
			<?php
				$classe = 'mage';
				$pseudo = 'Jessixica';
				$region = 'Bonta';
				$hp = 250;
				$lvl = 12;
				$puissance = 110;
				$resistance = 4;
				$endurance = 11;
				$caracteristiques = array(
					'sorts' => array('Intervention stellaire','Envolée des songes','Supernova','Soins cosmiques')
				);
				$xp = 360;
				$xpLevel = 400;
				echo '<div class="bjr"> Bonjour <span class="pseudo">',$pseudo,'</span>, ',$classe,' de ',$region,' ! </div>';

				echo '<br> <div class="infos"> Vous êtes actuellement niveau ','<span class="lvl">',$lvl,'</span> (',$xp/$xpLevel*100,'% du niveau : ',$xp,'/',$xpLevel,'xp).';

				echo '<br>Vous connaissez les sorts : ','<span class="sorts">',$caracteristiques['sorts'][0],'</span>, ','<span class="sorts">',$caracteristiques['sorts'][1],'</span>, ','<span class="sorts">',$caracteristiques['sorts'][2],'</span> et <span class="sorts">',$caracteristiques['sorts'][3],'</span>.';
				
				echo '<br><br>Vos caractéristiques sont :<br> <ul> <li>Points de vie : <span class="hp">',$hp,'</span></li><li>Puissance : <span class="ap">',$puissance,'</span></li> <li>Resistance : <span class="rm">',$resistance,'</span></li> <li>Endurance : <span class="endurance">',$endurance,'</span></li> </ul></div><br>';

                if ($resistance > 9 || $endurance > 9) {
                    echo '<div class="alert"><strong>Félicitations !</strong> Votre personnage est prêt à combattre le boss <strong>WebForce3 !</strong></div>';
                } else {
                    if ($resistance < 5 || $endurance < 5) {
                        echo '<div class="alert"><strong>Attention !</strong> Votre personnage doit reprendre du poil de la bête !</div>';
                    }
                }
			?>
		</div>
		<div class="image-perso">
			<img src="./img/mage.jpg" alt="Avatar d'un mage de jeu">
		</div>
  </div>
</body>

</html>
