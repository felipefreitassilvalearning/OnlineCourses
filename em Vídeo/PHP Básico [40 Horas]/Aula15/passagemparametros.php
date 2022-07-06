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
          // por valor
          function teste($x) {
            $x += 2;
            echo "<p>O valor de X é $x</p>";
          }
          
          $a = 3;
          teste($a);
          echo "<p>O valor de A é $a</p";

          echo "<br>";
          // por referencia
          function testeR(&$x) {
            $x += 2;
            echo "<p>O valor de X é $x</p>";
          }
          
          $a = 3;
          testeR($a);
          echo "<p>O valor de A é $a</p";
        ?>
    </div>
  </body>
</html>