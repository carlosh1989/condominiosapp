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
            
            <?php $servicios = ArrGetUrl($u->servicios); ?>
            <?php foreach ($servicios as $key => $s): ?>
            <?php $pago = \App\ResidentePago::find($s); ?>
            
            <?php endforeach ?>
            <div class="panel panel-body">
              <div class="row">
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
                <div class="col-lg-6">
                   <a style="cursor: pointer;" href="<?php echo $pago->comprobante->imagen->imagen_original ?>" target="_blank">  <img class="img-responsive" src="<?php echo $pago->comprobante->imagen->imagen_grande ?>"></a>
                
                </div>
              </div>
            </div>
            <div class="panel panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
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
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer panel-body">
            <form action="<?php echo baseUrlRole() ?>Pagos/aprobar" method="POST">
              <?php echo Token::field() ?>
              <div class="row">
                <div class="col-lg-6">
                  <input class="form-control" type="text" name="monto_comprobante" placeholder="Monto Comprobante" required>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Aprobar</button>
              <button type="button" class="btn btn-default" data-dismiss="modal" onclick="return confirm('Esta seguro que quiere rechazar este pago?')"><i class="fa fa-times"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach ?>
    
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th width="" style="color: #444;" class="text-uppercase">Residente</th>
            <th width="" style="color: #444;" class="text-uppercase">Monto</th>
            <th width="5%" style="color: #444;text-align: center;" class="text-uppercase"><i class="fa fa-wpexplorer fa-2x"></i></th>
          </tr>
        </thead>
        <tbody>
          <?php $monto = 0; ?>
          <?php foreach ($pagos as $key => $u): ?>
          <tr>
            <td class="text-uppercase">
              <!-- Trigger the modal with a button -->
              <a href="<?php echo baseUrlRole() ?>Residentes/<?php echo $u->residentes_id ?>" type="button"><?php echo $u->residente->nombre ?></a>
            </td>
            <td class="text-uppercase"><?php echo $u->monto_total ?></td>
            <td style="text-align: center;" class="text-uppercase">
              <a style="cursor: pointer;" class="" data-toggle="modal" data-target="#servicio<?php echo $u->id ?>" type="button">#<?php echo $u->numero_referencia ?></a>
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