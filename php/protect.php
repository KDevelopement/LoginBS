<?php 
	if($_SESSION['email']){
		$userlista = $conn->prepare("SELECT * FROM usuarios WHERE email = '".$_SESSION['email']."' LIMIT 1");
		$userlista->execute();
		$user = $userlista->fetch(PDO::FETCH_ASSOC);
	}else{
		$_SESSION['loginerro'] = "Você Precisa Está Logada(o)!";
		header("location: ./login.html");
	}
 ?>
