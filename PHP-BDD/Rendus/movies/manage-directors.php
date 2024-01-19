<?php
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

function showDirectors() {
    global $connexion;
    $result = $connexion->query('SELECT lastname, firstname FROM directors');
    if ($result -> execute()) {
        echo 'Voici les réalisateurs actuels présents dans la base de donnée :<br>';
        foreach ($result->fetchAll() as $row) {
            echo '&emsp;&emsp;';
            print_r($row[0]);
            echo ' ';
            print_r($row[1]);
            echo '<br>';
        }
    }
}

function addDirector() {
    global $connexion;
    $lastname = "";
    $firstname = "";
    $error = false;
    if ($_POST) {
        foreach ($_POST as $key => $value) {
            if ($value != "") {
                $lastname = $_POST['lastname'];
                $firstname = $_POST['firstname'];
                
            } else {
                echo 'ERREUR : le champ '.$key.' est vide ! ';
                $error = true;
            }
        }
        if (!$error) {
            $stmt = $connexion->prepare('INSERT INTO directors (lastname, firstname) VALUES (?,?);');
            $stmt->bindParam(1, $lastname);
            $stmt->bindParam(2, $firstname);
            $stmt->execute(); 
        }  
    }
}
?>

<html>
<body>
	<form action="#" method="POST">
        <label>Ajout d'un nouveau réalisateur à la base de données :</label>
        <br>
		<input type="text" name="lastname" placeholder="Nom du directeur">
		<input type="text" name="firstname" placeholder="Prénom du directeur">
		<input type="submit">
	</form>
    <?php
        addDirector();
        showDirectors();
    ?>
</body>
</html>