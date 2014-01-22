<!DOCTYPE html>
<html>

<head>
    	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
        <title>Etusivu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<?php

	$nykyinenSivu = 'etusivu';
	include("valikko.php");
	
?>

	<div class="container">
  		<h1>YMDb - Your Movie Database</h1>
   			Hei X!
	<br>
	<br>
	Sinulla on 3 elokuvaa tallennettuna tietokantaasi.
	
	</div>
	
	<div class="container">
    <h1>Elokuvasi</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Elokuvan nimi</th>
          <th>Julkaisuvuosi</th>
          <th>Nähty</th>
          <th>Muokkaa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Hobbitti 2</td>
          <td>2013</td>
          <td>kyllä</td>
          <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-wrench"></span> Muokkaa/poista</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Ironman 3</td>
          <td>2013</td>
          <td>kyllä</td>
          <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-wrench"></span> Muokkaa/poista</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Kuninkaan puhe</td>
          <td>2010</td>
          <td>Ei</td>
          <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-wrench"></span> Muokkaa/poista</button></td>
        </tr>
      </tbody>
    </table>
  </div>

	
</body>

</html>
