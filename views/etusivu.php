<div class="container">
	<h1>YMDb - Your Movie Database</h1>
	<p>Hei X! </p>
	<p>Sinulla on 3 elokuvaa tallennettuna tietokantaasi.</p>
	<a href="lisaa_elokuva.php">Lisää uusi elokuva</a>
</div>
	
<div class="container">
    <h1>Elokuvat</h1>
    
    <?php if (!empty($data->tyhjaHaku)): ?>
  		<div class="alert alert-danger"><?php echo $data->tyhjaHaku; ?><br><br></div>
  		
	<?php endif; ?>
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
     		<td><form action="elokuvan_tiedot.php"><button type="submit" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-wrench"></span> Muokkaa/poista</button></form></td>
     	</tr>
     	<?php endforeach; ?>
      </tbody>
    </table>
  </div>