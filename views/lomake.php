<div class="container">
    <h1>Elokuvan tiedot</h1>
    
	<p>Anna elokuvan tiedot. Nimi on pakollinen.</p>

	<?php if (!empty($data->virheet)): ?>
		<div class="alert alert-danger">
			<?php foreach($data->virheet as $virhe):?>
				<?php echo $virhe; ?><br>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
   	
    <form class="form-horizontal" role="form" action="lisaa_elokuva.php" method="POST">
      <div class="form-group">
        <label for="elokuva" class="col-md-2 control-label">Elokuvan nimi*</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="nimi" value="<?php echo htmlspecialchars($data->arvot->getNimi()); ?>" placeholder="nimi">
        </div>
      </div>
      <div class="form-group">
        <label for="kesto" class="col-md-2 control-label">Kesto (min)</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="kesto" value="<?php echo htmlspecialchars($data->arvot->getKesto()); ?>" placeholder="kesto">
        </div>
      </div>
      <div class="form-group">
        <label for="vuosi" class="col-md-2 control-label">Julkaisuvuosi</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="vuosi" value="<?php echo htmlspecialchars($data->arvot->getVuosi()); ?>" placeholder="Julkaisuvuosi">
        </div>
      </div>
      <div class="form-group">
        <label for="ikaraja" class="col-md-2 control-label">Ikäraja</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="ikaraja" value="<?php echo htmlspecialchars($data->arvot->getIkaraja()); ?>" placeholder="Ikäraja">
        </div>
      </div>
      <div class="form-group">
        <label for="kieli" class="col-md-2 control-label">Kieli</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="kieli" value="<?php echo htmlspecialchars($data->arvot->getKieli()); ?>" placeholder="Kieli">
        </div>
      </div>
      <div class="form-group">
        <label for="maat" class="col-md-2 control-label">Maa</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="maa" value="<?php if(!empty($data->arvot->maa)): ?><?php echo htmlspecialchars($data->arvot->maa); ?><?php endif; ?>" placeholder="Maa">
        </div>
      </div>
      <div class="form-group">
        <label for="nahty" class="col-md-2 control-label">Nähty</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="nahty" value="<?php if(!empty($data->arvot->nahty)): ?><?php echo htmlspecialchars($data->arvot->nahty); ?><?php endif; ?>" placeholder="kyllä/ei">
        </div>
      </div>
            <div class="form-group">
        <label for="naytttelija" class="col-md-2 control-label">Näyttelijä</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="nayttelija1" value="<?php if(!empty($data->arvot->nayttelija1)): ?><?php echo htmlspecialchars($data->arvot->nayttelija1); ?><?php endif; ?>" placeholder="näyttelijä">
        </div>
      </div>
       <div class="form-group">
        <label for="naytttelija" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="nayttelija2" value="<?php if(!empty($data->arvot->nayttelija2)): ?><?php echo htmlspecialchars($data->arvot->nayttelija2); ?><?php endif; ?>" placeholder="näyttelijä">
        </div>
      </div>
       <div class="form-group">
        <label for="naytttelija" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="nayttelija3" value="<?php if(!empty($data->arvot->nayttelija3)): ?><?php echo htmlspecialchars($data->arvot->nayttelija3); ?><?php endif; ?>" placeholder="näyttelijä">
        </div>
      </div>
      <div class="form-group">
        <label for="ohjaaja" class="col-md-2 control-label">Ohjaaja</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="ohjaaja1" value="<?php if(!empty($data->arvot->ohjaaja1)): ?><?php echo htmlspecialchars($data->arvot->ohjaaja1); ?><?php endif; ?>" placeholder="ohjaaja">
        </div>
      </div>
      <div class="form-group">
        <label for="ohjaaja" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="ohjaaja2" value="<?php if(!empty($data->arvot->ohjaaja2)): ?><?php echo htmlspecialchars($data->arvot->ohjaaja2); ?><?php endif; ?>" placeholder="ohjaaja">
        </div>
      </div>
      <div class="form-group">
        <label for="ohjaaja" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="ohjaaja3" value="<?php if(!empty($data->arvot->ohjaaja3)): ?><?php echo htmlspecialchars($data->arvot->ohjaaja3); ?><?php endif; ?>" placeholder="ohjaaja">
        </div>
      </div>
      <div class="form-group">
        <label for="kategoria" class="col-md-2 control-label">Kategoria</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="kategoria1" value="<?php if(!empty($data->arvot->kategoria1)): ?><?php echo htmlspecialchars($data->arvot->kategoria1); ?><?php endif; ?>" placeholder="kategoria">
        </div>
      </div>
      <div class="form-group">
        <label for="kategoria" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="kategoria2" value="<?php if(!empty($data->arvot->kategoria2)): ?><?php echo htmlspecialchars($data->arvot->kategoria2); ?><?php endif; ?>" placeholder="kategoria">
        </div>
      </div>
      <div class="form-group">
        <label for="kategoria" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="kategoria3" value="<?php if(!empty($data->arvot->kategoria3)): ?><?php echo htmlspecialchars($data->arvot->kategoria3); ?><?php endif; ?>" placeholder="kategoria">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
          <button type="submit" class="btn btn-default">Tallenna</button>
           <button type="reset" class="btn btn-default">Tyhjennä kentät</button>
        </div>
      </div>
      </form>
  </div>
