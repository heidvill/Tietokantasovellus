<div class="container">
    <h1>Elokuvan tiedot</h1>
    
    	<p>Anna elokuvan tiedot. Nimi on pakollinen.</p>

    	<?php if (!empty($data)): ?>
    		
  		<div class="alert alert-danger">
  		<?php foreach($data as $virhe):?>
  		<?php echo $virhe; ?><br>
  		<?php endforeach; ?></div>
  		
	<?php endif; ?>
    	    	
    <form class="form-horizontal" role="form" action="lisaa_elokuva.php" method="POST">
      <div class="form-group">
        <label for="elokuva" class="col-md-2 control-label">Elokuvan nimi*</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="elokuva" name="nimi" placeholder="nimi">
        </div>
      </div>
      <div class="form-group">
        <label for="kesto" class="col-md-2 control-label">Kesto (min)</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="kesto" name="kesto" placeholder="kesto">
        </div>
      </div>
      <div class="form-group">
        <label for="vuosi" class="col-md-2 control-label">Julkaisuvuosi</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="vuosi" name="vuosi" placeholder="Julkaisuvuosi">
        </div>
      </div>
      <div class="form-group">
        <label for="ikaraja" class="col-md-2 control-label">Ikäraja</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="ikaraja" name="ikaraja" placeholder="Ikäraja">
        </div>
      </div>
      <div class="form-group">
        <label for="kieli" class="col-md-2 control-label">Kieli</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="kieli" name="kieli" placeholder="Kieli">
        </div>
      </div>
      <div class="form-group">
        <label for="maat" class="col-md-2 control-label">Maat</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="maat" name="maa" placeholder="Maat">
        </div>
      </div>
      <div class="form-group">
        <label for="nahty" class="col-md-2 control-label">Nähty</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="nahty" name="nahty" placeholder="kyllä/ei">
        </div>
      </div>
            <div class="form-group">
        <label for="naytttelija" class="col-md-2 control-label">Näyttelijä</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="nayttelija1" name="nayttelija1" placeholder="näyttelijä">
        </div>
      </div>
       <div class="form-group">
        <label for="naytttelija" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="nayttelija2" name="nayttelija2" placeholder="näyttelijä">
        </div>
      </div>
       <div class="form-group">
        <label for="naytttelija" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="nayttelija3" name="nayttelija3" placeholder="näyttelijä">
        </div>
      </div>
      <div class="form-group">
        <label for="ohjaaja" class="col-md-2 control-label">Ohjaaja</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="ohjaaja" name="ohjaaja1" placeholder="ohjaaja">
        </div>
      </div>
      <div class="form-group">
        <label for="ohjaaja" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="ohjaaja" name="ohjaaja2" placeholder="ohjaaja">
        </div>
      </div>
      <div class="form-group">
        <label for="ohjaaja" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="ohjaaja" name="ohjaaja3" placeholder="ohjaaja">
        </div>
      </div>
      <div class="form-group">
        <label for="kategoria" class="col-md-2 control-label">Kategoria</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="kategoria" name="kategoria1" placeholder="kategoria">
        </div>
      </div>
      <div class="form-group">
        <label for="kategoria" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="kategoria" name="kategoria2" placeholder="kategoria">
        </div>
      </div>
      <div class="form-group">
        <label for="kategoria" class="col-md-2 control-label"></label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="kategoria" name="kategoria3" placeholder="kategoria">
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
