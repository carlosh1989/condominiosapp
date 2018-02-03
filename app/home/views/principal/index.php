<div class="partes">
  <!-- <h2>no ha empezado la busqueda</h2> -->
  <div class="containerFotos white">
    <style type="text/css">
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
    
      .flex-container {
  /* We first create a flex layout context */
  display: flex;
  
  /* Then we define the flow direction 
     and if we allow the items to wrap 
   * Remember this is the same as:
   * flex-direction: row;
   * flex-wrap: wrap;
   */
  flex-flow: row wrap;
  
  /* Then we define how is distributed the remaining space */
  justify-content: space-around;
}
    </style>
    <div class="slider">
      <ul class="slides">
        <li><img src="http://www.urbanova.bo/wp-content/uploads/2017/09/diap_alassio2G.jpg"/>
          <div class="caption center-align">
            <h4><a href="#" style="padding:5px;" class="white tituloBanner">PAGOS</a></h4>
            <h5 class="light white-text text-lighten-3 white-text"> <a href="#" style="padding:5px;" class="green white-text">Nunca fue tan facil ordenar los pagos</a></h5>
          </div>
        </li>
        <li><img src="http://www.torresaltima.com/img/Banner_home_06Final.png"/>
          <div class="caption center-align">
            <h4><a href="#" style="padding:5px;" class="white tituloBanner">HISTORIAL</a></h4>
            <h5 class="light white-text text-lighten-3 white-text"> <a href="#" style="padding:5px;" class="green white-text">Llevar un control e historial de pagos.</a></h5>
          </div>
        </li>
        <li><img src="http://www.urbanova.bo/wp-content/uploads/2017/09/diap_alassio4G.jpg"/>
          <div class="caption center-align">
            <h4><a href="#" style="padding:5px;" class="white tituloBanner">NOTIFICACIONES</a></h4>
            <h5 class="light white-text text-lighten-3 white-text"> <a href="#" style="padding:5px;" class="green white-text">Informaciones y noticias del condominio.</a></h5>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <style type="text/css">

  </style>
    <h5 class="grey-text center">CONDOMINIOS ADSCRITOS</h5>
  <div class="row flex-container">

    <?php foreach ($condominios as $c): ?>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo $c->imagen->imagen_medio ?>">
        </div>
        <div class="card-content">
          <h5 class="green-text"><?php echo $c->nombre ?></h5>
          <p class="grey-text"><?php echo $c->direccion ?></p>
        </div>
        <div class="card-action">
          <a class="red-text" href="<?php echo baseUrl ?>">Detalles <i class="fa fa-search"></i></a>
        </div>
      </div>
    </div> 
    <?php endforeach ?>

    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo baseUrl ?>assets/img/residencia/2.jpg">
        </div>
        <div class="card-content">
          <h5 class="green-text">Alto Barinas Norte</h5>
          <p class="grey-text">Norte de barinas</p>
        </div>
        <div class="card-action">
          <a class="red-text" href="#">Detalles <i class="fa fa-search"></i></a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo baseUrl ?>assets/img/residencia/3.jpg">
        </div>
        <div class="card-content">
          <h5 class="green-text">Centro Barinas</h5>
          <p class="grey-text">Centro de barinas</p>
        </div>
        <div class="card-action">
          <a class="red-text" href="#">Detalles <i class="fa fa-search"></i></a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo baseUrl ?>assets/img/residencia/4.jpg">
        </div>
        <div class="card-content">
          <h5 class="green-text">Alto Barinas</h5>
          <p class="grey-text">Alto Barinas</p>
        </div>
        <div class="card-action">
          <a class="red-text" href="#">Detalles <i class="fa fa-search"></i></a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo baseUrl ?>assets/img/residencia/5.jpg">
        </div>
        <div class="card-content">
          <h5 class="green-text">Lomas de Alto Barinas</h5>
          <p class="grey-text">Lomas</p>
        </div>
        <div class="card-action">
          <a class="red-text" href="#">Detalles <i class="fa fa-search"></i></a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo baseUrl ?>assets/img/residencia/5.jpg">
        </div>
        <div class="card-content">
          <h5 class="green-text">Alto Barinas</h5>
          <p class="grey-text">Alto Barinas sur</p>
        </div>
        <div class="card-action">
          <a class="red-text" href="#">Detalles <i class="fa fa-search"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>