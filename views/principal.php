<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forum</title>
  </head>
  <body>
    <h1>BorderLands</h1>
    <nav>
      <a href="index.php?page=principal">Home</a>
      <a href="index.php?page=profil">Profil</a>
      <form action="services/decoService.php" method="post">
        <input type="submit" id="deco" value="deconnexion">
      </form>
    </nav>
    <section id="s1">
      <h2>Discussion générale</h2>
      <div id="d1">
        <h3>Classe</h3>
        <?php
          $show = showing('Classe');
        ?>
        <a href="index.php?page=topic&zone=Classe">Add topic</a>
      </div>
      <div id="d2">
        <h3>Histoire</h3>
        <?php
          $show = showing('Histoire');
        ?>
        <a href="index.php?page=topic&zone=Histoire">Add topic</a>
      </div>
    </section>
  </body>
</html>
