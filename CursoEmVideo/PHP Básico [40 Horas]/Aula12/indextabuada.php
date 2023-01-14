<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../MODELO/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
    <body>
        <div>
            <form method="get" action="tabuada.php">
            Número:
                <select name="num">
                    <?php
                        for($i=1; $i<=10; $i++) {
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Tabuada"/>
            </form>
        </div>
    </body>
</html>