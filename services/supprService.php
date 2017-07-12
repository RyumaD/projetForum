<?php
    session_start();
    include_once("../model/fonctions.php");
    $topic=$_POST['topic'];
    $zone=$_POST['zone'];
    $txt =$_POST["texte"];
    $msg =$_POST['msg'];
    $user =$_SESSION["profil"];
    supprMessage($user,$txt,$zone,$topic);
    header("location: ../index.php?page=area&zone=$zone&topic=$topic&msg=$msg");
?>