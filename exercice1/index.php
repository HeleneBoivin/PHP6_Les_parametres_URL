<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice1</title>
  <h1>PHP - Partie 6 - Exercice 1</h1>
</head>
<body>
  <h3>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL (Uniform Ressource Locator) existent et les afficher: index.php?lastname=Nemare&firstname=Jean</h3>
  <a href="index.php?lastname=Nemare&firstname=Jean">L'afficher dans l'URL</a>
  <?php
  if (isset($_GET['lastname'])){  // $_GET est un array associatif dont les clés correspondent aux noms des paramètres envoyés en url et isset teste si une variable existe.
    ?>
    <p><?= 'Le paramètre lastname est bien présent : ' . $_GET['lastname'];?></p>
    <?php
  }else{   // Il manque des paramètres, on avertit le visiteur
    ?>
    <p><?= 'Le paramètre lastname n\'est pas présent';?></p>
    <?php
  }
    if (isset($_GET['firstname'])){
    ?>
    <p><?= 'Le paramètre firstname est bien présent : ' . $_GET['firstname'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Le paramètre firstname n\'est pas présent';?></p>
    <?php
  }
  ?>
</body>
</html>
