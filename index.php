<?php 
  @session_start();
  require './config.php';
  require './php/protect.php';
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title> Sistema De Login :: BinaryTheme.COM </title>
      <link href="./css/bootstrap.css" rel="stylesheet" />
      <link href="./css/font-awesome.css" rel="stylesheet" />
      <link href="./css/custom.css" rel="stylesheet" />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <div id="wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="./images/logo.jpg" style="width: 125px;height: 25px;" />
            </a>
          </div>
          <span class="logout-spn" >
            <a href="./sair.html" style="color: red;">
              <i class="fa fa-power-off"></i>
            </a>  
          </span>
        </div>
      </div>
      <!-- /. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li class="active-link">
              <a href="./index.html" ><i class="fa fa-desktop "></i>Inicio</a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="page-wrapper" >
        <div id="page-inner">
          <div class="row">
            <div class="col-lg-12">
              <h2>
                <i class="fa fa-dashboard"></i>
                <b>
                  Painel De Controle
                </b>
              </h2>
              <hr />
            </div>
          </div> 
<?php if($user['status'] == 1){ ?>
          <div class="row">
            <div class="col-lg-12 ">
              <div class="alert alert-success">
                Olá <strong style="color: #000;"><?php print_r($user['nome'].' '.$user['sobrenome']); ?></strong>, Seja Bem Vinda(o)!
              </div>
              <hr />
            </div>
          </div>
<?php }else{ ?>
          <div class="row">
            <div class="col-lg-12 ">
              <div class="alert alert-danger">
                Olá <strong style="color: #000;"><?php print_r($user['nome'].' '.$user['sobrenome']); ?></strong>, Você Precisa Verificar Seu E-Mail.
                <span class="pull-right">
                  <button type="button" data-toggle="modal" data-target="#active" class="btn btn-info has-shadow btn-sm">
                    <i class="fa fa-info-circle"></i> Clique Aqui. 
                  </button>
                </span>
              </div>
              <hr />
            </div>
          </div>
<?php } ?>
          <!-- /. ROW  --> 
          <div class="row pad-top">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 text-center">
              Olá Esse é o Tema Exclusivo!
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-center">
              <div class="div-square">
                <a href="index.html?update=0" ><i class="fa fa-refresh fa-5x"></i><h4> Ver Atualização </h4></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="row">
        <div class="col-lg-1" ></div>
        <div class="col-lg-9" >
          2017 &copy; Tema Excluzivo.
        </div>
        <div class="col-lg-2" >
          Obrigado Por Escolhe-me!
        </div>
      </div>
    </div>
    <script src="./js/jquery-1.10.2.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/custom.js"></script>
  </body>
</html>
