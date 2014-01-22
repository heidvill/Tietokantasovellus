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
  
  public static function getKayttajat() {
   $sql = "SELECT idtunnus,tunnus, salasana from kayttaja";
  $kysely = annaYhteys()->prepare($sql); $kysely->execute();
    
  $tulokset = array();
  foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
    $kayttaja = new Kayttaja($tulos->idtunnus, $tulos->tunnus, $tulos->salasana); 
    //$array[] = $muuttuja; lisää muuttujan arrayn perään. 
    //Se vastaa melko suoraan ArrayList:in add-metodia.
    $tulokset[] = $kayttaja;
  }
  return $tulokset;
  }
  
  public function getTunnus(){
  return $this->tunnus;
  }
  
}
