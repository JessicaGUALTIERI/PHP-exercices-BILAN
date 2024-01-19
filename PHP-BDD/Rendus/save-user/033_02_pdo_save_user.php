<?php
/*
	Objectif : Créer un formulaire permettant d'ajouter un client en base de données.
	On pourra utiliser une base de données existante.
	Les champs nécessaires, au minimum, sont le nom et le prénom.

	Étape 1 : Formulaire et validation
	Un champ pour le nom, un autre pour le prénom
	Tous les deux devront être des compris entre 2 et 10 caractères
	On utilisera une seule page pour afficher et soumettre le formulaire

	Étape 2 : Ajout en base de données
	Si l'utilisateur a cliqué sur le bouton de soumission et qu'aucune erreur n'a été relevée dans le formulaire,
	on ajoutera l'utilisateur en base de données dans une base de donnée 'myusers'.
	On utilisera pour cela une requête préparée.

	Bonus : Pour ceux qui veulent : créer une fonction pour cela : addClient($firstname, $lastname)

*/

require_once('config.php'); // Fichier non transmis sur Classroom

$connexion;

try {
    $connexion = new PDO("mysql:host=$MYSQL_DBHOST;port=$MYSQL_DBPORT;dbname=$MYSQL_DBNAME", $MYSQL_DBUSER, $MYSQL_DBPASS);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "Connecté\n";
} catch (PDOException $e) {
    //echo "Erreur de connexion : ".$e->getMessage();
    exit();
}

function addClient() {
	$error = false;
	$nom = "";
	$prenom = "";
	global $connexion;
	if ($_POST) {
		foreach ($_POST as $key => $value) {
			if (strlen($value) < 2) {
				echo 'Erreur : votre nom et/ou prénom est trop court (2 caractères minimum).';
				$error = true;
			}
			if (strlen($value) > 10) {
				echo 'Erreur : votre nom et/ou prénom est trop long (10 caractères maximum).';
				$error = true;
			}
		}
		if (!$error) {
			$stmt = $connexion->prepare('INSERT INTO client (nom, prenom) VALUES (?, ?);');
				$stmt->bindParam(1, $nom);
				$stmt->bindParam(2, $prenom);
				$nom = $_POST['lastname'];
				$prenom = $_POST['firstname'];
				$stmt->execute();
		}
	}
}

?>
<html>

<body>
  <form action="#" method="POST">
    <input type="text" name="lastname" placeholder="Nom de famille">
    <input type="text" name="firstname" placeholder="Prénom">
    <input type="submit" name="add_client">
	
	

  </form>
</body>

</html>

<?php
		addClient();
?>