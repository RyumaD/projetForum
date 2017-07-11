<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profil</title>
  </head>
  <body>
    <h1>Profil</h1>
    <nav>
      <a href="index.php?page=principal">Home</a>
      <a href="index.php?page=profil">Profil</a>
      <form action="services/decoService.php" method="post">
        <input type="submit" id="deco" value="deconnexion">
      </form>
    </nav>
    <section>
    <span>Hello <?php $_SESSION["profil"];?></span>
    </section>
  </body>
</html>