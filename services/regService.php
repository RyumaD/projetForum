<?php
include_once("../model/fonctions.php");
$erreur = false;
$username = $_POST["username"];
$password = $_POST["password"];
$confpword = $_POST["confpword"];
$email = $_POST["email"];
$usr = verifusername($username);
$mail = verifemail($email);
if(isset($username) AND isset($password) AND isset($confpword) AND isset($email)){
        if(count($usr) >= 1){
                $erreur = true;
        }
        else if(count($mail) >= 1){
                $erreur = true;
        }
        else{
                if(strlen($password) > 8 AND $password == $confpword AND strlen($username) > 4){
                        if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)){
                                $connexion = getconnexion();
                                $pdo = $connexion->prepare('INSERT INTO utilisateur SET username=:username, pword=:pword, email=:email ');
                                $pdo->execute(array(
                                        'username'=>$username,
                                        'pword' => $password,
                                        'email'=>$email
                                ));
                                $result = $pdo->rowCount();
                        }
                }
                else{
                        $erreur = true;
                }
        }     
}
else{
        $erreur = true; 
}
if($erreur == true){
    header("location: ../index.php?page=login&controle=failed");    
}
else{
    header("location: ../index.php?page=principal&controle=success");    
}
?>