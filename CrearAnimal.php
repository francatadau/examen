<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crear Animal</title>
  </head>
  <body>
    <?php

    include 'claseAnimal.php';

    $animal1 = new claseAnimal();
    $animal1-> setAnimal('cienpies');
    echo "El animal es: " . $animal1->getAnimal();
    $animal1->setAnimal(100);
    echo "El numero de patas es: " .$animal1->getAnimal();

    $animal2->setAnimal('araña');
    echo "<br>El animal es ". $animal2->getAnimal();
    $animal2->setAnimal(8);
    echo "El numero de patas es: " .$animal2->getAnimal();
     ?>
  </body>
</html>
