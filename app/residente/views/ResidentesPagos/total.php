<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-credit-card fa-2x"></i> INGRESAR COMPROBANTE<b></b>
    <button class="pull-right btn btn-default" data-toggle="collapse" data-target="#demo"><i class="fa fa-search-plus"></i> Lista de servicios</button>
    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <div class="row">
        <div class="col-md-12">
          <div id="demo" class="collapse">
            <table class="table table-striped table-condensed animated fadeIn panel" data-striped="true">
              <thead>
                <tr class="">
                  <th width="" style="color: #444;" class="text-uppercase">Servicio</th>
                  <th width="" style="color: #444;" class="text-uppercase">Fecha limite</th>
                  <th width="" style="color: #444;" class="text-uppercase">Monto</th>
                </tr>
              </thead>
              <tbody>
                <?php $monto = 0; ?>
                <?php foreach ($ser as $key => $u): ?>
                <tr>
                  <td class="text-uppercase"><?php echo $u->cobro->servicio->servicio ?></td>
                  <td class="text-uppercase"><?php echo $u->cobro->fecha_limite ?></td>
                  <td class="text-uppercase"><?php echo $u->cobro->monto ?></td>
                </tr>
                <?php endforeach ?>
                <tr>
                  <td class="text-uppercase"></td>
                  <td style="text-align:right;" class="text-uppercase">TOTAL:</td>
                  <td><?php echo $total ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <form action="<?php echo baseUrlRole() ?>ResidentesPagos/deposito_transferencia" method="POST">
        <?php echo Token::field() ?>
        <div class="">
          <br>
          <div class="row">
            <div class="col-md-12">
              <div class="col-lg-4">
                <input class="form-control" type="number" name="numero_referencia" placeholder="Número de referencia">
                <?php $servicios_ids = ArrSendUrl($checkboxvar) ?>
                <input type="hidden" name="servicios" value="<?php echo $servicios_ids ?>">
                <input type="hidden" name="monto_total" value="<?php echo $total ?>">
              </div>
              <div class="col-lg-4">
                <input type="text" name="fecha_deposito" class="datepicker form-control" placeholder="Fecha de Deposito/Trasnferencia">
                <script type="text/javascript">
                $( document ).ready(function() {
                $('.datepicker').pickadate({
                // Escape any “rule” characters with an exclamation mark (!).
                format: 'dd/mm/yyyy',
                formatSubmit: 'yyyy/mm/dd',
                hiddenPrefix: 'prefix__',
                hiddenSuffix: '__suffix',
                selectYears: true,
                selectMonths: true
                })
                
                });
                </script>
              </div>
              <div class="col-lg-4">
                <select class="form-control" name="banco_id">
                  <?php foreach ($bancos as $key => $b): ?>
                  <option value="<?php echo $b->id ?>"><?php echo $b->banco ?> - <?php echo $b->numero ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12">
              <div class="animated fadeIn subidaImagen">
                <div class="col-lg-4">
                  <div class="form-group">
                    <script src="//api.filestackapi.com/filestack.js" type="text/javascript"></script>
                    <input class="btn btn-primary btn-block" name="imagen" onchange="cambiarImagen(event.fpfile.url)" data-fp-services="COMPUTER,URL,WEBCAM" data-fp-button-text="Foto o Capture de Comprobante" data-fp-maxsize="1000000" data-fp-container="modal" data-fp-mimetypes="image/*" data-fp-apikey="A1nL8omiAR8W7pHi3cotzz" type="filepicker" required>
                  </div>
                </div>
                <div id="imagenSubidaDiv" class="col-lg-6">
                  <img id="imagenSubida" src="" alt="">
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12">
              <div class="col-md-12">
                <button class="btn btn-success pull-right"><i class="fa fa-upload"></i> Subir Comprobante</button>
              </div>
            </div>
          </div>
          <br>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<div class="modal fade" id="pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h5 class="modal-title" id="myModalLabel">Saldo positivo</h5>
  </div>
  <div class="modal-body">
    Usted tiene de saldo positivo <label class="text-success"><?php echo $saldo->monto_positivo ?></label>, quiere pagar los servicios con dicho saldo?
  </div>
  <form id="formSaldoPositivo" action="<?php echo baseUrlRole() ?>ResidentesPagos/pago_plus" method="POST">
    <?php echo Token::field() ?>
    <?php $servicios_ids = ArrSendUrl($checkboxvar) ?>
    <input type="hidden" name="servicios" value="<?php echo $servicios_ids ?>">
    <input type="hidden" name="monto_total" value="<?php echo $total ?>">
  </form>
  <div class="modal-footer">
    <button id="pagaPlus" type="button" class="btn btn-primary">Si</button>
    <!--                 <button type="button" class="btn btn-default modalClick" data-toggle="modal" data-target="#myModal2">
    </button> -->
    
    <button id="" type="button" class="btn btn-default"  data-dismiss="modal">No, quiero subir el comprobante.</button>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
function cambiarImagen(data)
{
//alert(data);
$('#imagenSubida').addClass('panel panel-default');
$('#imagenSubida').attr('src','https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'+data);
$('#imagenSubidaDiv').addClass('animated bounceInDown');
}
$( ".modalClick" ).click(function() {
$('#myModal').modal('hide')
});
$( "#pagaPlus" ).click(function() {
document.getElementById("formSaldoPositivo").submit();
});
<?php if ($saldo->monto_positivo > $total): ?>
$( document ).ready(function() {
$('#pregunta').modal('show')
$('#imagenSubida').addClass('panel panel-default');
$('#imagenSubida').attr('src','https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'+data);
$('#imagenSubidaDiv').addClass('animated bounceInDown');
});
<?php else: ?>
<?php endif ?>
$( "#deposito" ).click(function() {
document.getElementById("formDeposito").submit();
});
</script>