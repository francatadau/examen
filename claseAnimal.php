<?php
/**
 * Clase creada por Francisco Ortolá
 * Clase ejemplo de definición
 */
class claseAnimal
{
  // Declaración de una propiedad
  public $patas=4;

  //setters

  public function setPatas($numeroPatas){
    $this->patas=$numeroPatas;
  }

  //getters
  public function getPatas() {
      return $this->patas;
}
}
?>
