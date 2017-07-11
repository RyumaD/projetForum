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
  }
  else{
    $i=0;
    foreach ($show as $key => $value) {
      $yo = $show[$i]['titre'];
      echo "<a href='index.php?page=area&zone=$zone&topic=$yo'>".$yo."</a><br>";
      $i++;
    }
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
  }
  else{
    $i=0;
    foreach ($show as $key => $value) {
      $usr = $show[$i]["user"];
      $date = $show[$i]["datecreate"];
      $txt = $show[$i]["texte"];
      echo "<p>$usr</p><p>$date</p><p>$txt</p><br>";
      echo "<form action='services/supprService.php' method='post'>
                <input type='hidden' name='user' value=$usr>
                <input type='hidden' name='datecreate' value=$date>
                <input type='hidden' name='texte' value=$txt>
                <input type='hidden' name='zone' value=$zone>
                <input type='hidden' name='topic' value=$topic>
                <input type='submit' id='suppr' value='delete'>
            </form>";
      $i++;
    }
  }
}
?>