<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 14 - Projeto Final - PHP POO</title>
</head>

<body class="flex">
    <header>
        <h1>Aqui vão aparecer meus códigos PHP</h1>
    </header>
    <main class="flex">
        <pre>
            <?php
                echo "<br>";

                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                
                $v[] = new Video("Aula 1 de POO");
                $v[] = new Video("Aula 12 de PHP");
                $v[] = new Video("Aula 15 de HTML");

                $g[] = new Gafanhoto("Jubileu", 22, "M", "juba");
                $g[] = new Gafanhoto("Creuza", 12, "F", "creuzita");

                print("<h2>Vídeos</h2>");
                foreach ($v as $video) {
                    print_r($video);
                }

                hr();

                print("<h2>Gafanhotos</h2>");
                foreach ($g as $gafanhoto) {
                    print_r($gafanhoto);
                }

                function hr() {
                    $hr = "--------------------------------------------------<br>";
                    print($hr);
                }
            ?>
        </pre>
    </main>
    <footer>
        <h6>Layout por Felipe Freitas</h6>
    </footer>
</body>

</html>