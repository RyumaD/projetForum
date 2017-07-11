<?php
    session_start();
    include_once("../model/fonctions.php"); 
    $connexion = getconnexion();
    $pdo = $connexion->prepare('INSERT INTO message SET user=:user, datecreate=NOW(), titre=:titre, texte=:texte, zone=:zone');
    $pdo->execute(array(
            'user' => $_SESSION["profil"],
            'titre'=>$_POST["titre"],
            'texte'=>$_POST["texte"],
            'zone'=>$_POST["zone"]
    ));
    $result = $pdo->rowCount();
    header("location: ../index.php?page=principal");

?>