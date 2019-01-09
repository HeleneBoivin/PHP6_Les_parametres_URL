<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice5</title>
  <h1>PHP - Partie 6 - Exercice 5</h1>
</head>
<body>
  <h3>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?week=12</h3>
  <a href="index.php?week=12">L'afficher dans l'URL</a>
  <?php
  if (isset($_GET['week'])){
    ?>
    <p><?= 'Le paramètre week est bien présent : ' . $_GET['week'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Le paramètre week n\'est pas présent';?></p>
    <?php
  }
  ?>
</body>
</html>
