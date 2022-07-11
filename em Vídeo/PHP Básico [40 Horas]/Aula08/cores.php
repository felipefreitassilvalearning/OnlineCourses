<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../MODELO/_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
    <body>
        <div>
            <?php
                echo "<span class='texto'>$txt</span>";
            ?>
            <a href="cores.html">Voltar</a>
        </div>
    </body>
</html>