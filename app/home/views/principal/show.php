<div class="partes">
  <!-- <h2>no ha empezado la busqueda</h2> -->
  <div class="white">
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
    
    
    </style>
<br><br><br><br>

    <h5 class="grey-text center"><?php echo $condominio->nombre ?></h5>
  <div class="row flex-container">

    <div class="col s12 m4 l4 offset-l2">
      <div class="card animated fadeInUp">
        <div class="card-image">
          <img class="materialboxed" src="<?php echo $condominio->imagen->imagen_grande ?>">
        </div>
        <div class="card-content">
          <ul>
            <?php if ($condominio->piscina == TRUE): ?>
            <li><i class="fa fa-check"></i>   Piscina </li>
              
            <?php endif ?>

            <?php if ($condominio->gym == TRUE): ?>
            <li><i class="fa fa-check"></i>   Gym </li>
            <?php endif ?>

            <?php if ($condominio->estacionamiento == TRUE): ?>
            <li><i class="fa fa-check"></i>   Estacionamiento </li>
            <?php endif ?>

            <?php if ($condominio->parque == TRUE): ?>
            <li><i class="fa fa-check"></i>   Parque </li>
            <?php endif ?>

            <?php if ($condominio->cancha == TRUE): ?>
            <li><i class="fa fa-check"></i>   Cancha </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </div>
   
    <div class="col s12 m4 l4">
      <div class="card animated fadeInUpBig">
        <div class="card-image">
<style type="text/css">
  iframe {
    max-width: 100%;
    height: auto;
}

.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.embed-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
<div class="embed-container">
  <iframe border="0" o el css: style="border:0px;"  src="https://www.google.com/maps/embed/v1/view?key=AIzaSyAuk0zce2D9OZVz_Bd_9tyXfl0A3XqIo84&center=<?php echo $condominio->lat ?>,<?php echo $condominio->lng ?>&zoom=15"></iframe>
</div>
        </div>
        <div class="card-content">
          <p class="grey-text"><?php echo $condominio->direccion ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
