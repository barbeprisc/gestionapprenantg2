<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste_tuteurs</title>
    <?php include 'style2.php';?>
</head>
<body>
<?php include 'menu2.php'?>
<h1  class="text-center m-3">LISTE TUTEUR</h1>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
 <a href="formulaire_tuteur.php"> <button class="btn btn-danger me-md-2" type="button">NOUVEAU</button> </a>
</div>

<table class="table">
  <thead>
    <tr>
    <td>N°</td>
    <td>Nom </td>
    <td>Prenom</td>
    <td>Adresse</td>
    <td>Telephone</td>
    <td></td>
    <td>Sexe</td>
    <td>Profession</td>
    </tr>
  </thead>
  
  <?php

try {
    // se connecter à mysql
    $pdo = new PDO("mysql:host=localhost;dbname=groupe2", "root", "");
} catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
}

// mysql select query
//$stmt = $con->prepare('SELECT name, model, os, type, ip, idrac FROM P_SERVERS');
$q = $pdo->prepare('SELECT * FROM Tuteur');

$q->execute();
$data = $q->fetchAll();

?>
  <tbody >
  <?php
foreach ($data as $donnee) {
?>
  <tr>
        <td> <?php echo $donnee['codeTuteur']; ?></td>
        <td> <?php echo $donnee['nom']; ?></td>
        <td> <?php echo $donnee['prenom']; ?></td>
        <td> <?php echo $donnee['adresse']; ?></td>
        <td> <?php echo $donnee['telephone']; ?></td>
        <td> <?php echo $donnee['sexe']; ?></td>
        <td> <?php echo $donnee['Profession']; ?></td>
    </tr>
    <?php
            }
            ?>
  </tbody>
</table> <br>
 
 
 </div> 
</div>
<br>

<?php include 'footer.php';?>
<?php include 'js.php';?>
</body>
</html>