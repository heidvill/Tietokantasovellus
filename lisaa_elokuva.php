<?php
	require_once "libs/models/kayttaja.php";
	require_once "libs/common.php";
	require_once "libs/models/elokuva.php";
	if (empty($_POST)) {
		naytaNakyma("lomake.php");
	}
	$uusiE = new Elokuva();
	$uusiE->setNimi($_POST['nimi']);
	$uusiE->setKesto($_POST['kesto']);
	$uusiE->setVuosi($_POST['vuosi']);
	$uusiE->setIkaraja($_POST['ikaraja']);
	$uusiE->setKieli($_POST['kieli']);
	$uusiE->setMaa($_POST['maa']);
	$uusiE->setNahty($_POST['nahty']);

	if($uusiE->onkoKelvollinen()){
		$uusiE->lisaaKantaan();
		lahetaSivulle("etusivu.php");
	}else{
		$virheet = $uusiE->getVirheet();
		naytaNakyma("lomake.php", $virheet);
	}
	
	
