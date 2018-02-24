<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-credit-card fa-2x"></i> PAGOS<b></b>
    </h3>
    <?php foreach ($pagos as $key => $u): ?>
    <!-- Modal -->
    <div class="modal fade" id="servicio<?php echo $u->id ?>" role="dialog">
      <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><i class="fa fa-file-text-o"></i> Detalles de Pago</h4>
          </div>
          <div class="modal-body">
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
            </div>
            <div class="panel panel-body">
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
            <div class="panel panel-body">
              <img class="img-responsive" src="<?php echo $pago->comprobante->imagen->imagen_original ?>">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach ?>
    
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <form action="<?php echo baseUrlRole() ?>ResidentesPagos/total" method="POST">
        <?php echo Token::field() ?>
        <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
          <thead>
            <tr class="">
              <th width="" style="color: #444;" class="text-uppercase">Num Referencia</th>
              <th width="" style="color: #444;" class="text-uppercase">Monto</th>
              <th width="5%" style="color: #444;text-align: center;" class="text-uppercase">Detalles</th>
            </tr>
          </thead>
          <tbody>
            <?php $monto = 0; ?>
            <?php foreach ($pagos as $key => $u): ?>
            <tr>
              <td class="text-uppercase">
                <!-- Trigger the modal with a button -->
                <a type="button" class="" data-toggle="modal" data-target="#servicio<?php echo $u->id ?>">#<?php echo $u->numero_referencia ?></a>
              </td>
              <td class="text-uppercase"><?php echo $u->monto_total ?></td>
              <td style="text-align: center;" class="text-uppercase">
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