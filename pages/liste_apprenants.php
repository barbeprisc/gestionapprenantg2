<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste/Apprenants</title>
    <?php include 'style2.php';?>
</head>
<body>
<?php include 'menu.php';?> 
<h1 class="text-center">LISTE DES APPRENANTS</h1>
<div class="container-fluid">
<table class="table table bordered border-dark">
<thead class="table-success">
    <tr>
        <td>N°</td>
        <td>Nom </td>
        <td>Prenom</td>
        <td>Profession</td>
        <td>Telephone</td>
        <td>Adresse</td>
        <td>Sexe</td>
        <td>Email</td>
        <td>Detail</td>
    </tr>
  </thead>
  <tbody > 
  <tr>
  <?php
  try {

  // se connecter à mysql
  $pdo = new PDO("mysql:host=localhost;dbname=bd_apprenants","root","");

  $sql = $pdo->query('SELECT * FROM Apprenant ORDER BY nom ASC');
  $i = 0;
  while ($donnees = $sql->fetch()) {

  if ($donnees['codeTuteur']) {
  $reqTuteur = $pdo->query("SELECT nom,prenom FROM Tuteur WHERE codeTuteur=$donnees[codeTuteur]");
  }
  $i++;
  echo "<tr>";
  echo "<td> $i </td>";
  echo "<td> $donnees[nom] </td>";
  echo "<td> $donnees[prenom] </td>";
  echo "<td> $donnees[profession] </td>";
  echo "<td> $donnees[telephone] </td>";
  echo "<td> $donnees[adresse] </td>";
  echo "<td> $donnees[sexe] </td>";
  echo "<td> $donnees[email] </td>";
  echo "<td> $donnees[detail] </td>";
  echo "</tr>";
  }
  $sql->closeCursor();
  } catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
  }
  ?>
  </tr>
  </tbody>
</table> <br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="formulaire_apprenants.php">
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