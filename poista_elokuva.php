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
	
	$tulos=elokuva::haeKaikki();
	lahetaSivulle("etusivu.php", array('tulos'=>$tulos));
