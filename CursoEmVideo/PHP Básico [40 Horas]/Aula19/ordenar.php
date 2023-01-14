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
                $vn = array(65, 5, 6, 42, 18, 21);
                $vl = array("A", "J", "M", "X", "K");
                print_r($vn);
                print_r($vl);

                echo "Assorting...<br>";
                asort($vn);
                arsort($vl);
                print_r($vn);
                print_r($vl);

                echo "Sorting...<br>";
                rsort($vn);
                sort($vl);
                print_r($vn);
                print_r($vl);
            ?>
        </pre>
    </div>
  </body>
</html>