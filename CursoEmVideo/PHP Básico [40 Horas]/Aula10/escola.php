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
                $ds = isset($_GET["ds"]) ? $_GET["ds"] : 1;
                switch ($ds) {
                    case 1:
                        $aEscola = "não precisa";
                        break;
                    
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        $aEscola = "precisa";
                        break;
                    
                    case 7:
                        $aEscola = "não precisa";
                        break;
                }
                echo "Hoje você $aEscola ir.";
            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>