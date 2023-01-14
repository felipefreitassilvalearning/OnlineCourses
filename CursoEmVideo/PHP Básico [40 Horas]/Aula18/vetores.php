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
                $n = array(3, 5, 8, 2);
                print_r($n);

                $c = range(0, 10, 2);
                print_r($c);

                echo "<table border=1><tr>";
                foreach ($c as $v) {
                    echo "<td>$v";
                }
            ?>
            </table>
        </pre>
    </div>
  </body>
</html>