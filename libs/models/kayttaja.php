<?php
require_once "libs/yhteys.php";
class Kayttaja {
  
	private $id;
	private $tunnus;
	private $salasana;

	public function __construct($id, $tunnus, $salasana) {
  //public function __construct()
		$this->id = $id;
		$this->tunnus = $tunnus;
		$this->salasana = $salasana;
    
	}

  /* Tähän gettereitä ja settereitä */
  
	public static function getKayttajat() {
		$sql = "SELECT idtunnus,tunnus, salasana from kayttaja";
		$kysely = annaYhteys()->prepare($sql); 
		$kysely->execute();
    
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
  
	public function getSalasana(){
		return $this->salasana;
	}
  
	public function getKayttajaId(){
		return $this->id;
	}

	public static function getKayttajaTunnuksilla($kayttaja, $salasana) {
		$sql = "SELECT idtunnus, tunnus, salasana from kayttaja where tunnus = ? AND salasana = ? LIMIT 1";
		$kysely = annaYhteys()->prepare($sql);
		$kysely->execute(array($kayttaja, $salasana));

		$tulos = $kysely->fetchObject();
		
		if ($tulos == null){
			return null;
		} else {
			$kayttaja = new Kayttaja($tulos->idtunnus, $tulos->tunnus, $tulos->salasana);
		//$kayttaja->id = $tulos->id;
		//$kayttaja->tunnut = $tulos->tunnus;
		//$kayttaja->salasana = $tulos->salasana;
			return $kayttaja;
		}
	}

}
