<?php
	require_once "libs/models/kayttaja.php";
	require_once "libs/common.php";
	require_once "libs/models/elokuva.php";
	
	onkoKirjautunut();
	$otsikko = 'Etusivu';
	$sivu = "views/etusivu.php";
	$nykyinenSivu = 'etusivu';
	
	$hakuTulos = elokuva::haeKaikki();
	//require_once 'views/pohja.php';
	naytaNakyma("etusivu.php", array('tulos' => $hakuTulos,));
