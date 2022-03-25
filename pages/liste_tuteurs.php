<!DOCTYPE html>
<html lang="en">
<head>
    <title>liste_tuteurs</title>
    <?php include 'style2.php';?>
</head>
<body>
<?php include 'menu.php';?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenons</th>
      <th scope="col">telephone</th>
      <th scope="col">Adresse</th>
      <th scope="col">Sexe</th>
      <th scope="col">profession</th>
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
                    <td><?php echo $donnee['codeTuteur']; ?></td>
                    <td><?php echo $donnee['nom']; ?></td>
                    <td><?php echo $donnee['prenom']; ?></td>
                    <td><?php echo $donnee['telephone']; ?></td>
                    <td><?php echo $donnee['adresse']; ?></td>
                    <td><?php echo $donnee['sexe']; ?></td>
                    <td><?php echo $donnee['profession']; ?></td>
                </tr>

            <?php
            }
            ?>
  </tbody>
</table>
<?php include 'footer.php';?>
<?php include 'js.php';?>
</body>
</html>