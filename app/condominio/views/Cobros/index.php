<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-credit-card fa-2x"></i> COBROS<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Cobros/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> INGRESAR COBRO</i></a>    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th style="color: #444;">ID</th>
            <th width="" style="color: #444;" class="text-uppercase">Servicio</th>
            <th width="" style="color: #444;" class="text-uppercase">Monto</th>
            <th width="" style="color: #444;" class="text-uppercase">Fecha limite</th>
            <th width="10%" style="color: #444;" class="text-uppercase">Estatus</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($cobros as $key => $u): ?>
          <tr>
            <td class="text-uppercase"><?php echo $u->id ?></td>
            <td class="text-uppercase"><?php echo $u->servicio->servicio ?></td>
            <td class="text-uppercase"><?php echo $u->monto ?></td>
            <td class="text-uppercase"><?php echo $u->fecha_limite ?></td>
            <td style="text-align: center;" class="text-uppercase">
              <?php if ($u->estatus == false): ?>
              <a class="btn btn-default" href="<?php echo baseUrlRole() ?>Cobros/notificar/<?php echo $u->id ?>"> <i class="fa fa-send"></i> Notificar</a>
              <?php else: ?>
              <a class="btn btn-primary" href="<?php echo baseUrlRole() ?>Residentes/<?php echo $u->id ?>"> <i class="fa fa-search"></i> Ver pagos</a>
              <?php endif ?>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($cobros); ?>
      </div>
    </div>
  </div>
</div>
</div>