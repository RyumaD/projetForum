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
  }
  else{
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

function register($username,$email,$password){
  $connexion = getconnexion();
  $pdo = $connexion->prepare('INSERT INTO utilisateur SET username=:username, pword=:pword, email=:email ');
  $pdo->execute(array(
          'username'=>$username,
          'pword' => $password,
          'email'=>$email
  ));
  $result = $pdo->rowCount();
}
function reponseTopic($user,$txt,$zone,$topic){
    $connexion = getconnexion();
    $pdo = $connexion->prepare('INSERT INTO repmessage SET user=:user, datecreate=NOW(), texte=:texte, zone=:zone, topic=:topic');
    $pdo->execute(array(
            'user' => $user,
            'texte'=>$txt,
            'zone'=>$zone,
            'topic'=>$topic
    ));
    $result = $pdo->rowCount();
}
function topicService($user,$titre,$txt,$zone){
    $connexion = getconnexion();
    $pdo = $connexion->prepare('INSERT INTO message SET user=:user, datecreate=NOW(), titre=:titre, texte=:texte, zone=:zone');
    $pdo->execute(array(
            'user' => $user,
            'titre'=>$titre,
            'texte'=>$txt,
            'zone'=>$zone
    ));
    $result = $pdo->rowCount();
}
function supprMessage($user,$txt,$zone,$topic){
    $connexion = getconnexion();
    $pdo = $connexion->prepare('DELETE FROM repmessage WHERE user=:user AND texte=:texte AND zone=:zone AND topic=:topic');
    $pdo->execute(array(
            'user' => $user,
            'texte'=>$txt,
            'zone'=>$zone,
            'topic'=>$topic
    ));
    $result = $pdo->rowCount();
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

function checkemail($username){
  $connexion = getconnexion();
  $pdo = $connexion->prepare('SELECT email FROM utilisateur WHERE username=:username');
  $pdo->execute(array('username'=>$username));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);
  return $user;
}

function veriflogin($password, $username){
  $connexion = getconnexion();
  $pdo = $connexion->prepare('SELECT id FROM utilisateur WHERE pword=:password AND username=:username');
  $pdo->execute(array(
    'username'=>$username,
    'password'=>$password));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);
  return $user;
}
function posting($zone){
    $connexion = getconnexion();
    $query = 'SELECT * FROM message WHERE zone=:zone';
    $objet = $connexion->prepare($query);
    $objet->execute(array('zone'=>$zone));
    $user = $objet->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}
function showing($zone){
  $show = posting($zone);
  if($show == NULL){
    return 0;
  }
  else{
    return $show;
  }
}
function posting2($zone,$topic){
    $connexion = getconnexion();
    $query = 'SELECT * FROM repmessage WHERE zone=:zone AND topic=:topic';
    $objet = $connexion->prepare($query);
    $objet->execute(array('zone'=>$zone,'topic'=>$topic));
    $user = $objet->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}
function showing2($zone,$topic){
  $show = posting2($zone,$topic);
  if($show == NULL){
    return 0;
  }
  else{
    return $show;
  }
}
?>