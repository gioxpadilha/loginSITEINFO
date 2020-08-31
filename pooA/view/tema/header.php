<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo HOME_URI?>view/tema/css/style.css"> 
	

	<title>Criação de Sites</title>
</head>
<body>
	<header>
		<div id="h-logo"><img src="<?php echo HOME_URI  ?>view/tema/imagens/logo.png" style="height:75px"/></div>
		<div id='h-center'>
			<div id="icon-menu">
				<a id="link-icon-menu" href="#"><img src="<?php echo HOME_URI  ?>view/tema/imagens/icon-menu.png" style="height:75px"/></a>
			</div>
			<div id="icon-close-menu">
				<a id="link-icon-close-menu" href="#"><img src="<?php echo HOME_URI  ?>view/tema/imagens/icon-close.png" /></a>
			</div>
		</div>
		<div id='h-user'>
			
			<?php 
			if(isset($_SESSION['user'])){

				echo
                '
                 <div>
                    <span>'.$_SESSION['user']->nome.'</span>
                    <a class="btn btn-danger btn-sm" href="'.HOME_URI.'usuario/logout">LOGOUT</a>
                 </div>
                ';
			}
			else{
				echo '<a class="btn btn-primary btn-sm" href="'.HOME_URI.'usuario/login">LOGIN</a>';
			}
			?>
		</div>
	</header>
	