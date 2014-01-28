<?php
ini_set('display_errors', 1);

require_once 'libs/kayttaja.php';
require_once 'libs/common.php';
	
	if(empty($_POST["tunnus"])) {
	naytaNakyma("login.php", array('virhe' => "Kirjautuminen epäonnistui! Et antanut käyttäjätunnusta.",));
	}
	
	$tunnus = $_POST["tunnus"];

	if(empty($_POST["salasana"])) {
	 naytaNakyma("login.php", array(
	 	'kayttaja' => $tunnus,
	 	'virhe' => "Kirjautuminen epäonnistui! Et antanut salasanaa.",));
	}
	$salasana = $_POST["salasana"];
	
	$kayttaja = Kayttaja::getKayttajaTunnuksilla($tunnus, $salasana);
	
	if($kayttaja != null) {
		session_start();
		$_SESSION['kayttaja'] = $kayttaja;		
		header('Location: html-demo/etusivu.php');
	} else {
		naytaNakyma("login.php", array(
			'kayttaja' => $tunnus, 
			'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä.",));
	}
