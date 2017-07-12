<?php
    session_start();
    include_once("../model/fonctions.php");
    $zone=$_POST['zone'];
    $topic=$_POST['topic'];
    $msg=$_POST['msg'];
    $txt =$_POST["texte"];
    $user =$_SESSION["profil"];
    reponseTopic($user,$txt,$zone,$topic);
    header("location: ../index.php?page=area&zone=$zone&topic=$topic&msg=$msg");

?>