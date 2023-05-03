<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>Conversor de Celsius para Fahrenheit:</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Preencha abaixo</h2>
            <form action="resposta.php" method="post">
                <label>Insira o valor:
                    <input type="number" step="0.01" name="celcius" required>
                </label>


               
                <button name="enviar"> Enviar </button>
            </form>
        </div>      
    </div>
</body>
</html>
