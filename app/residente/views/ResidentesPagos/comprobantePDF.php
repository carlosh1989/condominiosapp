<center><h3>OPEN SISTEM:</h3></center>
<hr>
<?php $servicios = ArrGetUrl($u->servicios); ?>
<?php foreach ($servicios as $key => $s): ?>
<?php $pago = \App\ResidentePago::find($s); ?>

<label><b>RIF: </b>v11708508-9</label>
<br>
<label><b>Factura N°: </b> <?php echo $pago->comprobante->id ?></label>
<br>
<label>Fecha de expedición: <?php echo $pago->comprobante->fecha ?></label>
<?php endforeach ?>
<div class="panel panel-body">
  <b class="text-primary">Estatus:</b>
  <?php if ($u->estatus === 0): ?>
  <b style="color: #444;" href="#">Procesando <i class="fa fa-hourglass-half text-warning"></i></b>
  <?php endif ?>
  <?php if ($u->estatus === 1): ?>
  <b style="color: #444;" href="#">Aprobado <i class="fa fa-check text-success"></i></b>
  <?php endif ?>
  <?php if ($u->estatus === 2): ?>
  <b style="color: #444;" href="#">Rechazado <i class="fa fa-times-circle text-danger"></i></b>
  <?php endif ?>
  <hr>
  <b class="text-primary">Servicios:</b>
  <?php $servicios = ArrGetUrl($u->servicios); ?>
  <ul>
    <?php foreach ($servicios as $key => $s): ?>
    <?php $pago = \App\ResidentePago::find($s); ?>
    <li style="color:#444;list-style:none;">#<?php echo $pago->cobro->id ?> <?php echo $pago->cobro->servicio->servicio ?>: <?php echo $pago->cobro->monto ?></li>
    <?php endforeach ?>
    <li style="color:#444;list-style:none;">----------------------------</li>
    <li style="color:#444;list-style:none;"><b>TOTAL: <?php echo $pago->comprobante->monto_total ?></b></li>
  </ul>
  <hr>
</div>
<div class="panel panel-body">
  <div class="row">
    <div class="col-lg-12">
      <div class="col-lg-6">
        <b class="text-primary">Cuenta de Banco</b>
        <br>
        <b style="color: #444;">Banco: </b><label style="color: #444;"><?php echo $pago->comprobante->banco->banco ?></label>
        <br>
        <b style="color: #444;">Tipo Cuenta: </b><label style="color: #444;"><?php echo $pago->comprobante->banco->tipo ?></label>
        <br>
        <b style="color: #444;">Número: </b><label style="color: #444;"><?php echo $pago->comprobante->banco->numero ?></label>
        <br>
        <b style="color: #444;">Beneficiario: </b><label style="color: #444;"><?php echo $pago->comprobante->banco->nombre ?></label>
        <br>
        <b style="color: #444;">Email: </b><label style="color: #444;"><?php echo $pago->comprobante->banco->email ?></label>
      </div>
      <br>
      <div class="col-lg-6">
        <b class="text-primary">Deposito/Transferencia</b>
        <br>
        <b style="color: #444;">Número de referencia: </b><label style="color: #444;"><?php echo $pago->comprobante->numero_referencia ?></label>
        <br>
        <?php if ($pago->comprobante->monto_comprobante > 0): ?>
        <b style="color: #444;">Número de referencia: </b><label style="color: #444;"><?php echo $pago->comprobante->numero_referencia ?></label>
        <?php else: ?>
        <b style="color: #444;">Monto comprobante: </b><label style="color: #444;">Aun por confirmar.</label>
        <?php endif ?>
        <br>
        <b style="color: #444;">Fecha: </b><label style="color: #444;"><?php echo $pago->comprobante->fecha ?></label>
      </div>
    </div>
  </div>
</div>