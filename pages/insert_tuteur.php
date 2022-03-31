<?php
$host = 'localhost';
$dbname = 'groupe2';
$username = 'root';
$password = '';

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
  $adresse = $_POST['adresse'];
  $telephone = $_POST['telephone'];
  $sexe = $_POST['sexe'];
  $profession = $_POST['profession'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO tuteur (`nom`, `prenom`, `adresse`, `telephone`, `sexe`, `profession`,) VALUES (:nom,:prenom,:adresse,:telephone,:sexe,:profession)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":prenom"=>$prenom,":adresse"=>$adresse,":telephone"=>$telephone,":sexe"=>$sexe,":profession"=>$profession));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>
