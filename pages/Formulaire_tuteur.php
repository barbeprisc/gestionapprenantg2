<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Tuteur</title>
    <?php include 'style2.php';?>                                                
</head>
<body>
<?php include 'menu.php';?>                                                
<form class="container mb-4">
  <div class="mb-3">
    <h1 class="text-center m-3">Formulaire des tuteurs</h1>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Prénom">
  </div>
  <div class="mb-3">
    <input type="test" class="form-control" id="exampleInputPassword1" placeholder="Télephone">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="teste" class="form-control" id="exampleInputPassword1" placeholder="Adresse">
  </div>
<div class="mb-3">
<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Genre</option>
  <option value="Homme">Homme</option>
  <option value="Femme">Femme</option>
</select>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href=""><button class="btn btn-danger me-md-2" type="button">Ajouter</button></a>
  <a href=""><button class="btn btn-danger" type="button">Annuler</button></a>
</div>
</form>
<?php include 'footer.php';?>
<?php include 'js.php';?>
</body>
</html>