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
                $m = array(
                    3,
                    4,
                    5
                );
                print_r($m);
                echo "<br>";

                $m = array(
                    array(
                        3,
                        4,
                        5
                    ),
                    array(
                        3,
                        4,
                        5
                    ),
                    array(
                        3,
                        4,
                        5
                    )
                );
                print_r($m);
                $m[1][1] = $m[0][2];
                print_r($m);
            ?>
        </pre>
    </div>
  </body>
</html>