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
                $a = isset($_GET["ano"]) ? $_GET["ano"] : 2000;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e terá $i anos.";
                if ($i < 16) {
                    $tipoVoto = "não vota";
                } elseif (($i < 18) || ($i > 65)) {
                    $tipoVoto = "voto opcional";
                } else {
                    $tipoVoto = "voto obrigatório";
                }
                echo "<br>Para essa idade, $tipoVoto";
            ?>
            <a href="permicoesextras.html">Voltar</a>
        </div>
    </body>
</html>