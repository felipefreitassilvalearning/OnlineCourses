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
          $p = "Leite";
          $pr = 4.5;
          // echo "O $p custa R$ ".number_format($pr, 2);
          printf("O %s custa R$ %.2f", $p, $pr);

          echo "<br>";

          $v[0] = 4;
          $v[1] = 8;
          $v[2] = 3;
          print_r($v);
          echo "<br>";
          $v2 = array (3, 7, 6, 2, 1, 9);
          print_r($v2);
        ?>
    </div>
  </body>
</html>