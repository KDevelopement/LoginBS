<?php 
	session_start();
	require '../config.php';
	$email = $_POST['email'];
	$senha= $_POST['senha'];
	$userlista = $conn->prepare("SELECT * FROM usuarios WHERE email = '$email' LIMIT 1");
	$userlista->execute();
	$user_count = $userlista->rowCount();
		if($user_count <= 0){
			$_SESSION['loginerro'] = "Não Existe Conta Com Este Endereço De E-Mail.";
			header("location: ../login.html");
		}else{
			$banlist = $conn->prepare("SELECT * FROM usuarios_ban WHERE email = '$email'");
			$banlist->execute();
			$ban_count = $banlist->rowCount();
			if($ban_count <= 0){
				$userinfo = $userlista->fetch(PDO::FETCH_ASSOC);
				if($senha == $userinfo['senha']){
					$_SESSION['status'] = $userinfo['status'];
					if($_SESSION['status'] == 1){
						$_SESSION['email'] = $email;
						unset($_SESSION['status']);
						header("location: ../index.html");
					}else{
						$_SESSION['loginerro'] = "Sua Conta Não Foi Verificada!";
						header("location: ../login.html");
						unset($_SESSION['status']);
					}
				}else{
					$_SESSION['loginerro'] = "Senha Incorreta!";
					header("location: ../login.html");
				}
			}else{
				$baninfo = $banlist->fetch(PDO::FETCH_ASSOC);
				$datahj = date("Y-m-d H:i:s");
				$data_expires = date_create($baninfo['data_expire']);
				$data_expire = date_format($data_expires,"d/m/Y H:i:s");
				if($datahj >= $baninfo['data_expire']){
					$userinfo = $userlista->fetch(PDO::FETCH_ASSOC);
					if($senha == $userinfo['senha']){
						$_SESSION['status'] = $userinfo['status'];
						if($_SESSION['status'] == 1){
							$_SESSION['email'] = $email;
							unset($_SESSION['status']);
							header("location: ../index.html");
						}else{
							$_SESSION['loginerro'] = "Sua Conta Não FOi Verificada!";
							header("location: ../login.html");
							unset($_SESSION['status']);
						}
					}else{
						$_SESSION['loginerro'] = "Senha Incorreta!";
						header("location: ../login.html");
					}
				}else{
					$_SESSION['loginerro'] = "Sua Conta Esta Banida, Por ".$baninfo['motivo']." Até ".$data_expire;
					header("location: ../login.html");
				}
			}
		}

 ?>
