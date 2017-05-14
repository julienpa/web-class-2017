<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>1 - Exercice PHP</title>
  </head>
  <body>
    <header>
      <h1>Liste de fruits</h1>
    </header>
    <p>Mes fruits préférés sont :</p>
    <ol>
      <?php
      $fruits = array('Orange', 'Pomme', 'Fraise');
      foreach($fruits as $fruit) {
        echo '<li>'.$fruit.'</li>';
      }
      ?>
    </ol>
    <footer>
      <p>Date du jour : <?php date_default_timezone_set('Europe/Paris'); echo date('d/m'); ?></p>
      <p>Version de PHP utilisée : <?php echo phpversion(); ?></p>
    </footer>
  </body>
</html>
