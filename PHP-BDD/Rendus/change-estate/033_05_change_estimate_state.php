<?php
	/*
		Créez un formulaire comprenant un champ 
		date de début, un champ date de fin,
		et un champ etat (select)

		On aura un formulaire du genre :

		"Rendre tous les devis compris entre le
		[ DATE ] et le [ DATE ] comme [ ETAT ]"


		Lorsqu'on soumettra le formulaire,
		tous les devis créés dans l'intervalle
		spécifié prendront l'état spécifié par
		le select
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

function changeEstate() {
	global $connexion;
	$etat = '';
	$dateDebut = '';
	$dateFin = '';
	if ($_POST) {
		$etat = $_POST['etat'];
		$dateDebut = $_POST['date-debut'];
		$dateFin = $_POST['date-fin'];
	}
	$stmt = $connexion->prepare('UPDATE change_estate SET etat = ? WHERE dateProjet > ? AND dateProjet < ?;');
    $stmt->bindParam(1, $etat);
    $stmt->bindParam(2, $dateDebut);
	$stmt->bindParam(3, $dateFin);
    $stmt->execute();
}


?>

<html>
<body>
	<form action="#" method="POST">
		<label>Date de début :</label>
		<input type="date" name="date-debut">
		<br>
		<label>Date de fin :</label>
		<input type="date" name="date-fin">
		<br>
		<label>État :</label>
		<select name="etat">
			<option value="a-faire">À faire</option>
			<option value="en-cours">En cours</option>
			<option value="fini">Fini</option>
		</select>
		<br>
		<input type="submit">
	</form>
</body>
</html>

<?php
	changeEstate();
?>