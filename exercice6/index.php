<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice6</title>
  <h1>PHP - Partie 6 - Exercice 6</h1>
</head>
<body>
  <h3>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?building=12&room=101</h3>
  <a href="index.php?building=12&room=101">L'afficher dans l'URL</a>
  <?php
  if (isset($_GET['building'])){
    ?>
    <p><?= 'Le paramètre building est bien présent : ' . $_GET['building'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Le paramètre building n\'est pas présent';?></p>
    <?php
  }
  if (isset($_GET['room'])){
    ?>
    <p><?= 'Le paramètre room est bien présent : ' . $_GET['room'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Le paramètre room n\'est pas présent';?></p>
    <?php
  }
  ?>
</body>
</html>
