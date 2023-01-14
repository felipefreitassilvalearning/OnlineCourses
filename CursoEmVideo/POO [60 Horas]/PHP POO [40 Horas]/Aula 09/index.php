<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 09 - Exercicio Prático - PHP POO</title>
</head>

<body class="flex">
    <header>
        <h1>Aqui vão aparecer meus códigos PHP</h1>
    </header>
    <main class="flex">
        <pre>
            <?php
                echo "<br>";
                require_once 'Pessoa.php';
                require_once 'Livro.php';

                $p[0] = new Pessoa("Pedro", 22, "M");
                $p[1] = new Pessoa("Maria", 25, "F");

                $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
                $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
                $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

                $l[0]->abrir();
                $l[0]->folhear(80);
                $l[0]->voltarPag();
                print($l[0]->detalhes());
                echo "<hr>";
                print($l[1]->detalhes());
                echo "<hr>";
                print($l[2]->detalhes());
            ?>
        </pre>
    </main>
    <footer>
        <h6>Layout por Felipe Freitas</h6>
    </footer>
</body>

</html>