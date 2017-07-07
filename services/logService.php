<?php
include_once("../model/fonctions.php");
$erreur = false;
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$email = trim($_POST["email"]);
$usr = verifusername($username);
$mail = verifemail($email);
$pass = verifpassword($password);

if(isset($username) AND isset($password) AND isset($email)){
    if(count($usr)>= 1 AND count($mail)>= 1 AND count($pass)>= 1){
        header("location: ../index.php?page=principal&controle=success");
    }
}
header("location: ../index.php?page=login&controle=failed");

 ?>