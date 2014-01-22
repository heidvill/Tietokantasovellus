
<?php
require_once "libs/yhteys.php"; 
require_once "libs/kayttaja.php";


//Lista asioista array-tietotyyppiin laitettuna:
$lista = Kayttaja::getKayttajat();
?><!DOCTYPE HTML>
<html>
  <head><title>Otsikko</title></head>
  <body>
    <h1>Käyttäjät</h1>
    <ul>
    <?php foreach($lista as $asia) { ?>
      <li><?php echo $asia->getTunnus(); ?></li>
    <?php } ?>
    </ul>
  </body>
</html>
