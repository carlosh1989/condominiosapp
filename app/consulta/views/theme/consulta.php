<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <!--     <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
    -->
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/bootstrap-theme-paper/paper.css">
    
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/bootstrap-side-navbar/source/assets/stylesheets/navbar-fixed-side.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/animate.css/animate.min.css">
    <script src="<?php echo baseUrl ?>assets/bower/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/bootstrap-table/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/pickadate/lib/themes/default.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/pickadate/lib/themes/default.date.css">
    <link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/pickadate/lib/themes/default.time.css">
    <script src="<?php echo baseUrl ?>assets/bower/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    <script src="<?php echo baseUrl ?>assets/bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/jquery.inputmask.bundle.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/phone-codes/phone.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/phone-codes/phone-be.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/phone-codes/phone-ru.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/bindings/inputmask.binding.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/inputmask/dist/inputmask/bindings/inputmask.binding.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/pickadate/lib/picker.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/pickadate/lib/picker.time.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/pickadate/lib/picker.date.js"></script>
    <script src="<?php echo baseUrl ?>assets/bower/pickadate/lib/translations/es_ES.js"></script>
    
    <style>
    body{
    background-color: #222;
    }
    .table {
    border-bottom:0px !important;
    }
    .table th, .table td {
    border: 1px !important;
    }
    .fixed-table-container {
    border:0px !important;
    }
    input[type="button"] {
    transition: all .3s;
    border: 1px solid #ddd;
    padding: 3px 10px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 15px;
    }
    input[type="button"]:not(.active) {
    background-color:transparent;
    }
    .active {
    background-color: #299BFF;
    color :#fff;
    }
    input[type="button"]:hover:not(.active) {
    background-color: #ddd;
    }
    .example .pagination>li>a,
    .example .pagination>li>span {
    border: 1px solid red;
    }
    .pagination>li.active>a {
    background: grey;
    color: #fff;
    }
    th {
    color: red;
    box-shadow: 0px 0px 1px #CECECE;
    }

    .rojo
    {
      background-color:#E51C23;
      
    }
    
    </style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-lg-2">
          <nav class="navbar navbar-default navbar-fixed-side">
            <div class="container">
              <div class="navbar-header text-white rojo">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a href="<?php echo baseUrl ?>" style="color:#fff;height: 73px;" class="navbar-brand text-white" href="#">
                  <!-- <img style="width: 47px;" id="profile-img" class="profile-img-card" src="" /> --><i class="fa fa-search fa-2x"></i> CONSULTAS</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class=""><a href="<?php echo baseUrlRole() ?>centros"><i class="fa fa-university"></i> CENTRO</a></li>
                </ul>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <div class="col-sm-9 col-lg-10">
        <!-- <img width="100%" height="130px;" src="<?php echo baseUrl ?>/assets/img/banner.jpg" alt=""> -->
        <br>
        <?php echo $content ?>
      </div>
    </div>
  </div>
  <!-- /container -->
  <!-- MENSAJES FLASH SWEET ALERT 2 -->
  <?php if (Message::hasMessages()): ?>
  <?php echo Message::show() ?>
  <?php endif ?>
  <?php if (Message::hasQuestion()): ?>
  <?php echo Message::showQuestion() ?>
  <?php endif ?>
</body>
</html>