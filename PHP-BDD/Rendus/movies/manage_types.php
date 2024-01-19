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

$error = false;

function showTypes() {
    global $connexion;
    $result = $connexion->query('SELECT label FROM types');
    if ($result -> execute()) {
        echo 'Voici les types de films actuellement présents dans la base de donnée :<br>';
        foreach ($result->fetchAll() as $row) {
            echo '&emsp;&emsp;'.$row[0];
        }
    }
}

function typeExists($type) {
    global $connexion;
    global $error;
    $result = $connexion->query('SELECT label FROM types');
    if ($result -> execute()) {
        foreach ($result->fetchAll() as $row) {
            if ($row[0] == $type) {
                echo 'ERREUR : le type "';
                echo $row[0];
                echo '" existe déjà ! Voir ci-dessous :<br>';
                $error = true;
            }
        }
    }
}

function addTypes() {
    global $connexion;
    global $error;
    $label = "";
    $desc = "";
    if ($_POST) {
        if (empty($_POST['label'])) {
            echo 'ERREUR : le champ "label" est vide !<br>';
            $error = true;
        } else {
            foreach ($_POST as $key => $value) {
                if ($key == 'label') {
                    $label = $value;
                } else {
                    $desc = $value;
                }
            }
            typeExists($label);
        }
        if (!$error) {
            $stmt = $connexion->prepare('INSERT INTO types (label, description) VALUES (?,?);');
            $stmt->bindParam(1, $label);
            $stmt->bindParam(2, $desc);
            $stmt->execute(); 
        }  
    }
}
?>

<html>
<body>
	<form action="#" method="POST">
        <label>Ajout d'un nouveau type de film à la base de données :</label>
        <br>
		<input type="text" name="label" placeholder="Label">
		<input type="text" name="description" placeholder="Description">
		<input type="submit">
	</form>
    <?php
        addTypes();
        showTypes();
    ?>
</body>
</html>