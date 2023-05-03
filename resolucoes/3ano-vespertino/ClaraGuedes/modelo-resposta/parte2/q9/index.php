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
        <h1>A melhor opção</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>RECOMENDAÇÃO DE LAZER</h2>
            <form action="resposta.php" method="post">
               


                <label>Escolha um clima:
                    <select name="tempo">
                        <option></option>
                        <option value="1">Ensolarado</option>
                        <option value="2">Ameno</option>
                        <option value="3">Chuvoso</option>
                        <option value="4">Nublado</option>
                        <option value="5">Tempestuoso</option>
                    </select>
               </label>


               


                <button name="enviar"> Enviar </button>
            </form>
        </div>      
    </div>
</body>
</html>
