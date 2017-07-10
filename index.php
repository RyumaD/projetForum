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
    }

 ?>
