<!DOCTYPE html>
<html>

<head>
    	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
        <title>otsikko</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
        <ul class="nav nav-tabs">
    		<li <?php if ($nykyinenSivu == 'etusivu'): ?>class="active"<?php endif; ?>>
    			<a href="etusivu.php">Elokuvalista</a>
    		</li>
   		<li <?php if ($nykyinenSivu == 'omatTiedot'): ?>class="active"<?php endif; ?>>
   			<a href="omat_tiedot.php">Muokkaa tietojasi</a>
   		</li>
   		<li <?php if ($nykyinenSivu == 'haku'): ?>class="active"<?php endif; ?>>
   			<a href="haku.php">Hae elokuvia</a>
   		</li>
   		<li>
   			<a href="login.php">Kirjaudu ulos</a>
   		</li>
  	</ul>
  	
  	<div id="content">
  	<?php require $sivu; ?>
  	
  	</div>
</body>
</html>
