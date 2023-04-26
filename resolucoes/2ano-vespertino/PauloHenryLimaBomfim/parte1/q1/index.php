<?php
    $preco = $_POST["preco"] ?? "";
    $calculo = (float)$preco * 0.90; 
?>
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form arction="index.php" method="post">
				<label>Entre com um valor para aplicar um desconto de 10%:
					<input type="number" name="preco" required value="<?=$preco?>">
				</label>
		
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<h2>Valor do produto com desconto: R$<?=$calculo?>!</h2>
		</div>
	</div>
</body>
</html>