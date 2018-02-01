<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-users fa-2x"></i> CUENTAS CONDOMINIOS<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Condominios/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> CREAR CUENTA</i></a>    </h3>
  </div>
 <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th>ID</th>
            <th width="" style="color: #444;" class="text-uppercase">Nombre</th>
            <th width="" style="color: #444;" class="text-uppercase">Role</th>
            <th width="" style="color: #444;" class="text-uppercase">Usuario</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $key => $u): ?>
          <tr>
            <td class="text-uppercase"><?php echo $u->id ?></td>
            <td class="text-uppercase"><?php echo $u->name ?></td>
            <td class="text-uppercase"><?php echo $u->role ?></td>
            <td class="text-uppercase"><?php echo $u->email ?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($usuarios); ?>
      </div>
    </div>
  </div>
</div>
</div>