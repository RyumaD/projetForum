<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesLogin.css">
    <title>LOGIN</title>
  </head>
  <body>
    <h1>Login Page</h1>
    <section>
      <form method="post" action="services/regService.php" name="insc">
          <h2>Inscrit toi</h2>
          <br>
          <label>Pseudo</label><input name="username" type="text"/>
          <label>Mot de passe</label><input name="password" type="password"/>
          <label>Confirmation</label><input name="confpword" type="password"/>
          <label>email</label><input name="email" type="texte"/>
          <!--<label>Robot ??? <input type="checkbox" name="regist"></label>-->
          <input type="submit" value="En avant!"/>
      </form>
      <form method="post" action="services/logService.php" name="log">
          <h2>Connecte toi</h2>
          <br>
          <label>Pseudo</label><input name="username" type="text"/>
          <label>Mot de passe</label><input name="password" type="password"/>
          <!--<label>Save ??? <input type="checkbox" name="cookie"></label>-->
          <input type="submit" value="Here we go!"/>
      </form>
    </section>
  </body>
</html>