<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Apprenant</title>
    <?php include 'style2.php';?>                                                
</head>
<body>
<?php include 'menu.php';?>                                                
<form>
  <div class="mb-3" >
    <h5 class="text-center p-3">FORMULAIRE DES APPRENANTS</h5>
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
  <select class="form-select" aria-label="Default select example">
  <option selected>Sélectionnez un tuteur</option>
  <option value="1">un</option>
  <option value="2">deux</option>
  <option value="3">trois</option>
  <option value="4">quatre</option>
  <option value="5">cinq</option>
</select>
  
<div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
  <button class="btn btn-danger me-md-2" type="button">Ajouter</button>
  <button class="btn btn-danger" type="button">Annuler</button>
</div>
  
</form>
<?php include 'footer.php';?>                                                
<?php include 'js.php'?>
</body>
</html>