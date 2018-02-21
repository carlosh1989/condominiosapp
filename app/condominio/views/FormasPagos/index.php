<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-users fa-2x"></i> FORMAS DE PAGO<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Residentes/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> INGRESAR RESIDENTE</i></a>    </h3>
  </div>
 <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th style="color: #444;">ID</th>
            <th width="" style="color: #444;" class="text-uppercase">Banco</th>
            <th width="" style="color: #444;" class="text-uppercase">Tipo</th>
            <th width="" style="color: #444;" class="text-uppercase">N° Cuenta</th>
            <th width="" style="color: #444;" class="text-uppercase">Nombre</th>
            <th width="" style="color: #444;" class="text-uppercase">Cedula</th>
            <th width="" style="color: #444;" class="text-uppercase">Email</th>
            <th width="" style="color: #444;" class="text-uppercase">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($formas_pagos as $key => $u): ?>
          <tr>
            <td class="text-uppercase"><?php echo $u->id ?></td>
            <td class="text-uppercase"><?php echo $u->banco ?></td>
            <td class="text-uppercase"><?php echo $u->tipo ?></td>
            <td class="text-uppercase"><?php echo $u->numero ?></td>
            <td class="text-uppercase"><?php echo $u->nombre ?></td>
            <td class="text-uppercase"><?php echo $u->cedula ?></td>
            <td class="text-uppercase"><?php echo $u->email ?></td>
            <td style="text-align: center;" class="text-uppercase">
            <a class="fa fa-times" href="<?php echo baseUrlRole() ?>FormasPagos/<?php echo $u->id ?>/delete"></a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($formas_pagos); ?>
      </div>
    </div>
  </div>
</div>
</div>

