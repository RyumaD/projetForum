<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Topic</title>
  </head>
  <body>
      <form action="services/topicService.php" method="post">
        <label>Titre</label>
        <input type="text" name="titre">
        <label>Texte</label>
        <textarea name="texte" cols="30" rows="10"></textarea>
        <input type="submit" value="add">
      </form>
  </body>
</html>
