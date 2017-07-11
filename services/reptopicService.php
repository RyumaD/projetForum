<?php
    session_start();
    include_once("../model/fonctions.php");
    $zone=$_POST['zone'];
    $topic=$_POST['topic'];
    $connexion = getconnexion();
    $pdo = $connexion->prepare('INSERT INTO repmessage SET user=:user, datecreate=NOW(), texte=:texte, zone=:zone, topic=:topic');
    $pdo->execute(array(
            'user' => $_SESSION["profil"],
            'texte'=>$_POST["texte"],
            'zone'=>$_POST["zone"],
            'topic'=>$_POST["topic"]
    ));
    $result = $pdo->rowCount();
    header("location: ../index.php?page=area&zone=$zone&topic=$topic");

?>