<div class="container">
	<h1>YMDb - Your Movie Database</h1>
	<p>Hei <?php echo htmlspecialchars($_SESSION['kayttaja']->getTunnus()); ?>! </p>
	<p>Sinulla on <?php echo htmlspecialchars($data->maara); ?> elokuvaa tallennettuna tietokantaasi.</p>
	<p><a href="lisaa_elokuva.php">Lisää uusi elokuva</a></p>
	
	<form action="aakkosjarj.php"><button type="submit" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-th-list"></span> Listaa aakkosjärjestyksessä</button></form>
	
</div>

<div  class="container">
<?php if (!empty($data->tyhjaHaku)): ?>
<br>
		<div class="alert alert-danger"><?php echo $data->tyhjaHaku; ?><br></div>
	<?php endif; ?>
	
	<?php if (!empty($_SESSION['ilmoitus'])): ?>
	<br>
  <div class="alert alert-success">
    <?php echo $_SESSION['ilmoitus']; ?>
  </div>
</div>
<?php
  // Samalla kun viesti näytetään, se poistetaan istunnosta,
  // ettei se näkyisi myöhemmin jollain toisella sivulla uudestaan.
  unset($_SESSION['ilmoitus']); 
  endif;
?>

<div class="container">
    <h1>Elokuvat</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Elokuvan nimi</th>
          <th>Julkaisuvuosi</th>
          <th>Nähty</th>
          <th> </th>
        </tr>
      </thead>
      <tbody>

	<?php foreach($data->tulos as $rivi=>$tieto):?>
		<tr>
			<td> <?php echo htmlspecialchars($tieto['nimi']); ?> </td>
			<td> <?php echo htmlspecialchars($tieto['vuosi']); ?></td>
			<td> <?php echo htmlspecialchars($tieto['nahty']); ?></td>
			<td><a  class="btn btn-xs btn-default"  href="elokuvan_tiedot.php?id=<?php echo htmlspecialchars($tieto['idtunnus']); ?>"><span class="glyphicon glyphicon-wrench"> Muokkaa/poista</a></td>
		</tr>
	<?php endforeach; ?>
      </tbody>
    </table>
  </div>
