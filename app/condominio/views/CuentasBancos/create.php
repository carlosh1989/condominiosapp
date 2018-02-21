<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-building fa-2x"></i><i class="fa fa-plus fa-1x"></i> INGRESAR BANCO</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrlRole() ?>CuentasBancos" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-3">
          <select class="form-control" name="banco" required>
            <option>Banco</option>
            <option value="Banco Venezuela">Banco Venezuela</option>
            <option value="Banesco">Banesco</option>
            <option value="BOD">BOD</option>
          </select>
        </div>
        <div class="col-lg-3">
          <select class="form-control" name="tipo" required>
            <option value="">Tipo Cuenta</option>
            <option value="Banesco">Corriente</option>
            <option value="BOD">Ahorro</option>
          </select>
        </div>
        <div class="col-lg-6">
          <input class="form-control" type="number" name="cuenta" placeholder="N° Cuenta" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-3">
          <input class="form-control" type="text" name="nombre" placeholder="NOMBRE" required>
        </div>
        <div class="col-lg-1">
          <select name="nacionalidad" class="form-control" required>
            <option value="V">V</option>
            <option value="E">E</option>
          </select>
        </div>
        <div class="col-lg-3">
          <input class="form-control" type="number" name="cedula" placeholder="CEDULA" required>
        </div>
        <div class="col-lg-3">
          <input class="form-control" type="email" name="email" placeholder="EMAIL" required>
        </div>
      </div>
      <br>
      
      <div class="col-lg-12">
        <br>
        <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
      </div>
    </form>
  </div>
  <script>
  $("#formCheckPassword").validate({
  rules: {
  password: {
  required: true,
  minlength: 6,
  maxlength: 10,
  } ,
  cfmPassword: {
  equalTo: "#password",
  minlength: 6,
  maxlength: 10
  }
  },
  messages:{
  password: {
  required:"the password is required"
  }
  }
  });
  </script>