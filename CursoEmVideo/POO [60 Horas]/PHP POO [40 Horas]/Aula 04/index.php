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
                    // $c1 = new Caneta();
                    // $c1->setModelo("BIC");
                    // // $c1->modelo = "NIC";
                    // $c1->setPonta(0.5);
                    // // $c1->ponta = 0.4;
                    // printf("Eu tenho uma caneta %s de ponta %.2f", $c1->getModelo(), $c1->getPonta());
                    // // print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

                    $c1 = new Caneta("BIC", "Azul", 0.6);
                    print_r($c1);

                    $c1 = new Caneta("KKKK", "Verde", 1);
                    print_r($c1);
                ?>
            </pre>
        </main>
        <footer><h6>Layout por Felipe Freitas</h6></footer>
    </body>
</html>