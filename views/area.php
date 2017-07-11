<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>area</title>
  </head>
  <body>
    <h1></h1>
    <nav>
      <a href="index.php?page=principal">Home</a>
      <a href="index.php?page=profil">Profil</a>
      <form action="services/decoService.php" method="post">
        <input type="submit" id="deco" value="deconnexion">
      </form>
    </nav>
    <?php
          $zone=$_GET['zone'];
          $topic=$_GET['topic'];
          $show = showing2($zone,$topic);
    ?>
    <form action="services/reptopicService.php" method="post">
        <?php echo "<input type='hidden' name='zone' value=$zone>"?>
        <?php echo "<input type='hidden' name='topic' value=$topic>"?>
        <label>Texte</label>
        <textarea name="texte" cols="30" rows="5"></textarea>
        <input type="submit" value="repondre">
      </form>
  </body>
</html>
