<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire_Tuteur</title>
<?php include 'style2.php';?>                                                
</head>
<body>
<?php include 'menu2.php';?> 
<h1 class="text-center m-3">Formulaire des tuteurs</h1>                                               
<form action="insert_tuteur.php" method="post" class="container mb-4">
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Nom" name="nom">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Prenom" name="prenom">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Adresse" name="adresse">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Télephone" name="telephone">
  </div>
<div class="mb-3">
<select class="form-select"  aria-label="Default select example" name="sexe">
  <option selected > Sexe </option>
  <option value="Masculin">Masculin</option>
  <option value="Feminin">Feminin</option>
</div>
<div class="mb-3">
    <input type="text" class="form-control" placeholder="Profession" name="Profession">
  </div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<button type="submit" class="btn btn-danger me-md-2 " name="ajouter" type="button">Ajouter</button>
<button type="reset" class="btn btn-danger " type="button">Annuler</button>
</div>
</form>
<?php include 'footer.php';?>
<?php include 'js.php';?>
</body>
</html>