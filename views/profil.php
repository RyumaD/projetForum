<?php session_start();
  $username = $_SESSION["profil"];
  $email = checkemail($username);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesProfil.css">
    <title>Profil</title>
  </head>
  <body>
    <nav>
      <a href="index.php?page=principal">Home</a>
      <a href="index.php?page=profil">Profil</a>
      <form action="services/decoService.php" method="post">
        <input type="submit" id="deco" value="deconnexion">
      </form>
    </nav>
    <section>
      <h1>Profil</h1>
      <span>Hello <?php echo $username;?></span><br>
      <span>Ton adressse mail est : <?php echo $email[0]["email"] ?></span>
    </section>
  </body>
</html>