<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Valor de um produto com um Desconto de 10%</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Porcentagem</h2>
			<form action="resposta.php" method="post">

				<label>Informe qual o valor que terá o desconto 10%:
					<input type="number" id="desconto" name="desconto" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>