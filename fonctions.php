<?php

require_once("connection.php");

function getAuthentification($login,$mdp){
 global $pdo;
 $query = "SELECT * FROM utilisateurs where login=$login and mot_de_passe=$mdp";
 $prep = $pdo->prepare($query);
 $prep->bindValue('login', $login);
 $prep->bindValue('mot de passe', $mdp);
 $prep->execute();
 // on vérifie que la requête ne retourne qu'une seule ligne
 if($prep->rowCount() == 1){
 $result = $prep->fetch();
 return $result;
 }
 else
 return false;
}
?>