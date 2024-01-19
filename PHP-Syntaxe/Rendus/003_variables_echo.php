<?php

	/*
	
	Vous devez creer une page web présentant les caractéristiques d'un personnage imaginaire,
	issu d'un jeu de role.

	Les informations du personnage seront enregistrees dans des variables.

	On y trouvera :

	- Une image d'avatar
	- Le nom (dans une variable)
	- Le prénom (dans une variable)
	- Un tableau de caractéristiques (dans une variable, on utilisera un tableau associatif)


	*/

$vehicule = [
	'conducteur' => [
		'nom' => 'John',
		'prenom' => 'Doe',
		'permis' => ['B', 'A'],
	],
	'caracteristiques' => [
		'couleur' => 'rouge',
		'annee' => 2020,
		'puissance' => 4,
	],
	'finitions' => [
		'interieur' => [
			'type' => 'cuir',
			'couleur' => 'brun'
		],
		'exterieur' => [
			'attache_remorque' => true,
			'couleur' => 'rouge',
			'vitres' => 'teintées',
		],
	],
];

/*
À l'aide des commandes echo et print_r, affichez les caractéristiques suivantes du véhicule :

- nom et prénom du conducteur
- Tous les permis du conducteurs
- type de finition intérieur
- couleur de finition extérieure
- puissance et année du véhicule
*/

echo '<h1>Exercice PHP : Variables, echo et print_r</h1>';

echo '<p>Nom et prénom du conducteur :</p>';
echo $vehicule['conducteur']['nom'].' '.$vehicule['conducteur']['prenom'].'<br><br>';

echo '<p>Tous les permis du conducteur :</p>';
echo '<pre>';
print_r($vehicule['conducteur']['permis']);
echo '</pre><br>';

echo '<p>Type de finition intérieure :</p>';
echo $vehicule['finitions']['interieur']['type'].'<br><br>';

echo '<p>Couleur de finition extérieure :</p>';
echo $vehicule['finitions']['exterieur']['couleur'].'<br><br>';

echo '<p>Type de finition intérieure :</p>';
echo $vehicule['finitions']['interieur']['type'].'<br><br>';

echo '<p>Puissance et année du véhicule :</p>';
echo $vehicule['caracteristiques']['puissance'].'<br>'.$vehicule['caracteristiques']['annee'];