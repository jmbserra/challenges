<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<title></title>
	</head>
	<body  >

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
				
					<h2>BEM-VINDO<h2><span><a class="right" href="clients-list.php">LISTAR CLIENTES</a></span>
						
						<br>
					<p class="welcome-paragraph">
						GOMA is a company from Portugal that creates integrated web-based solutions.<br>  We work with organizations of all sizes to design and build great digital products.
					</p>

				</div>

				<div id="form-area">

					<? if (isset($_GET['included']) && $_GET['included'] == 1) { ?>

					<div class="accepted-submit"> <!--REFAZER -->
						<p>Os dados foram inseridos na base de dados</p>
					</div>

					<? } ?>

					<? if (isset($_GET['included']) && $_GET['included'] == 0) { ?>

					<div class="error-submit"> <!--REFAZER -->
						<p>ERRO, verifique se preencheu os campos devidamente.</p>
					</div>

					<? } ?>		

					<h2>INSERIR CLIENTE</h2>

					<div class="form-style-1">
						<form method="post" action="client_controller.php?action=insert">

							<table>
							
								<tr>
									<td colspan="2">
										<label>Nome</label>
										<input type="text" name="name" class="field-long" required/> 
									</td>	
								</tr>

								<tr>
									<td>
										<label>Email</label>
										<input type="email" name="email" class="field-long"  required/>
									</td>	
									<td>
										<label>Telefone</label>
										<input type="text" name="phone" class="field-long"  required/>
									</td>	
								</tr>						

								<tr>
									<td colspan="2">
										<label>Morada</label>
									<input type="text" name="address"  class="field-long" required/>
									</td>	
								</tr>

								<tr>
									<td >
										<label>Localidade</label>
										<input type="text" name="location"  class="field-long" required/>
									</td>	
									<td>
										<label>Pais</label>
										<select name="country">
											<option value="Angola">Angola</option>
											<option value="Germany">Germany</option>
											<option value="Great Britain">Great Britain</option>
											<option value="Hawaii">Hawaii</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Korea North">Korea North</option>
											<option value="Mexico">Mexico</option>
											<option value="Portugal">Portugal</option>
										</select>
									</td>	
								</tr>
												
								<tr>
									<td>
										<input type="submit" value="SUBMETER" />
									</td>	
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<footer id="footer-area" class="clear">

			<a href="HTTPS://GOMADEVELOPMENT.PT"><h2>HTTPS://GOMADEVELOPMENT.PT</h2></a>
			
		</footer>
	</body>
</html>