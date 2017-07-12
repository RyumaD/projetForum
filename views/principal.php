<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forum</title>
    <link rel="stylesheet" href="css/stylesMenu.css">
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
      <h1>Forum</h1>
      <div>
        <h2>Discussion générale</h2>
        <div id="d1">
          <h3>Classe</h3>
          <?php
            if($classe != 0){
              $i=0;
              foreach ($classe as $key => $value) {
                $tit = $classe[$i]['titre'];
                $txt = $classe[$i]['texte'];
                echo "<a href='index.php?page=area&zone=Classe&topic=$tit&msg=$txt'>".$tit."</a><br>";
                $i++;
              }
            }
          ?>
          <a href="index.php?page=topic&zone=Classe">Add topic</a>
        </div>
        <div id="d2">
          <h3>Histoire</h3>
          <?php
            if($histoire != 0){
              $i=0;
              foreach ($histoire as $key => $value) {
                $tit = $histoire[$i]['titre'];
                echo "<a href='index.php?page=area&zone=Histoire&topic=$tit&msg=$txt'>".$tit."</a><br>";
                $i++;
              }
            }
          ?>
          <a href="index.php?page=topic&zone=Histoire">Add topic</a>
        </div>
      </div>
      
    </section>
  </body>
</html>
