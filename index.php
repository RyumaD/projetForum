<?php
    include_once("model/fonctions.php");
    $page = getPage();

    switch ($page) {
      case 'login':
        include("views/login.php");
        break;

      case 'principal':
        /*$user = getUser();
        $description = getDescription();*/
        include("views/principal.php");
        break;

      /*case "formulaire":
        $feedback = getFeedback();
        $nombreUtilisateur = getNombreUtilisateurs();
        include("views/formulaire.php");
        break;*/
    }

 ?>
