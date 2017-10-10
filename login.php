<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> Sistema De Login :: w3layouts </title>
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
		<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	</head>
	<body>
		<h1>Sistema De Login</h1>
		<div class="main-w3">
            <?php
              if(isset($_SESSION['loginerro'])){
              		echo '<div class="login-w3ls"><div class="icons">';
                    echo '<div class="alert alert-danger wrapper hidden-vertical animated fadeInUp text-sm text-center">';
                    echo $_SESSION['loginerro'];
                    echo '</div>';
                    echo '</div></div>';
                	unset($_SESSION['loginerro']);
              }elseif(isset($_SESSION['logout'])){
              		echo '<div class="login-w3ls"><div class="icons">';
                    echo '<div class="alert alert-success wrapper hidden-vertical animated fadeInUp text-sm text-center">';
                    echo $_SESSION['logout'];
                    echo '</div>';
                    echo '</div></div>';
                unset($_SESSION['logout']);

              }
            ?>
		   <form action="./php/validar-login.php" method="post">
		    <h2><span class="fa fa-user t-w3" aria-hidden="true"></span></h2>
		    <div class="login-w3ls">
		    	<div class="icons">
			    	<input type="email" name="email" placeholder="E-Mail" required="">
					<span class="fa fa-user" aria-hidden="true"></span>
		        	<div class="clear"></div> 
				</div> 		   
				<div class="icons">
					<input type="password" name="senha" placeholder="Senha" required="">
					<span class="fa fa-key" aria-hidden="true"></span>
				    <div class="clear"></div>
				</div>
			    <div class="btnn">
		        	<button type="submit">Entrar</button>
		        </div>	
		     </div>
		   </form>
		 </div> 
		<div class="copy">
			<p>Sistema De Login - 2017 / Tema Via -> W3Layouts</p>
		</div>
	</body>
</html>