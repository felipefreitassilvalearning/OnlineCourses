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
                $v = array( 0 => 5,
                            1 => 9,
                            2 => 8,
                            3 => 7);
                print_r($v);
                unset($v[2]);
                print_r($v);

                $v = array( 3 => "A",
                            1 => "B",
                            0 => "C",
                            7 => "D"); 
                $v[] = "E";
                print_r($v);
            ?>
        </pre>
    </div>
  </body>
</html>