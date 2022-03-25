<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Apprenant</title>
    <?php include 'style2.php';?>                                                
</head>
<body>
<?php include 'menu.php';?>                                                
<form>
  <div class="mb-3">
    <p>Formulaire des apprenants</p>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Prenom">
  </div>
  <div class="mb-3">
    <input type="test" class="form-control" id="exampleInputPassword1" placeholder="Telephone">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="teste" class="form-control" id="exampleInputPassword1" placeholder="Adresse">
  </div>
  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-danger me-md-2" type="button">Ajouter</button>
  <button class="btn btn-danger" type="button">Annuler</button>
</div>
</form>
<?php include 'footer.php';?>
<?php include 'js.php';?>
</body>
</html>