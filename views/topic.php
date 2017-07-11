<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Topic</title>
  </head>
  <body>
      <nav>
        <a href="index.php?page=principal">Home</a>
        <a href="index.php?page=profil">Profil</a>
        <form action="services/decoService.php" method="post">
          <input type="submit" id="deco" value="deconnexion">
        </form>
      </nav>
      <form action="services/topicService.php" method="post">
        <label>Zone</label>
        <? echo "<input type='text' name='zone' value=$zone>"?>
        <label>Titre</label>
        <input type="text" name="titre">
        <label>Texte</label>
        <textarea name="texte" cols="30" rows="3"></textarea>
        <input type="submit" value="add">
      </form>
  </body>
</html>
