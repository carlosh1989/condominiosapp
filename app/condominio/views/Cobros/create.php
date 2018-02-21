<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-credit-card fa-2x"></i><i class="fa fa-plus fa-1x"></i> INGRESAR NUEVO COBRO</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrlRole() ?>Cobros" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-3">
        <select class="form-control" name="servicio" required>
          <?php foreach ($servicios as $s): ?>
            <option value="<?php echo $s->id ?>"><?php echo $s->servicio ?></option>
          <?php endforeach ?>
        </select>
        </div>
        <div class="col-lg-3">
          <input class="form-control" type="number" name="monto" placeholder="MONTO" required>
        </div>
      <div class="col-lg-3">
          <input type="text" name="fecha_limite" class="datepicker form-control" placeholder="FECHA LIMITE">
          <script type="text/javascript">
          $( document ).ready(function() {
          $('.datepicker').pickadate({
          // Escape any “rule” characters with an exclamation mark (!).
          format: 'dd/mm/yyyy',
          formatSubmit: 'yyyy/mm/dd',
          hiddenPrefix: 'prefix__',
          hiddenSuffix: '__suffix',
          })
    
          });
          </script>
        </div>
      </div>
      <br>
      <div class="col-lg-12">
        <br>
        <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
      </div>
    </form>
  </div>