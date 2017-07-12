<?php
include_once("../model/fonctions.php");
$erreur = false;
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$usr = verifusername($username);
$log = veriflogin($password, $username);

if(empty($log)){
    $erreur = true;
}
else{
   $id = $log[0]['id'];
}

if(isset($username) AND isset($password) AND $erreur == false){
    if($id >= 1){
        session_start();
        $_SESSION["profil"]=$username;
        header("location: ../index.php?page=principal&controle=success");
        die();
    }
}
header("location: ../index.php?page=login&controle=failed");
?>