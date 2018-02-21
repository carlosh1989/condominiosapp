<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-credit-card fa-2x"></i> PAGOS SERVICIOS<b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <form action="<?php echo baseUrlRole() ?>ResidentesPagos/total" method="POST">
        <?php echo Token::field() ?>
        <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
          <thead>
            <tr class="">
              <th width="" style="color: #444;" class="text-uppercase">Servicio</th>
              <th width="" style="color: #444;" class="text-uppercase">Fecha limite</th>
              <th width="" style="color: #444;" class="text-uppercase">Monto</th>
              <th width="5%" style="color: #444;text-align: center;" class="text-uppercase"><i class="fa fa-list"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php $monto = 0; ?>
            <?php foreach ($pagos as $key => $u): ?>
            <tr>
              <td class="text-uppercase"><?php echo $u->cobro->servicio->servicio ?></td>
              <td class="text-uppercase"><?php echo $u->cobro->fecha_limite ?></td>
              <td class="text-uppercase"><?php echo $u->cobro->monto ?></td>
              <td style="text-align: center;">
              <input type="checkbox" name="checkboxvar[]" value="<?php echo $u->id ?>"></td>
            </tr>
            <?php $monto = $monto + $u->cobro->monto; ?>
            <?php endforeach ?>
          </tbody>
        </table>
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