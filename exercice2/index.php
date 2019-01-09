<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice2</title>
  <h1>PHP - Partie 6 - Exercice 2</h1>
</head>
<body>
  <h3>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</h3>
  <a href="index.php?lastname=Nemare&firstname=Jean&age=25">L'afficher dans l'URL</a>
  <?php
  if (isset($_GET['lastname']) AND isset($_GET['firstname']) AND isset($_GET['age'])){
    ?>
    <p><?= 'Les paramètres lastname firstname et age sont bien présents : ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . ' ' . $_GET['age'];?></p>
    <?php
  }else{
    ?>
    <p><?= 'Les paramètres lastname firstname et age ne sont pas présents';?></p>
    <?php
  }
  ?>
  </body>
</html>
