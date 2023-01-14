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
            echo "Quantidade de palavras: ";
            $frase = "Estou estudando PHP";
            $cont = str_word_count($frase, 0);
            print($cont);

            echo "<br>Vetor de palavras: ";
            $frase = "Estou estudando PHP";
            $cont = str_word_count($frase, 1);
            print_r($cont);

            echo "<br>Vetor elaborado de palavras: ";
            $frase = "Estou estudando PHP";
            $cont = str_word_count($frase, 2);
            print_r($cont);
        ?>
    </div>
  </body>
</html>