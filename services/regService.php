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
            /*
             * Bravo encore tu commences très bien avec le checking des inputs user
             * avec un regex mais je pense que ce petit paquet de code tu peux en faire une fonction
             * tu es susceptible de vérifier des emails plusieurs fois dans un forum
             * Ça serait bien d'en faire une fonction.
             * L'appel en base de données doit être une fonction aussi..
             * mais je suppose que tu n'as pas encore eu le temps de faire.
             * */
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
    /* Alfonso: essaie de faire un die après chaque header(); */
    header("location: ../index.php?page=login&controle=failed");
    die();
}
else{
    header("location: ../index.php?page=principal&controle=success");    
}
?>