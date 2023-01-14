<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../MODELO/_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
    <body>
        <div>
            <?php
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "A raiz de $valor é igual a: ".number_format($rq, 2);
            ?>
            <a href="valor.html">Voltar</a>
        </div>
    </body>
</html>