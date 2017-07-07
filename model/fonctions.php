<?php

function getconnexion(){
  $connexion = new PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','root');
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  return $connexion;
}

function getPage(){
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = "login";
  }
  return $page;
}

function getFeedback(){
  $control = false;
  if(isset($_GET['controle'])){
    $control = $_GET['controle'];
  }
  return $control;
}

function getUser(){
   
}

function getUtilisateurs(){

}
function verifusername($username){
  $connexion = getconnexion();
  $pdo = $connexion->prepare('SELECT username FROM utilisateur WHERE username=:username');
  $pdo->execute(array('username'=>$username));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);
  return $user;
}
function verifemail($email){
  $connexion = getconnexion();
  $pdo = $connexion->prepare('SELECT email FROM utilisateur WHERE email=:email');
  $pdo->execute(array('email'=>$email));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);
  return $user;
}
function verifpassword($password){
  $connexion = getconnexion();
  $pdo = $connexion->prepare('SELECT pword FROM utilisateur WHERE pword=:password AND ');
  $pdo->execute(array('password'=>$password));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);
  return $user;
}

 ?>
