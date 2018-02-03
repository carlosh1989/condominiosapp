<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user fa-2x"></i> RESIDENTE<b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> DATOS
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Residente/<?php echo $residente->id ?>/delete"><i class="fa fa-times text-danger"></i></a>
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Residente/<?php echo $residente->id ?>/edit"><i class="fa fa-pencil text-primary"></i></a>
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="35%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-address-card-o"></i> Nombre:</b></td>
                  <td class="text-uppercase"><?php echo ucwords($residente->nombre) ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa-address-card"></i> Cedula:</b></td>
                  <td class="text-uppercase"><?php echo $residente->cedula ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-calendar" data-inputmask="'alias': '99/99/9999'"></i> Fecha nacimientio:</b></td>
                  <td class="text-uppercase"><?php echo $residente->fecha_nacimiento ?></td>
                </tr>

                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-desc"></i>Num. casa:</b></td>
                  <td class="text-uppercase"><?php echo $residente->num_casa ?></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-6 animated fadeIn animated">
        <img class="img-thumbnail" src="<?php echo $residente->imagen->imagen_medio ?>">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-12 animated fadeIn animated">
        
   
      </div>
    </div>
  </div>
</div>
</div>