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
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[não informado]";
                $nome = isset($_GET["nome"]) ? $_GET["nome"] : 0;
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
                $idade = date("Y") - $ano;
                echo "$nome é $sexo e tem $idade anos";
            ?>
            <a href="idade.html">Voltar</a>
        </div>
    </body>
</html>