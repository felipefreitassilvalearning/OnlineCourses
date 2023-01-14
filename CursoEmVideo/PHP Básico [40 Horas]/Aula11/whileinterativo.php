<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../MODELO/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
    <body>
        <div>
            <?php
                $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 1;
                $final = isset($_GET["final"]) ? $_GET["final"] : 10;
                $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 2;
                if ($inicio <= $final) {
                    $i = $inicio;
                    while ($i <= $final) {
                        echo $i." ";
                        $i += $incremento;
                    }
                } else {
                    $i = $inicio;
                    while ($i >= $final) {
                        echo $i." ";
                        $i -= $incremento;
                    }
                }
            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>