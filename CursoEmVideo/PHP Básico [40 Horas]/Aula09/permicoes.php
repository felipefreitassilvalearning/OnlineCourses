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
                if ($i >= 18) {
                    $v = "já pode votar";
                    $d = "já pode dirigir";
                } else {
                    $v = "não pode votar";
                    $d = "não pode dirigir";
                }
                echo "<br>Com essa idade, você $v e $d";
            ?>
            <a href="permicoes.html">Voltar</a>
        </div>
    </body>
</html>