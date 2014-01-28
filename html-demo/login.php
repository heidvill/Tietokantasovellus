<!DOCTYPE HTML>
<html>
<head><title>Kirjautuminen</title></head>
<body>
  <div class="container">
    <h1>Kirjaudu</h1>
    	<?php if (!empty($data->virhe)): ?>
  		<div class="alert alert-danger"><?php echo $data->virhe; ?><br><br></div>
	<?php endif; ?>
    <form class="form-horizontal" role="form" action="doLogin.php" method="POST">
      <div class="form-group">
        <label for="tunnus" class="col-md-2 control-label">Käyttäjätunnus</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="tunnus" value="<?php if(!empty($data->kayttaja)): ?><?php echo $data->kayttaja; ?><?php endif; ?>" placeholder="Käyttäjätunnus" />
        </div>
      </div>
      <div class="form-group">
        <label for="salasana" class="col-md-2 control-label">Salasana</label>
        <div class="col-md-10">
          <input type="password" class="form-control" name="salasana" placeholder="Salasana" />
        </div>
      </div>
      <br>
    <!--  
    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Muista kirjautuminen
            </label>
          </div>
        </div>
      </div>
      -->
      <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
          <button type="submit" class="btn btn-default">Kirjaudu sisään</button>
        </div>
      </div>
    </form>
    
  </div>
</body>
</html>


