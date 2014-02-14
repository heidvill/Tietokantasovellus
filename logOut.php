<?php
	require_once "libs/common.php";
	session_start();
	unset($_SESSION['kayttaja']);
	//header('Location: index.php');
	lahetaSivulle('index.php');
