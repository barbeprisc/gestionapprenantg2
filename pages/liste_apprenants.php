<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listeapprenants</title>
    <?php include 'style.php'?> 
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenons</th>
      <th scope="col">telephone</th>
      <th scope="col">Adresse</th>
      <th scope="col">Sexe</th>
      <th scope="col">Nom_tuteur</th>
    </tr>
    
    <?php

try {
    // se connecter à mysql
    $pdo = new PDO("mysql:host=localhost;dbname=bd_apprenants", "root", "");
} catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
}

// mysql select query
$q = $pdo->prepare('SELECT * FROM 	tuteur');

$q->execute();
$data = $q->fetchAll();

?>

  </thead>
  <tbody>
  <?php
            foreach ($data as $donnee) {
            ?>
                <tr>
                    <td><?php echo $donnee['id_Tuteur']; ?></td>
                    <td><?php echo $donnee['nom']; ?></td>
                    <td><?php echo $donnee['prenom']; ?></td>
                    <td><?php echo $donnee['telephone']; ?></td>
                    <td><?php echo $donnee['adresse']; ?></td>
                    <td><?php echo $donnee['sexe']; ?></td>
                    <td><?php echo $donnee['nom_tuteur']; ?></td>
                </tr>

            <?php
            }
            ?>
  </tbody>
</table> 
<?php include 'js.php'?> 
</body>
</html>