<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice4</title>
  <h1>PHP - Partie 6 - Exercice 4</h1>
</head>
<body>
  <h3>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP</h3>
  <a href="index.php?language=PHP&server=LAMP">L'afficher dans l'URL</a>
  <?php
  if (isset($_GET['language'])){
    ?>
    <p><?= 'Le paramètre language est bien présent : ' . $_GET['language'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Le paramètre language n\'est pas présent';?></p>
    <?php
  }
  ?>
  <?php
  if (isset($_GET['server'])){
    ?>
    <p><?= 'Le paramètre server est bien présent : ' . $_GET['server'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Le paramètre server n\'est pas présent';?></p>
    <?php
  }
  ?>
</body>
</html>
