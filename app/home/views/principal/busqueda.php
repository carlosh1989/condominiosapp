<?php
$geotools = new \League\Geotools\Geotools();
?>
<style type="text/css">
.item {
position: relative;
overflow: hidden;
}
.item img {
-moz-transition: all 3s;
-webkit-transition: all 3s;
transition: all 3s;
}
.item:hover img {
-moz-transform: scale(1.1);
-webkit-transform: scale(1.1);
transform: scale(1.1);
}
</style>
<script type="text/javascript">
var bLazy = new Blazy({
breakpoints: [{
width: 420 // Max-width
, src: 'data-src-small',
}]
, success: function(element){
setTimeout(function(){
var parent = element.parentNode;
parent.className = parent.className.replace(/\bloading\b/,'');
}, 200);
}
});
lightbox.option({
'resizeDuration': 100,
'wrapAround': false,
'alwaysShowNavOnTouchDevices':true,
'showImageNumberLabel':false,
'wrapAround':true
})
</script>
<script type="text/javascript">
$(document).ready(function() {
$('#lejos').click(function() {
$('.lejos').toggle("slide");
});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
$('#cerca').click(function() {
$('.cerca').toggle("slide");
});
});
</script>
<script type="text/javascript">
$("#lejos").click(function(){
var color = clicked ? 'red' : 'blue';
$(this).css('background-color', color);
clicked = !clicked;
});
</script>
<ul id="slide-out" class="side-nav">
    <li id="geoMapa">
        <div id="panel" class="panel panel-primary">
            <div class="panel-body">
                <form id="coordenadasForm" action="">
                    <div class="row">
                        <div class="col m12">
                            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJAW7MQOeI2ZgWp58Zdphfa9F7AQy3YRI&sensor=false&libraries=places"></script>
                            <input id="searchInput" class="input-controls" type="text" placeholder="Ingrese su ubicación" onPaste="" onkeydown="if (event.keyCode == 13) {return false;}" />
                            <div class="map" id="map" style="width: 100%; height: 300px;"></div>
                            <div class="form_area">
                                <input type="hidden" name="location" id="location">
                                <input type="hidden" name="lat" id="lat">
                                <input type="hidden" name="lng" id="lng">
                            </div>
                        </div>
                    </div>
    <?php
    if (isset($_GET['lat']) and isset($_GET['lng'])) {
    if ($_GET['lat']) {
    $latMap = $_GET['lat'];
    }
    if ($_GET['lng']) {
    $lngMap = $_GET['lng'];
    }
    } else {
     $latMap = "8.6231498";
     $lngMap = "-70.23710449999999";
    }
    

    ?>
                    <script>
                    /* script */
                    function initialize() {
                    var latlng = new google.maps.LatLng(<?php echo $latMap ?>,<?php echo $lngMap ?>);
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
                    //alert(lat+' '+lng);
                    document.getElementById('coordenadasForm').submit();
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
                    <script>
            $('#searchInput').keypress(function(e) {
              if (e.keyCode == '13') {
                 e.preventDefault();
                 //your code here
               }
            });​
        </script>
                </form>
            </div>
        </div>
    </li>

    <li>
        <div class="col m12 s12 l12">
            <div class="col s3 m6 l6">
                <div class="switch">
                    <label>
                        <div class="switch">
                            <label style="margin-left: 20px;">
                                <i class="green-text fa fa-bus fa-2x" aria-hidden="true"></i>
                                LEJOS
                                <input id="lejos" type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </label>
                </div>
            </div>
            <div class="col s3 m6 l12">
                <div class="switch">
                    <label>
                        <div class="switch">
                            <label style="margin-left: 20px;">
                                <i class="green-text fa fa-street-view fa-2x" aria-hidden="true"></i>
                                CERCA
                                <input id="cerca" type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </li>
</ul>
<style type="text/css">
#fixedbutton {
position: fixed;
top: 100px;
right: 0px;
z-index: 997;
padding: 10px;
background-color: #fff;
border-radius: 2px;
box-shadow: 0px 0px 3px #444;
border-radius: 0px;
}
</style>
<div class="row product_categories">

    <a id="fixedbutton" href="#" data-activates="slide-out" class="button-collapse"><i class="green-text fa fa-cog fa-3x animated fa-spin" aria-hidden="true"></i></a>
    <style type="text/css">
    .input-controls {
    margin-top: 10px;
    border: 1px solid transparent;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    #searchInput {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 50%;
    }
    #searchInput:focus {
    border-color: #4d90fe;
    }
    </style>
    <?php
    if (isset($_GET['lat']) and isset($_GET['lng'])) {
    if ($_GET['lat']) {
    $lat = $_GET['lat'];
    }
    if ($_GET['lng']) {
    $lng = $_GET['lng'];
    }
    } else {
        $lat = 0;
        $lng = 0;
    }
    

    ?>
<ul id="cat">
    

    <?php foreach ($resultados as $key => $parte): ?>
    <?php
    $coordA   = new \League\Geotools\Coordinate\Coordinate([$parte->usuario->locatario->lat,$parte->usuario->locatario->lng]);
    $coordB   = new \League\Geotools\Coordinate\Coordinate([$lat,$lng]);
    $distance = $geotools->distance()->setFrom($coordA)->setTo($coordB);
    //printf("%s\n",$distance->in('km')->haversine());
    $numero = $parte->id;
    if ($distance->flat()<=2000)
    {
    $distancia = "lejos";
    $logoMap = "green";
    }
    else
    {
    $distancia = "cerca";
    $logoMap = "";
    }
    ?>
    <li id="<?php  echo ceil($distance->flat()); ?>">
    <div class="col s12 m2 <?php echo $distancia ?>">
        <div class="card animated fadeIn">
            <div class="card-image item">
            <?php echo $parte->id ?>
                <a href="<?php echo $parte->imagenes->first()->imagen_grande ?>" data-lightbox="image-1"><img data-src="<?php echo $parte->imagenes->first()->imagen_medio ?>" src="<?php echo baseUrl ?>assets/img/loader/loader1.gif" class="responsive-img z-depth-2 b-lazy"/></a>
            </div>
            <div class="card-content">
                <?php  echo ceil($distance->flat()); ?>
                <p class="flow-text">
                    <?php echo $parte->descripcion ?>
                </p>
                <p>
                    <?php echo $parte->usuario->lat ?>
                </p>
                <p>
                    <?php echo $parte->usuario->lng ?>
                </p>
            </div>
            <style type="text/css">
            .fa-img
            {
            color:#535353;
            }
            
            </style>
            <div class="card-action grey lighten-5">
                <div class="col s12 m12">
                    <div class="col m4 s4">
                        <a class="" href="#">
                            <i class="fa fa-shopping-bag fa-2x fa-img"></i>
                        </a>
                    </div>
                    <div class="col m4 s4">
                        <a class="" href="#">
                            <i class="fa fa-map-signs fa-2x fa-img <?php echo $logoMap ?>-text"></i>
                        </a>
                    </div>
                    <div class="col m4 s4">
                        <a class="" href="#">
                            <i class="fa fa-user fa-2x fa-img"></i>
                        </a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    </li>
    <?php endforeach ?>
</ul>
</section>
</div>
<script type="text/javascript">
$(document).ready(function() {

$("#cat li").sort(function (a, b) {
    return parseInt(a.id) > parseInt(b.id);
}).each(function(){
    var elem = $(this);
    elem.remove();
    $(elem).appendTo("#cat");
})

$('select').material_select();
// Initialize collapse button
$(".button-collapse").sideNav({
menuWidth: 200, // Default is 300
edge: 'left', // Choose the horizontal origin
closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
draggable: true, // Choose whether you can drag to open on touch screens,
});
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();
});
</script>

<script type="text/javascript">
var apiGeolocationSuccess = function(position) {
    //alert("API geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);

};

var tryAPIGeolocation = function() {
    jQuery.post( "https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyDCa1LUe1vOczX1hO_iGYgyo8p_jYuGOPU", function(success) {
        apiGeolocationSuccess({coords: {latitude: success.location.lat, longitude: success.location.lng}});
  })
  .fail(function(err) {
    alert("API Geolocation error! \n\n"+err);
  });
};

var browserGeolocationSuccess = function(position) {
    //alert("Browser geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);

    <?php
    if (isset($_GET['lat']) and isset($_GET['lng'])) {
?> 
    $("#geoMapa").hide();
<?php
    }
else{
?>
    //document.getElementById('location').value = address;
    document.getElementById('lat').value = position.coords.latitude;
    document.getElementById('lng').value = position.coords.longitude;
    //alert(lat+' '+lng);
    document.getElementById('coordenadasForm').submit();
<?php
}
?>





};

var browserGeolocationFail = function(error) {
 //alert('no se puede');
 $("#geoMapa").show();
 swal('Oops...', 'No pudimos ubicarlo automaticamente, use el mapa en la configuración para calcular los repuestos mas cercanos a usted!', 'warning');
};

var tryGeolocation = function() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
        browserGeolocationSuccess,
      browserGeolocationFail,
      {maximumAge: 50000, timeout: 20000, enableHighAccuracy: true});
  }
};

tryGeolocation();
</script>