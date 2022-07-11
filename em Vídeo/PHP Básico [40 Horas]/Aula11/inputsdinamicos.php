<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../MODELO/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
    <body>
        <div>
            <form action="getsdinamicos.php" method="get">
                <?php
                    $c = 1;
                    while ($c <= 5) {
                        echo "Valor $c: <input type='number' name='v$c' min=0 max=100 value=0/><br>";
                        $c++;
                    }
                ?>
                <input type="submit" value="Enviar" class="botao">
            </form>
        </div>
    </body>
</html>