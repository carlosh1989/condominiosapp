<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-calendar-check-o fa-2x"></i> ESTATUS DE PAGO    <button class="pull-right btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-search-plus"></i> Datos de cobro</button> </h3>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo ucwords($pagos[0]->cobro->servicio->servicio) ?></h4>
        </div>
        <div class="modal-body">
        <label class="text-primary">Monto:</label> <label style="color: #444;"><?php echo $pagos[0]->cobro->monto ?></label>
        <br>
        <label class="text-primary">Fecha Emitido:</label> <label style="color: #444;"><?php echo $pagos[0]->cobro->fecha ?></label>
        <br>
        <label class="text-primary">Fecha Limite:</label> <label style="color: #444;"><?php echo $pagos[0]->cobro->fecha_limite ?></label>
        <br>
        <label class="text-primary">Monto:</label> <label style="color: #444;"><?php echo $pagos[0]->cobro->monto ?></label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  
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