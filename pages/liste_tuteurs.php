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
<<<<<<< HEAD
<?php include 'menu.php'?>
<h1  class="text-center m-3">LISTE TUTEUR</h1>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
 <a href="pages/formulaire_tuteurs.php"> <button class="btn btn-danger me-md-2" type="button">NOUVEAU</button> </a>
</div>

<table class="table">
  <thead>
=======
<?php include 'menu.php';?>  
      <h1 class="text-center">LISTE DES TUTEURS</h1>
      <div class="container-fluid">
      <table class="table table bordered ">
  <thead class="table-success">
>>>>>>> c6ea373f6a105b15b1d3b9f48c1984d67a0edfe2
    <tr>
    <td>N°</td>
    <td>Nom </td>
    <td>Prenom</td>
    <td>Profession</td>
    <td>Telephone</td>
    <td>Adresse</td>
    <td>Sexe</td>
    <td>Email</td>
    </tr>
  </thead>
  
  <?php

try {
    // se connecter à mysql
    $pdo = new PDO("mysql:host=localhost;dbname=bd_apprenants", "root", "");
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
        <td> <?php echo $donnee['profession']; ?></td>
        <td> <?php echo $donnee['telephone']; ?></td>
        <td> <?php echo $donnee['adresse']; ?></td>
        <td> <?php echo $donnee['sexe']; ?></td>
        <td> <?php echo $donnee['email']; ?></td>
    </tr>
    <?php
            }
            ?>
  </tbody>
</table> <br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="Formulaire_tuteur.php">
  <button type="submit" class="btn btn-danger me-md-2 " name="ajouter" type="button">Nouveau</button>
  </a>
  <a href="javascript:window.print()">
  <button class="btn btn-danger " type="button">Imprimer</button>
  </a> 
 
</div> 
</div>
<br>

<?php include 'footer.php';?>
<?php include 'js.php';?>
</body>
</html>