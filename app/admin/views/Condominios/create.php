
<script language="javascript">
$(document).ready(function(){
$("#municipioSelect").change(function () {
$("#municipioSelect option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var idMunicipio = $(this).val();
//alert(idMunicipio);
$.get("<?php echo baseUrlRole() ?>RegistroUbch/parroquiasCne", { idMunicipio:idMunicipio }, function(data){
$("#ParroquiaSelect").html(data);
});
});
})
});
</script>
<script language="javascript">
$(document).ready(function(){
$("#ParroquiaSelect").change(function () {
$("#ParroquiaSelect option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var idParroquia = $(this).val();
//alert(idParroquia);
$.get("<?php echo baseUrlRole() ?>RegistroUbch/mesasCne", { idParroquia:idParroquia }, function(data){
$("#MesasSelect").html(data);
});
});
})
});
</script>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user-plus fa-2x"></i> INGRESAR CUENTA CONDOMINIO</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrlRole() ?>condominios" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-12">
          <input class="form-control" type="text" name="name" placeholder="NOMBRE CONDOMINIO" required>
        </div>
      </div>
<br>
      <div class="row">
        <div class="col-lg-6">
          <div class="animated fadeIn subidaImagen">
            <div class="col-lg-6">
              <div class="form-group">
                <script src="//api.filestackapi.com/filestack.js" type="text/javascript"></script>
                <input class="btn btn-primary btn-block" name="imagen" onchange="cambiarImagen(event.fpfile.url)" data-fp-services="COMPUTER,URL,WEBCAM" data-fp-button-text="Ingresar Imagen" data-fp-maxsize="1000000" data-fp-container="modal" data-fp-mimetypes="image/*" data-fp-apikey="A1nL8omiAR8W7pHi3cotzz" type="filepicker" required>
              </div>
            </div>
            <div id="imagenSubidaDiv" class="col-lg-6">
              <img id="imagenSubida" src="" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
        <h5 class="text-muted">Caracteristicas de condominio</h5>
          <input type="checkbox" name="piscina" value="1"> Piscina <br>
          <input type="checkbox" name="estacionamiento" value="1"> Estacionamiento <br>
          <input type="checkbox" name="gym" value="1"> Gym<br>
          <input type="checkbox" name="parque" value="1"> Parque <br>
          <input type="checkbox" name="cancha" value="1"> Cancha <br>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="col-md-12">
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJAW7MQOeI2ZgWp58Zdphfa9F7AQy3YRI&sensor=false&libraries=places"></script>
            <input id="searchInput" class="input-controls" type="text" placeholder="INGRESE UBICACIÓN" required>
            <div class="map" id="map" style="width: 100%; height: 300px;"></div>
            <div class="form_area">
              <input type="text" name="location" id="location">
              <input type="hidden" name="lat" id="lat">
              <input type="hidden" name="lng" id="lng">
            </div>
          </div>
        </div>
        <script>
        /* script */
        function initialize() {
        var latlng = new google.maps.LatLng(28.5355161,77.39102649999995);
        var map = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: 13,
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
        var myMarker = new google.maps.Marker({
        position: new google.maps.LatLng(47.651968, 9.478485),
        draggable: true
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
        
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
        
        bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
        infowindow.setContent(place.formatted_address);
        infowindow.open(map, marker);
        
        });
        // this function will work on marker move event into map
        google.maps.event.addListener(marker, 'dragend', function() {
        geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
        bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng());
        infowindow.setContent(results[0].formatted_address);
        infowindow.open(map, marker);
        }
        }
        });
        });
        }
        function bindDataToForm(address,lat,lng){
        document.getElementById('location').value = address;
        document.getElementById('lat').value = lat;
        document.getElementById('lng').value = lng;
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
      
      <div class="col-lg-12">
        <h4 class="text-muted text-center text-uppercase">
        Datos de acceso
        </h4>
      </div>
      <div class="col-lg-4">
        <input class="form-control" type="text" name="email" placeholder="EMAIL">
      </div>
      <div class="col-lg-4">
        <input class="form-control" id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'tiene que tener minimo 6 caracteres.' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="CLAVE" required>
      </div>
      <div class="col-lg-4">
        <input class="form-control" id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'La clave no coinciden.' : '');" placeholder="VERIFICAR CLAVE" required>
      </div>
      <div class="col-lg-12">
        <br>
        <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save fa-2x"></i></button>
      </div>

    </form>
  </div>
  <script>
  $("#formCheckPassword").validate({
  rules: {
  password: {
  required: true,
  minlength: 6,
  maxlength: 10,
  } ,
  cfmPassword: {
  equalTo: "#password",
  minlength: 6,
  maxlength: 10
  }
  },
  messages:{
  password: {
  required:"the password is required"
  }
  }
  });
  </script>