<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        .containerFotos {
        height: 500px;
        width: 100%;
        overflow: hidden;
        position: relative;
        }
        .photo {
        position: absolute;
        animation: round 16s infinite;
        opacity: 0;
        width: 100%;
        }
        @keyframes round {
        25% {
        opacity: 1;
        }
        40% {
        opacity: 0;
        }
        }
        .img:nth-child(1) {
        animation-delay: 12s;
        }
        .img:nth-child(2) {
        animation-delay: 8s;
        }
        .img:nth-child(3) {
        animation-delay: 4s;
        }
        .img:nth-child(4) {
        animation-delay: 0s;
        }
        /* Preloader */
        #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff;
        /* change if the mask should have another color then white */
        z-index: 99;
        /* makes sure it stays on top */
        }
        #status {
        width: 200px;
        height: 200px;
        position: absolute;
        left: 50%;
        top: 50%;
        background-position: center;
        margin: -100px 0 0 -100px;
        /* is width and height divided by two */
        }
        html, body {
        /* Ubicación de la imagen */
        /*background-image: url('https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/quality=value:80/compress/http://mmbiz.qpic.cn/mmbiz/6h2xPVDOpF6cs0iaKpGeAwJ0DCTdyTGqbTr9B3Bopenqle50vyPuW8qEFdhpYShYic4HNtGjgEhiaqNurtLylPulA/0?wx_fmt=jpeg');
        /* Nos aseguramos que la imagen de fondo este centrada vertical y
        horizontalmente en todo momento */
        background-position: center center;
        /* La imagen de fondo no se repite */
        background-repeat: no-repeat;
        /* La imagen de fondo está fija en el viewport, de modo que no se mueva cuando
        la altura del contenido supere la altura de la imagen. */
        background-attachment: fixed;
        /* La imagen de fondo se reescala cuando se cambia el ancho de ventana
        del navegador */
        background-size: cover;
        /* Fijamos un color de fondo para que se muestre mientras se está
        cargando la imagen de fondo o si hay problemas para cargarla  */
        background-color: #fff;
        }
        .navHead{
        font-family: 'Raleway';
        font-weight: 400;
        height: 200vh;
        background:rgba(0,0,0,0.1);   /* for latest browsers */
        text-shadow: 0px 0px 1px #fff;
        
        }
        .cards-container {
        column-break-inside: avoid;
        }
        .cards-container .card {
        display: inline-block;
        overflow: visible;
        }
        @media only screen and (max-width: 600px) {
        .cards-container {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
        }
        }
        @media only screen and (min-width: 601px) {
        .cards-container {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;
        }
        }
        @media only screen and (min-width: 993px) {
        .cards-container {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        }
        }
        .text-center {
        text-align: center;
        }
        .card.small {
        height: auto;
        }
        .card.small .card-content {
        height: auto;
        }
        .card.small .card-action {
        position: relative;
        }
        .parallax-container
        {
        height:350px;
        }
        .img-parallax1{
        width: 100%;
        height: auto;
        max-width: 100%;
        }
        .titulo{
        font-size: 1.3em;
        text-shadow: 0px 1px 1px #777;
        text-align: center;
        color:#555;
        }
        
        p{
        text-align: justify;
        color:#777;
        }
        
        .parallax-contenedor
        {
        height:100px;
        }
        
        .icono{
        /*IMPORTANTE*/
        display: flex;
        justify-content: center;
        align-items: center;
        }
        
        .imagenBanner{
        width: 100%;
        height: auto;
        max-width: 70%;
        }
        
        .imagenBanner2{
        position:absolute;
        bottom:0px;
        left:50%;
        }
        
        .tituloBanner{
        font-family: 'Cantarell', sans-serif;
        color:#555;
        font-style: italic;
        }
        
        .parrafoBanner{
        line-height: 0px;
        text-indent: 0.7em;
        }
        
        @media (max-width: 600px) {
        .tituloBanner{
        font-family: 'Cantarell', sans-serif;
        text-align: center;
        }
        
        .parrafoBanner{
        line-height: 0px;
        text-indent: 0.7em;
        text-align: center;
        }
        }
        
        #particles {
        width: 100%;
        overflow: hidden;
        position: absolute;
        }
        
        .row:last-child {
        margin-bottom: 0;
        }
        
        .navbarFixed {
        background-color: #fff;
        position: fixed; /* Set the navbar to fixed position */
        top: 0; /* Position the navbar at the top of the page */
        width: 100%; /* Full width */
        z-index: 995;
        padding-bottom: 0px;
        }
        .underline {
        display: inline-block;
        position: relative;
        padding-bottom: 4px;
        margin-bottom: 10px;
        background: linear-gradient(to right, red, red);
        background-size: 0% 2px;
        background-repeat: no-repeat;
        background-position: left bottom;
        animation: underline 2s ease-in-out 2s infinite; /* remove infinite if you want only once */
        }
        @keyframes underline {
        to {
        background-size: 100% 2px;
        }
        }




        </style>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo baseUrl ?>assets/bower/lightbox2/dist/css/lightbox.min.css">
        <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.css">
        <script src="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.js"></script>
    </head>
    <body>
        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="<?php echo baseUrl ?>assets/bower/lightbox2/dist/js/lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo baseUrl ?>node_modules/blazy/blazy.min.js"></script>
        <div class="navbarFixed">
            <nav>
                <div class="nav-wrapper white navHead">
                <img class="responsive-img animated rotateInDownLeft" width="115" src="https://images.vexels.com/media/users/3/137236/isolated/preview/1af2af36ebb8b6fde38f3ec8acab82bb-edificio-plano-ciudad-gran-casa-by-vexels.png">
                    <a style="color: #222;" href="#" class="brand-logo animated fadeInUp">TUCONDOMINIO.COM</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a style="color: #444;font-size: 1.3em" href="sass.html">Sobre nosotros</a></li>
                        <li><a style="color: #444;font-size: 1.3em" href="sass.html">Misión Visión</a></li>
                        <li><a style="color: #444;font-size: 1.3em" href="<?php echo baseUrl ?>auth/login">Login</a></li>
                    </ul>
                </div>

            </nav>
        </div>
        <?php echo $content ?>
          <footer class = "page-footer blue-grey lighten-5">
    <div class = "row">
      <div class = "col s12 m3 l3 offset-m1 offset-l1">
        <h5 class = "red-text">TUCONDOMINIO.COM</h5>
        <p>Somos tu servicio para la administracion de condominios y/o pagos de servicios de diversas indoles (Residenciales, Centros Comerciales, etc).
        Es la herramienta ideal para juntas de condominios autoaministradas o empresas de servicios administrativos.</p>
      </div>
      <div class = "col s12 m3 l3 offset-m1 offset-l1">
        <h5 class = "red-text">DIRECCION</h5>
        <p>Open Sistem, Inc <br>
          AV, Adonay Parra <br>
        Univ Santa Maria Barinas</p>
      </div>
      <div class = "col s12 m4 l4">
        <h5 class = "red-text">CONTACTO</h5>
        <p>Phone: +1 (52) 2215-251 <br>
          Fax: +1 (22) 5138-219 <br>
        info@laborator.al</p>
      </div>
      

    </div>
    
    <div class = "footer-copyright green">
      <div class = "container center">
      TUCONDOMINIO.COM 2016 
      </div>
    </div>
  </footer>
        <script>
        $(window).on('load', function() { // makes sure the whole site is loaded
        //$('#status').fadeOut(); // will first fade out the loading animation
        //$('#preloader').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(200).css({'overflow':'visible'});
        $(document).ready(function(){
        $('.slider').slider();
        });
        $(document).ready(function() {
        $('select').material_select();
        // Initialize collapse button
        $(".button-collapse").sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true, // Choose whether you can drag to open on touch screens,
            });
            // Initialize collapsible (uncomment the line below if you use the dropdown variation)
            //$('.collapsible').collapsible();
            });
            $('.noticias').addClass('animated bounceIn');
            })
            </script>
<!--             <script type="text/javascript">
            $(document).ready(function(){
            //Check if the current URL contains '#'
            if(document.URL.indexOf("#")==-1){
            // Set the URL to whatever it was plus "#".
            url = document.URL+"#";
            location = "#";
            //Reload the page
            location.reload(true);
            }
            });
            </script> -->
        </body>
    </html>