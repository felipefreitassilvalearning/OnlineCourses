<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 15 - Projeto Final - PHP POO</title>
</head>

<body class="flex">
    <header>
        <h1>Aqui vão aparecer meus códigos PHP</h1>
    </header>
    <main class="flex">
        <pre>
            <?php
                echo "<br>";
                
                require_once '../Aula 14/Video.php';
                require_once '../Aula 14/Gafanhoto.php';
                require_once 'Visualizacao.php';
                
                $videos[] = new Video("Aula 1 de POO");
                $videos[] = new Video("Aula 12 de PHP");
                $videos[] = new Video("Aula 15 de HTML");

                $gafanhotos[] = new Gafanhoto("Jubileu", 22, "M", "juba");
                $gafanhotos[] = new Gafanhoto("Creuza", 12, "F", "creuzita");

                $visualizacoes[] = new Visualizacao($gafanhotos[getRandom(2)], $videos[getRandom(3)]);
                $visualizacoes[] = new Visualizacao($gafanhotos[getRandom(2)], $videos[getRandom(3)]);

                $visualizacoes[getRandom(2)] -> avaliar();
                $visualizacoes[getRandom(2)] -> avaliarNota(4);
                $visualizacoes[getRandom(2)] -> avaliarPorc(85);

                print("<h2>Vídeos</h2>");
                foreach ($videos as $video) {
                    print_r($video);
                }

                hr();

                print("<h2>Gafanhotos</h2>");
                foreach ($gafanhotos as $gafanhoto) {
                    print_r($gafanhoto);
                }

                hr();

                print("<h2>Visualizações</h2>");
                foreach ($visualizacoes as $visualizacao) {
                    print_r($visualizacao);
                }

                function hr() {
                    $hr = "-------------------<br>";
                    print($hr);
                }

                function getRandom($bound) {
                    return random_int(0, $bound - 1);
                }
            ?>
        </pre>
    </main>
    <footer>
        <h6>Layout por Felipe Freitas</h6>
    </footer>
</body>

</html>