<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-file-o fa-2x"></i> SERVICIOS CONDOMINIO<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Servicios/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> INGRESAR SERVICIO</i></a>    </h3>
  </div>
 <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th width="5%" style="color: #444;">ID</th>
            <th width="" style="color: #444;" class="text-uppercase">Servicio</th>
            <th width="5%" style="color: #444;" class="text-uppercase">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($servicios as $key => $u): ?>
          <tr>
            <td class="text-uppercase"><?php echo $u->id ?></td>
            <td class="text-uppercase"><?php echo $u->servicio ?></td>
            <td style="text-align: center;" class="text-uppercase">
            <a class="fa fa-times" href="<?php echo baseUrlRole() ?>FormasPagos/<?php echo $u->id ?>/delete"></a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($servicios); ?>
      </div>
    </div>
  </div>
</div>
</div>

