<!DOCTYPE html>
<html>

<head>
    	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
        <title>Omat tiedot</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<?php
	$nykyinenSivu = 'omatTiedot';
	include("valikko.php");
	
?>

<div class="container">
    <h1>Salasanan vaihtaminen</h1>
    <form class="form-horizontal" role="form" action="etusivu.php" method="POST">
      <div class="form-group">
        <label for="inputPassword1" class="col-md-2 control-label">Vanha salasana</label>
        <div class="col-md-10">
          <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Vanha salasana">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword1" class="col-md-2 control-label">Uusi salasana</label>
        <div class="col-md-10">
          <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Uusi salasana">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword1" class="col-md-2 control-label">Uusi salasana uudelleen</label>
        <div class="col-md-10">
          <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Uusi salasana">
        </div>
      </div>
            <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
          <button type="submit" class="btn btn-default">Tallenna</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
