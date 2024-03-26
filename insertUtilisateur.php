<?php
require_once("connection.php");
//on récupère et on vérifie les données reçues par le formulaire
if ( isset($_GET['nom']) && !empty($_GET['nom'])){
$nom = $_GET['nom'] ;
}
// à faire sur chaque donnée reçue
$adresse_mail = $_GET['adresse_mail'];
$login = $_GET['login'];
$mdp = $_GET['mot_de_passe'];
// on rédige la requête SQL
$sql = " INSERT into utilisateurs (adresse_mail,login, mot_de_passe)
values ($adresse_mail,$login,$mdp)";
try {
//on prépare la requête avec les données reçues
$statement = $pdo->prepare($sql);
$statement->bindParam('adresse_mail', $adresse_mail, PDO::PARAM_STR);
$statement->bindParam('login', $login, PDO::PARAM_STR);
$statement->bindParam('mot_de_passe', $mdp, PDO::PARAM_STR);
$statement->execute();
}
catch(PDOException $e){
 echo 'Erreur : '.$e->getMessage();
}
?>
