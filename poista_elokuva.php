<?php
	require_once "libs/models/kayttaja.php";
	require_once "libs/common.php";
	require_once "libs/models/elokuva.php";
	
	onkoKirjautunut();
	
	$poistettava = $_GET['poistettava'];
	/*elokuva::poistaRoolisuoritukset($poistettava);
	elokuva::poistaOhjaukset($poistettava);
	elokuva::poistaLuokitukset($poistettava);*/
	elokuva::poistaElokuva($poistettava);

	$_SESSION['ilmoitus'] = "Elokuva poistettiin onnistuneesti!";
	$tulos=elokuva::haeKaikki();
	lahetaSivulle("etusivu.php");
