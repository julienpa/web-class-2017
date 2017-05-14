<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>2 - Exercice PHP</title>
  </head>
  <body>
    <header>
      <h1>Liste de fruits</h1>
    </header>
    <p>Mes fruits préférés sont :</p>
    <ol>
      <?php
      $fruits = array(
        'fruit1' => 'Orange',
        'fruit2' => 'Pomme',
        'fruitsrouge' => array('Fraise', 'Framboise', 'Cerise')
      );
      $fruits['fruit3'] = 'Raisin';
      $fruits['fruit4'] = 'Papaye';

      $nbfruits = count($fruits);
      echo "<span>Nombre d'éléments dans la liste : $nbfruits</span>";

      foreach($fruits as $index => $element) {
        if (is_string($element)) {
          echo "<li>$index : $element</li>";
        }
        else {
          echo '<li>Fruits rouges :</li><ol>';
          foreach($element as $subindex => $fruitrouge) {
            echo '<li>'.$subindex.' : '.$fruitrouge.'</li>';
          }
          echo '</ol>';
        }
      }
      ?>
    </ol>
    <footer>
      <p>Date du jour : <?php date_default_timezone_set('Europe/Paris'); echo date('d/m'); ?></p>
      <p>Version de PHP utilisée : <?php echo phpversion(); ?></p>
    </footer>
  </body>
</html>
