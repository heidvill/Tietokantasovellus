<?php
	//session_start();
	function naytaNakyma($sivu, $data = array()) {
		$data = (object)$data;
		require "html-demo/$sivu";
		exit();
	}

	//function lahetaSivulle($sivu) {
	//header('Location:' $sivu);
	//}
	function onkoKirjautunut(){
		if($_SESSION['kayttaja'] == null) {
			return false;
		} else {
		
			return true;
		}
	}
