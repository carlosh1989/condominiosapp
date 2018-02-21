<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-file-o fa-2x"></i><i class="fa fa-plus fa-1x"></i> INGRESAR SERVICIO</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrlRole() ?>Servicios" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-3">
     
          <input class="form-control" type="text" name="servicioNuevo" placeholder="SERVICIO" required>
    
      </div>
      </div>
      <br>
      
      <div class="col-lg-12">
        <br>
        <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
      </div>
    </form>
  </div>
