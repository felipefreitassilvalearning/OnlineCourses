<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 07 - Ultra Emoji Combat - PHP POO</title>
</head>
    <body class="flex">
        <header><h1>Aqui vão aparecer meus códigos PHP</h1></header>
        <main class="flex">
            <pre>
                <?php
                    echo "<br>";
                    require_once 'Lutador.php';
                    $lutadores = array();
                    $lutadores[] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
                    $lutadores[] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
                    $lutadores[] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
                    $lutadores[] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
                    $lutadores[] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 12, 2, 4);
                    $lutadores[] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
                    foreach ($lutadores as $l) {
                        echo $l->status()."<br>";
                    }
                ?>
            </pre>
        </main>
        <footer><h6>Layout por Felipe Freitas</h6></footer>
    </body>
</html>