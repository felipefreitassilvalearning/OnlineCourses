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
                $pessoa = array ("nome" => "Felipe",
                            "idade" => 19,
                            "peso" => 52.5);
                print_r($pessoa);
                $pessoa["bebe"] = false;
                print_r($pessoa);

                foreach($pessoa as $atributo => $valor) {
                    echo "$atributo => $valor<br>";
                }
            ?>
            </table>
        </pre>
    </div>
  </body>
</html>