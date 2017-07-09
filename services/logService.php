<?php
include_once("../model/fonctions.php");
$erreur = false;
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$email = trim($_POST["email"]);
$usr = verifusername($username);
$mail = verifemail($email);
$pass = verifpassword($password);

/*
 * Alfonso: Tu as compris très vite le fonctionnement de notre petit
 * système MVC. Tu as bien exécuté l'application des fonction dans le
 * fichier destiné à cette effet. càd le model/fonctions.php Bravo
 * Par contre je ne sais pas si pour se connecter il faille le username
 * l'email ET le password. Normalement on a que deux champs.
 * Je vais te compliquer la tache en te disant qu'il faut l'un ou l'autre
 * et pas les deux. Je pense que tu peux faire ça.
 * */

if(isset($username) AND isset($password) AND isset($email)){
    if(count($usr)>= 1 AND count($mail)>= 1 AND count($pass)>= 1){
        header("location: ../index.php?page=principal&controle=success");
    }
}
header("location: ../index.php?page=login&controle=failed");

 ?>