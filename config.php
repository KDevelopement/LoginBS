<?php 
	$server = 'localhost';
	$user = 'root';
	$pass = 'xampp175';
	$db = 'login';
	try{
		$conn = new PDO("mysql:host=$server;dbname=$db",$user,$pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		#print_r("CONECTADO COM SUCESSO!");
	}catch(PDOExeption $e){
		print_r("FALHA NA CONEXÃO".$e->getMessage());
	}
 ?>