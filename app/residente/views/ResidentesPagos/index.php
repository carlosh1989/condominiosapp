<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-credit-card fa-2x"></i> PAGOS POR MANTENIMIENTO<b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <div style="font-size: 1.2em;" class="row">
        <div class="col-lg-4">
          <b><i class="fa fa-plus"></i> Saldo Plus:</b> <label class="text-muted">BsF.</label>
          <?php if ($saldo): ?>
          <label class="text-success">
            <?php echo $saldo->monto_positivo ?>
          </label>
          <?php else: ?>
          <label class="text-muted">0</label>
          <?php endif ?>
        </div>
      </div>
      <br>
      <form action="<?php echo baseUrlRole() ?>ResidentesPagos/total" method="POST">
        <?php echo Token::field() ?>
        <?php $monto = 0; ?>
        <?php foreach ($pagos as $key => $u): ?>
        <?php $monto = $monto + $u->cobro->monto; ?>
        <?php endforeach ?>
        <h4 class="text-primary">PAGO POR MANTENIMIENTO</h4>
        <ul class="list-group">
          <?php foreach ($pagos as $key => $u): ?>
          <li class="list-group-item">
            <span class="badge">ID: <?php echo $u->cobro->servicio->id ?> | FECHA:<?php echo $u->cobro->fecha_limite ?></span>
            <b>
            <?php echo ucfirst($u->cobro->servicio->servicio) ?>
            </b>
          </li>
          <?php endforeach ?>
          <li class="list-group-item">
            <div class="btn btn-default">
              <b>TOTAL: <?php echo $monto ?></b>
            </div>
          </li>
        </ul>
        <div class="pull-right">
          <button class="btn btn-success" type="submit"><i class="fa fa-credit-card"></i> PAGAR</button>
        </form>
      </div>
      <div class="text-center">
        <?php echo Paginator($pagos); ?>
      </div>
    </div>
  </div>
</div>
</div>