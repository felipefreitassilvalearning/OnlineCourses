<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../MODELO/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    span {
        color: rgb(215, 60, 60);
        font-size: 20px;
    }
  </style>
</head>
    <body>
        <div>
            <?php
                $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 7;
                $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 7;
                $media = ($nota1 + $nota2) / 2;
                echo "A média entre <span>$nota1</span> e <span>$nota2</span> é igual a <span>$media</span><br>";
                if ($media < 5) {
                    $situacaoAluno = "REPROVADO";
                } elseif (($media >= 5) && ($media < 7)) {
                    $situacaoAluno = "RECUPERAÇÃO";
                } else {
                    $situacaoAluno = "APROVADO";
                }
                echo "Situação do aluno: <span>$situacaoAluno</span>";
            ?>
            <a href="medias.html">Voltar</a>
        </div>
    </body>
</html>