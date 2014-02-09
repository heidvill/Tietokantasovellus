<?php
	session_start();
	function naytaNakyma($sivu, $data = array()) {
		$data = (object)$data;
		$sivu = "views/$sivu";
		if(!eiKirjautunut()){
			require "views/pohja.php";
		}else{
			unset($_SESSION['kayttaja']);
			require "$sivu";
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
	
