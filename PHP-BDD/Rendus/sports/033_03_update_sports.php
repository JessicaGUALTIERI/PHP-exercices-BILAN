<?php
    /*
     * utilisez le fichier sql-dumps/sports.sql pour créer votre BDD
     *
     * En utilisant le formulaire de cette page, faites en sorte que chaque clic sur un des boutons incrémente le nombre de votes en base de données, chaque vote doit incrémenter la catégorie pour laquelle l'utilisateur a voté.
     * 
     * Une fois le formulaire envoyé, à la place du formulaire, afficher les nombres de votes pour chacune des catégories, dans la même page.
     * Astuce: le formulaire doit être affiché uniquement si la variable $_POST a été envoyée.
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

  

  function addVote() {
    global $connexion;
    
    $stmt = $connexion->prepare('SELECT nbVotes FROM sports WHERE id = ?;');
    $stmt->bindParam(1, $id);
    foreach ($_POST as $key => $value) {
      $id = $key;
    }
    $stmt->execute();
    $nbAvant=$stmt->fetch();

    $stmt = $connexion->prepare('UPDATE sports SET nbVotes = (?+1) WHERE id = ?;');
    $stmt->bindParam(1, $nbAvant[0]);
    $stmt->bindParam(2, $id);
    $stmt->execute();
  }
  
  function printVote() {
    global $connexion;
    $result = $connexion->query('SELECT * FROM sports');

    if ($result -> execute()) {
        foreach ($result->fetchAll() as $row) {
          if ($row[0] == 1) {
            $sport = "Tennis";
          } elseif ($row[0] == 2) {
            $sport = "Basketball";
          } else {
            $sport = "Football";
          }
          echo 'Nombre de votes pour '.$sport.' : '.$row[2].'<br>';
        }
    }
  }

?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Votes</title>
</head>

<body>
  <?php
  if (!$_POST) {
    echo '<form action="#" method="POST">
    <button type="submit" name="1">Voter pour le tennis</button>
    <button type="submit" name="3">Voter pour le football</button>
    <button type="submit" name="2">Voter pour le basketball</button>
    </form>';
  } else {
    addVote();
    printVote();
  }
  ?>
</body>

</html>

<?php




?>