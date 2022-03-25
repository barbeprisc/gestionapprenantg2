<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Apprenant</title>
    <?php include 'style.php'?>                                                
</head>
<body>
<form>
  <div class="mb-3" >
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
  <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  
  <p>Genre: 0Masculin 0Feminin  <button type="submit" class="btn btn-primary">Ajouter</button> 
  <button type="submit" class="btn btn-primary">Annuler</button> </p>
  
</form>
<?php include 'js.php'?>
</body>
</html>