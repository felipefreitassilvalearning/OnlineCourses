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
                $c = 10;
                while ($c >= 0) {
                    echo $c."<br>";
                    $c-=2;
                }
            ?>
        </div>
    </body>
</html>