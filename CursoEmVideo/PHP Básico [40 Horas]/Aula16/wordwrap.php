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
            $txt = "Exemplo de frase bem grande para ser cortada. Além disso, por o parametro estar true, vai cortas palavras grandes ao meio";
            $res = wordwrap($txt, 5, "<br>\n", true);
            echo $res;

            echo "<br>";
            $txt = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque odio sint voluptatibus, dolores rerum iure ad corporis? Illum, labore accusantium quas aperiam, rem fuga mollitia ipsam recusandae voluptatibus fugit dolores.";
            $res = wordwrap($txt, 20, "<br>\n", false);
            echo $res;
        ?>
    </div>
  </body>
</html>