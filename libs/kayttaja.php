<?php
class Kayttaja {
  
  private $id;
  private $tunnus;
  private $password;

  public function __construct($id, $tunnus, $salasana) {
    $this->id = $id;
    $this->tunnus = $tunnus;
    $this->salasana = $salasana;
  }

  /* Tähän gettereitä ja settereitä */
}
