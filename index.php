<?php
    include_once("model/fonctions.php");
    $page = getPage();

    switch ($page) {
      case 'login':
        include("views/login.php");
        break;

      case 'principal':
        $classe = showing('Classe');
        $histoire = showing('Histoire');
        include("views/principal.php");
        break;

      case 'area':
        $zone = $_GET["zone"];
        $topic = $_GET["topic"];
        $msg = $_GET['msg'];
        $message = showing2($zone,$topic);
        include("views/area.php");
        break;
      
      case 'topic':
        $zone = $_GET["zone"];
        include("views/topic.php");
        break;
      
      case 'profil':
        include("views/profil.php");
        break;
    }
 ?>
