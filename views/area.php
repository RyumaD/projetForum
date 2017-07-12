<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesMenu.css">
    <title>area</title>
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
      <h1>Sujet</h1>
      <h2 id="h2"><?php echo $topic?></h2>
      <h3 id="h3"><?php echo $msg?></h3>
      <?php
        if($message != 0){
          $i=0;
          foreach($message as $key => $value){
            $usr = $message[$i]["user"];
            $date = $message[$i]["datecreate"];
            $txt = $message[$i]["texte"];
            echo "<div id='full'><div id='ase'><p class='blue'>$usr</p><p class='red'>$date</p></div><p class='grey'>$txt</p><br></div>";
            echo "<form action='services/supprService.php' method='post'>
                      <input type='hidden' name='user' value=$usr>
                      <input type='hidden' name='datecreate' value=$date>
                      <input type='hidden' name='texte' value=$txt>
                      <input type='hidden' name='zone' value=$zone>
                      <input type='hidden' name='topic' value=$topic>
                      <input type='hidden' name='msg' value=$msg>
                      <input type='submit' id='suppr' value='delete'>
                  </form>";
            $i++;
          }
        }
    ?>
      <form action="services/reptopicService.php" method="post">
        <?php echo "<input type='hidden' name='zone' value=$zone>"?>
        <?php echo "<input type='hidden' name='topic' value=$topic>"?>
        <?php echo "<input type='hidden' name='msg' value=$msg>"?>
        <label>Texte</label>
        <textarea name="texte" cols="30" rows="5"></textarea>
        <input type="submit" value="repondre">
      </form>
    </section>  
  </body>
</html>
