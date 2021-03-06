<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <h3 class="panel-title text-muted"><i class="fa fa-handshake-o fa-2x"></i> PARTIDOS<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>partidos/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> Agregar PARTIDO</i></a>    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th width="" class="text-uppercase">PARTIDO</th>
            <th class="text-uppercase">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (Paginator($partidos) as $key => $u): ?>
          <tr>
            <td><?php echo $u->nombre ?></td>
            <td width="5%">
              <form action="<?php echo baseUrlRole() ?>partidos/<?php echo $u->id_partidos ?>/delete" method="POST">
                <?php echo Token() ?>
                <a class="text-primary fa fa-pencil fa-2x" href="<?php echo baseUrlRole() ?>partidos/<?php echo $u->id_partidos ?>/edit"></a>
                <a class="text-danger fa fa-times fa-2x" href="#" onclick="this.parentNode.submit(); return false;"></a>
              </form>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($partidos); ?>
      </div>
    </div>
  </div>
</div>
</div>