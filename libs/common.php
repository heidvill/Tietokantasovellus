<?php
	session_start();
	function naytaNakyma($sivu, $data = array()) {
		$data = (object)$data;
		require "views/$sivu";
		exit();
	}

	function lahetaSivulle($sivu) {
	header("Location: $sivu");
	//header('Location: '.$sivu);
	}
	
	function onkoKirjautunut(){
		if(empty($_SESSION['kayttaja']) || $_SESSION['kayttaja'] == null) {
			lahetaSivulle("index.php");
			exit();
		} else {
			return true;
		}
	}
