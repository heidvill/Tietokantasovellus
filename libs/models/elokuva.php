<?php
require_once "libs/models/kayttaja.php";
require_once "libs/yhteys.php";

class Elokuva {
	private $id;
	private $nimi;
	private $kesto;
	private $ikaraja;
	private $vuosi;
	private $kieli;
	private $maa;
	private $nahty;
	private $virheet;
	
	public function setNimi($nimi){
		$this->nimi = $nimi;
	
		if(trim($this->nimi) ==''){
			$this->virheet['nimi'] = "Nimi ei saa olla tyhjä!";
		}else{
			unset($this->virheet['nimi']);
		}
		
	}
	
	public function setKesto($kesto){
		$this->kesto = $kesto;
		if(!is_numeric($kesto) && $kesto!=''){
			$this->virheet['kesto'] = "Kesto pitää antaa numeroina!";
		} else if(!is_numeric($kesto)){
			$this->kesto = null;
			unset($this->virheet['kesto']);
		} else {
			unset($this->virheet['kesto']);
		}
		
	}
	
	public function setIkaraja($ikaraja){
		$this->ikaraja = $ikaraja;
		if(strlen(trim($this->ikaraja)) >3){
			$this->virheet['ika'] = "Ikäraja saa olla vain kolme merkkiä pitkä!";
		}else{
			unset($this->virheet['ika']);
		}
	}
	
	public function setVuosi($vuosi){
	$this->vuosi = $vuosi;
	if(!is_numeric($vuosi) && $vuosi!=''){
			$this->virheet['vuosi'] = "Vuosi pitää antaa numeroina!";
		} else if(!is_numeric($vuosi)){
			$this->vuosi = null;
			unset($this->virheet['vuosi']);
		} else {
			unset($this->virheet['vuosi']);
		}
	}
	
	public function setKieli($kieli){
	$this->kieli = $kieli;
	}
	
	public function setMaa($maa){
	$this->maa = $maa;
	}
	
	public function setNahty($nahty){
	$this->nahty = $nahty;
	}
	
	public function getNimi(){
	return $this->nimi;
	}
	
	public function getKesto(){
	return $this->kesto;
	}
	
	public function getIkaraja(){
	return $this->ikaraja;
	}
	
	public function getVuosi(){
	return $this->vuosi;
	}
	
	public function getKieli(){
	return $this->kieli;
	}
	
	public function getMaa(){
	return $this->maa;
	}
	
	public function getNahty(){
	return $this->nahty;
	}
	
	public function lisaaKantaan(){
		
		$sql = "INSERT INTO Elokuva(nimi, kesto, ikaraja, vuosi, kieli, maa, nahty, kayttaja) 
			VALUES(?,?,?,?,?,?,?,?) 
			RETURNING idtunnus";
		$kysely = annayhteys() -> prepare($sql);
		$ok = $kysely-> execute(array($this->getNimi(), $this->getKesto(), $this->getIkaraja(), $this->getVuosi(), $this->getKieli(), $this->getMaa(), $this->getNahty(), $_SESSION['kayttaja']->getKayttajaId()));
		if($ok){
			$this->id = $kysely->fetchColumn();
		}
		return $ok;
	}
	
	public function onkoKelvollinen(){
		return empty($this->virheet);
	}
	
	public function getVirheet(){
	return $this->virheet;
	}

	
	
	public function etsiElokuva($id){
	$sql = "SELECT *
		FROM elokuva
		WHERE idtunnus = ?";
	$kysely = annayhteys() -> prepare($sql);	
	$kysely -> execute(array($id));
	$tulos = $kysely -> fetchObject();
	return $tulos;
	}
	
	function hae($nimi, $nayttelija, $ohjaaja, $kategoria){
	$nimi = "%$nimi%";
	$sql = "SELECT elokuva.idtunnus, elokuva.nimi, elokuva.vuosi, elokuva.nahty
		FROM elokuva";
	$joins = '';
	$wheres = array();
	$data = array();
	
	if($nimi!=null){
		//$joins = $joins." WHERE nimi LIKE ?";
		$wheres[] = "elokuva.nimi LIKE ?";
		$data[]= $nimi;
	}
	if($nayttelija!=null){
		$joins = $joins." JOIN roolisuoritus ON roolisuoritus.elokuva = elokuva.idtunnus 
		JOIN henkilo ON nayttelija = henkilo.idtunnus";
		$wheres[] = "henkilo.nimi = ?";
		$data[] =$nayttelija;
	}
	if($ohjaaja!=null){
		$joins = $joins." JOIN ohjaus ON ohjaus.elokuva = elokuva.idtunnus
		JOIN henkilo ON ohjaaja = henkilo.idtunnus";
		$wheres[] ="henkilo.nimi = ?"; 
		$data[] = $ohjaaja;
	}
	if($kategoria!=null){
	$joins = $joins." JOIN luokitus ON luokitus.elokuva = elokuva.idtunnus
		JOIN kategoria ON luokitus.kategoria = kategoria.idtunnus";
		$wheres[] = "kategoria.nimi = ?";
		$data[] = $kategoria;
	}
	$wheres = implode(" AND ",$wheres);
	$sql = $sql.$joins.' WHERE '.$wheres.' AND kayttaja = ?';
	$data[] = $_SESSION['kayttaja']->getKayttajaId();
	$kysely = annayhteys() -> prepare($sql);
	$kysely -> execute($data);
	$tulos = $kysely -> fetchAll(PDO::FETCH_ASSOC);
	return $tulos;
	}

	function haeAakkosjarjestyksessa(){
	$sql = "SELECT idtunnus, nimi, vuosi
		FROM elokuva WHERE kayttaja = ? ORDER BY nimi ASC";
	$kysely = annayhteys() -> prepare($sql);
	$kysely -> execute(array($_SESSION['kayttaja']->getKayttajaId()));
	$tulos = $kysely -> fetchAll(PDO::FETCH_ASSOC);
	return $tulos;
	}
	
	function haeKaikki(){
	//session_start();
	$sql = "SELECT elokuva.nimi, vuosi, nahty
		FROM elokuva WHERE kayttaja = ? ORDER BY elokuva.idtunnus ASC";
	$kysely = annayhteys() -> prepare($sql);
	$kysely -> execute(array($_SESSION['kayttaja']->getKayttajaId()));
	$tulos = $kysely -> fetchAll(PDO::FETCH_ASSOC);
	return $tulos;
	}
}
