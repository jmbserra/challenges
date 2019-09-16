<?php 

	$action = 'retrieve';
	require 'client_controller.php';

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<title></title>
	</head>
	<body >

		<div id="main-container">
			<div id="header-area">
				
				<div id="logo-area">
					<a href="index.php"><img src="img/gomalogo.png"></a>
				</div>
				
				<div id="header-clients-text">
					<h1>CLIENTES<h1>
				</div>

				
			</div>

			<hr class="clear">
			
			<div id="content-area">

				<div id="welcome-area">

					
					<a class="clients-link-list left" href="index.php">INSERIR NOVO</a>
					<br><br>

					<h2 id=" " class="left">LISTA DE CLIENTES <span class="welcome-paragraph">(</span> <span class="entry-number" "><?= $clients_size ?></span> <span class="welcome-paragraph">resultados no sistema )</span><h2>
											
					<a class="clients-link-list right" href="clients-list.php?action=last_three">ULTIMOS 3 REGISTOS</a>

				</div>

				<div id="client-entry-area" class="clear">

					<? foreach ($clients as $index => $client) { ?>
						
						<div class="client-entry">
						
							<h1><?=$client->name ?></h1>
							<h2>
								<?=$client->address ?>, <?=$client->location ?> , <?=$client->country ?> , email: <?=$client->email ?> , tel. <?=$client->phone ?>	
							</h2>

						</div>
					<? } ?>
				</div>

			</div>
		</div>	
		<br><br>
		<div id="footer-area" class="clear">

			<h2>HTTPS://GOMADEVELOPMENT.PT</h2>
			
		</div>



	</body>
</html>