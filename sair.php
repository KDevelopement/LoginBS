<?php
	session_start();
	unset($_SESSION['email']);
	$_SESSION['logout'] = "Deslogado Com Sucesso!";
	header("location: ./login.html");
?>