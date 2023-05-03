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
       
    </header>
    <div class="container">
        <div class="box formulario">


            <form action="resposta.php" method="get">


                <label> A
                    <input type="number" name="a" required step = "1" value = "2">
                </label>
                <label> B
                    <input type="number" name="b" required step = "1" value = "5">
                </label>
                <label> C
                    <input type="number" name="c" required step = "1" value = "-3">
                </label>
               




                <button name="enviar"> Enviar </button>
            </form>
        </div>      
    </div>
</body>
</html>
