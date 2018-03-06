<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-users fa-2x"></i> CUENTAS RESIDENTES<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Residentes/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> INGRESAR RESIDENTE</i></a>    </h3>
  </div>
 <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th style="color: #444;">ID</th>
            <th width="" style="color: #444;" class="text-uppercase">Nombre</th>
            <th width="" style="color: #444;" class="text-uppercase">N° Casa</th>
            <th width="5%" style="color: #444;" class="text-uppercase">Ver</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($residentes as $key => $u): ?>
          <tr>
            <td class="text-uppercase"><?php echo strtolower($u->imagen->imagen_original)?></td>
            <td class="text-uppercase"><?php echo $u->nombre ?></td>
            <td class="text-uppercase"><?php echo $u->num_casa ?></td>
            <td style="text-align: center;" class="text-uppercase">
            <a class="fa fa-search" href="<?php echo baseUrlRole() ?>Residentes/<?php echo $u->id ?>"></a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($residentes); ?>
      </div>
    </div>
  </div>
</div>
</div>

