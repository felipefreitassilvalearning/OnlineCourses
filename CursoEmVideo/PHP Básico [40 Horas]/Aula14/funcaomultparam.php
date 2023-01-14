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
            function soma() {
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for ($i=0; $i < $t; $i++) { 
                    $s += $p[$i];
                }
                return $s;
            }

            $r = soma(3, 5, 2);
            $r2 = soma(3, 5, 2, 8, 9, 4);
            echo "$r e $r2";
        ?>
    </div>
  </body>
</html>
 