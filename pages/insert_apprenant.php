<?php

if(isset($_POST['ajouter'])){

  try {
    
  // se connecter à mysql
  $pdo = new PDO("mysql:host=localhost;dbname=groupe2", "root", "");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $profession = $_POST['adresse'];
  $telephone = $_POST['telephone'];
  $adresse = $_POST['sexe'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `Apprenant`(`nom`, `prenom`, `adresse`, `telephone`, `sexe`,) VALUES (:nom,:prenom,:adresse,:telephone,:sexe,)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":prenom"=>$prenom,":adresse"=>$adresse,":telephone"=>$telephone,":sexe"=>$sexe,));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>