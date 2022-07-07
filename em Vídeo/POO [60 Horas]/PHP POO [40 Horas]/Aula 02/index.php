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
            <?php
                require_once 'Caneta.php';
                $c1 = new Caneta();
                $c1->cor = "Azul";
                $c1->ponta = 0.5;
                $c1->tampada = true;
                $c1->rabiscar();
                $c1->tampada = false;
                $c1->rabiscar();
                print_r($c1);

                echo "<br><hr><br>";

                $c2 = new Caneta();
                $c2->cor = "Verde";
                $c2->carga = 50;
                $c2->tampar();
                print_r($c2);
            ?>
        </main>
        <footer><h6>Layout por Felipe Freitas</h6></footer>
    </body>
</html>