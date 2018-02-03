<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-university fa-2x"></i> CONDOMINIO<b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> DATOS
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Condominios/<?php echo $condominio->id ?>/delete"><i class="fa fa-times text-danger"></i></a>
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>Condominios/<?php echo $condominio->id ?>/edit"><i class="fa fa-pencil text-primary"></i></a>
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="35%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-address-card-o"></i> Nombre:</b></td>
                  <td class="text-uppercase"><?php echo ucwords($condominio->nombre) ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-map"></i> Dirección:</b></td>
                  <td class="text-uppercase"><?php echo $condominio->direccion ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-file"></i> Piscina:</b></td>
                  <td class="text-uppercase">
                    <?php if ($condominio->piscina == TRUE): ?>
                    si
                    <?php else: ?>
                    no
                    <?php endif ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-file"></i> Gym:</b></td>
                  <td class="text-uppercase">
                    <?php if ($condominio->gym == TRUE): ?>
                    si
                    <?php else: ?>
                    no
                    <?php endif ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-file"></i> Cancha:</b></td>
                  <td class="text-uppercase">
                    <?php if ($condominio->parque == TRUE): ?>
                    si
                    <?php else: ?>
                    no
                    <?php endif ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-file"></i> Estacionamiento:</b></td>
                  <td class="text-uppercase">
                    <?php if ($condominio->estacionamiento == TRUE): ?>
                    si
                    <?php else: ?>
                    no
                    <?php endif ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-6 animated fadeIn animated">
        <img class="img-thumbnail" src="<?php echo $condominio->imagen->imagen_medio ?>">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-12 animated fadeIn animated">
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJAW7MQOeI2ZgWp58Zdphfa9F7AQy3YRI&sensor=false&libraries=places"></script>
        <div class="map" id="map" style="width: 100%; height: 300px;"></div>
        
        <script>
        /* script */
        function initialize() {
        var latlng = new google.maps.LatLng(<?php echo $condominio->lat ?>,<?php echo $condominio->lng ?>);
        var map = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: 15,
        zoomControl: false,
        scaleControl: true,
        mapTypeControl: false,
        fullscreenControl: true,
        });
        var marker = new google.maps.Marker({
        map: map,
        position: latlng,
        draggable: true,
        anchorPoint: new google.maps.Point(0, -29)
        });
        
        var input = document.getElementById('searchInput');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var geocoder = new google.maps.Geocoder();
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        var infowindow = new google.maps.InfoWindow();
        autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
        window.alert("Autocomplete's returned place contains no geometry");
        return;
        }
        
        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
        } else {
        map.setCenter(place.geometry.location);
        map.setZoom(17);
        }
        
        
        bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
        infowindow.setContent(place.formatted_address);
        
        
        });
        // this function will work on marker move event into map
        
        }
        
        google.maps.event.addDomListener(window, 'load', initialize);
        function cambiarImagen(data)
        {
        //alert(data);
        $('#imagenSubida').addClass('panel panel-default');
        $('#imagenSubida').attr('src','https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'+data);
        $('#imagenSubidaDiv').addClass('animated bounceInDown');
        }
        </script>
      </div>
    </div>
  </div>
</div>
</div>