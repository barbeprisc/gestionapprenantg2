<?php

if(isset($_POST['ajouter'])){

  try {
    
  // se connecter à mysql
  $pdo = new PDO("mysql:host=localhost;dbname=bd_apprenants", "root", "");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $profession = $_POST['profession'];
  $telephone = $_POST['telephone'];
  $adresse = $_POST['adresse'];
  $sexe = $_POST['sexe'];
  $email = $_POST['email'];
  $detail = $_POST['detail'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `Apprenant`(`nom`, `prenom`, `profession`, `telephone`, `adresse`, `sexe`, `email`, `detail`) VALUES (:nom,:prenom,:profession,:telephone,:adresse,:sexe,:email,:detail)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":prenom"=>$prenom,":profession"=>$profession,":telephone"=>$telephone,":adresse"=>$adresse,":sexe"=>$sexe,":email"=>$email,":detail"=>$detail));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>