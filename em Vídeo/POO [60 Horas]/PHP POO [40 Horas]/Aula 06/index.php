<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 06 - PHP POO</title>
</head>
    <body class="flex">
        <header><h1>Aqui vão aparecer meus códigos PHP</h1></header>
        <main class="flex">
            <pre>
                <?php
                    echo "<br>";
                    require_once 'ControleRemoto.php';
                    $c = new ControleRemoto();
                    $c -> ligar();
                    for ($i = ($c -> getVolume()); $i < 85; $i+=5) { 
                        $c -> maisVolume();
                    }
                    $c -> abrirMenu();
                ?>
            </pre>
        </main>
        <footer><h6>Layout por Felipe Freitas</h6></footer>
    </body>
</html>