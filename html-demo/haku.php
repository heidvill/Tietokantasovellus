<!DOCTYPE html>
<html>

<head>
    	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
        <title>Haku</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php
	$nykyinenSivu = 'haku';
	include("valikko.php");
	
?>

<div class="container">
    <h1>Haku</h1>
    
    	Voit hakea nimellä, sanalla tai sanan osalla.
    	<br>
    	<br>
    	
    <form class="form-horizontal" role="form" action="lomake.html" method="POST">
      <div class="form-group">
        <label for="elokuva" class="col-md-2 control-label">Elokuvan nimi</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="elokuva" name="elokuva" placeholder="nimi">
        </div>
      </div>
      <div class="form-group">
        <label for="naytttelija" class="col-md-2 control-label">Näyttelijä</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="nayttelija1" name="nayttelija" placeholder="näyttelijä">
        </div>
      </div>
      <div class="form-group">
        <label for="ohjaaja" class="col-md-2 control-label">Ohjaaja</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="ohjaaja" name="ohjaaja" placeholder="ohjaaja">
        </div>
      </div>
      <div class="form-group">
        <label for="kategoria" class="col-md-2 control-label">Kategoria</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="kategoria" name="kategoria" placeholder="kategoria">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
          <button type="submit" class="btn btn-default">Hae</button>
        </div>
      </div>
    </form>
  </div>

</body>

</html>
