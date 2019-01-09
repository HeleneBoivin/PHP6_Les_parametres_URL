<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice3</title>
  <h1>PHP - Partie 6 - Exercice 3</h1>
</head>
<body>
  <h3>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</h3>
  <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">L'afficher dans l'URL</a>
  <?php
  if (isset($_GET['startDate'])){
    ?>
    <p><?= 'Le paramètre startDate est bien présent : ' . $_GET['startDate'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Le paramètre startDate n\'est pas présent';?></p>
    <?php
  }
  ?>
  <?php
  if (isset($_GET['endDate'])){
    ?>
    <p><?= 'Le paramètre endDate est bien présent : ' . $_GET['endDate'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Le paramètre endDate n\'est pas présent';?></p>
    <?php
  }
  ?>
</body>
</html>
