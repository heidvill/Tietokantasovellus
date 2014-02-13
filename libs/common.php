<?php
	session_start();
	
	function naytaNakyma($sivu, $data = array(), $otsikko) {
		$data = (object)$data;
		$sivu = "views/$sivu";
		if(!eiKirjautunut()){
			require_once "views/pohja.php";
		} else {
			unset($_SESSION['kayttaja']);
			require_once "$sivu";
		}
		exit();
	}

	function lahetaSivulle($sivu, $data = array()) {
		$data = (object)$data;
		header("Location: $sivu");
		//header('Location: '.$sivu);
	}
	
	function onkoKirjautunut(){
		if(empty($_SESSION['kayttaja']) || $_SESSION['kayttaja'] == null) {
			lahetaSivulle("index.php");
			//return false;
			exit();
		} else {
			return true;
		}
	}
	
	function eiKirjautunut(){
		if(empty($_SESSION['kayttaja']) || $_SESSION['kayttaja'] == null) {
			return true;
		} 
	}
	
		function naytaNakyma2($sivu, $data = array(), $otsikko, $data2 = array()) {
		$data = (object)$data;
		$data2 = (object)$data2;
		$sivu = "views/$sivu";
		if(!eiKirjautunut()){
			require_once "views/pohja.php";
		} else {
			unset($_SESSION['kayttaja']);
			require_once "$sivu";
		}
		exit();
	}
	
