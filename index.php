<?php
    include_once("model/fonctions.php");
    $page = getPage();

    switch ($page) {
      case 'login':
        include("views/login.php");
        break;

      case 'principal':
        include("views/principal.php");
        break;

      case 'area':
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
