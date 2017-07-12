<?php
    session_start();
    include_once("../model/fonctions.php"); 
    $zone=$_POST['zone'];
    $titre=$_POST['titre'];
    $txt =$_POST["texte"];
    $user =$_SESSION["profil"];
    topicService($user,$titre,$txt,$zone);
    header("location: ../index.php?page=principal");

?>