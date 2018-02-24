<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-calendar-check-o fa-2x"></i> ESTATUS DE PAGO<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Cobros/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> INGRESAR COBRO</i></a>    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th style="color: #444;">ID</th>
            <th width="" style="color: #444;" class="text-uppercase">Residente</th>
            <th width="" style="color: #444;" class="text-uppercase">Servicio</th>
            <th width="" style="color: #444;" class="text-uppercase">Monto</th>
            <th width="10%" style="color: #444;" class="text-uppercase">Fecha limite</th>
            <th width="10%" style="color: #444;text-align: center;" class="text-uppercase"><i class="fa fa-wpexplorer fa fa-2x"></i> Estatus</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pagos as $key => $u): ?>
          <tr>
            <td class="text-uppercase"><?php echo $u->id ?></td>
            <td class="text-uppercase">
            <a href="<?php echo baseUrlRole() ?>Residentes/<?php echo $u->residente->id ?>">
            <?php echo $u->residente->nombre ?>
            </a>
            </td>
            <td class="text-uppercase"><?php echo $u->cobro->servicio->servicio ?></td>
            <td class="text-uppercase"><?php echo $u->cobro->monto ?></td>
            <td class="text-uppercase"><?php echo $u->cobro->fecha_limite ?></td>
            <td style="text-align: center;" class="text-uppercase">
              <?php if ($u->estatus === 0): ?>
              <button class="btn btn-default"><i class="fa fa-money"></i></button>
              <?php endif ?>
              <?php if ($u->estatus === 1): ?>
              <button class="btn btn-primary"><i class="fa fa-hourglass-end"></i></button>
              <?php endif ?>
              <?php if ($u->estatus === 2): ?>
              <button class="btn btn-success"><i class="fa fa-check"></i></button>
              <?php endif ?>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($pagos); ?>
      </div>
    </div>
  </div>
</div>
</div>