<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../MODELO/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
  <body>
    <div>
        <pre>
            <?php
              $v = array("A", "J", "M", "X", "K");
              echo "O vetor tem ".count($v)." elementos<br>";
              print_r($v);
              var_dump($v);
              echo "Add element in the end<br>";
              array_push($v, "O");
              print_r($v);
              echo "Remove element in the end<br>";
              array_pop($v);
              print_r($v);
              echo "Add element in the beginning<br>";
              array_unshift($v, "O");
              print_r($v);
              echo "Remove element in the beginning<br>";
              array_shift($v);
              print_r($v);
            ?>
        </pre>
    </div>
  </body>
</html>