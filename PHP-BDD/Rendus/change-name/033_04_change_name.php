<?php
	/*
		Concevez un formulaire qui contiendra
		deux champs :
			- Ancien nom de client
			- Nouveau nom de client

		Lorsqu'on soumettra le formulaire, le client concerné sera mis à jour.

		Utiliser une requête préparée
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


  function changeName() {
	global $connexion;
	$newNom = "";
	$oldNom = "";
	if ($_POST) {
		$newNom = $_POST['new-name'];
		$oldNom = $_POST['old-name'];
	}
	$stmt = $connexion->prepare('UPDATE change_nom SET nom = ? WHERE nom = ?;');
    $stmt->bindParam(1, $newNom);
    $stmt->bindParam(2, $oldNom);
    $stmt->execute();
  }

?>
<html>
<body>
	<form action="#" method="POST">
		<input type="text" name="old-name" placeholder="Nom à modifier">
		<input type="text" name="new-name" placeholder="Nouveau nom">
		<input type="submit" name="change_name">
	</form>
</body>
</html>

<?php

	changeName();


?>