<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 02 - PHP POO</title>
</head>
    <body class="flex">
        <header><h1>Aqui vão aparecer meus códigos PHP</h1></header>
        <main class="flex">
            <pre>
                <?php
                    require_once 'Caneta.php';
                    $c1 = new Caneta();
                    $c1->modelo = "BIC Cristal";
                    $c1->cor = "Azul";
                    // $c1->ponta = 0.5;
                    // $c1->carga = 99;
                    // $c1->tampada = true;
                    var_dump($c1);
                    echo "<br>";
                    $c1->rabiscar();
                    $c1->tampar();
                    $c1->rabiscar();
                    print_r($c1);
                ?>
            </pre>
        </main>
        <footer><h6>Layout por Felipe Freitas</h6></footer>
    </body>
</html>