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
                $reg = isset($_GET["reg"]) ? $_GET["reg"] : "ac";
                switch ($reg) {
                    case "ac":
                    case "ap":
                    case "am":
                    case "pa":
                    case "ro":
                    case "rr":
                    case "to":
                        $regiao = "REGIÃO NORTE";
                        break;
                    
                    case "al":
                    case "ba":
                    case "ce":
                    case "ma":
                    case "pb":
                    case "pe":
                    case "pi":
                    case "rn":
                    case "se":
                        $regiao = "REGIÃO NORDESTE";
                        break;

                    case "df":
                    case "go":
                    case "mt":
                    case "ms":
                        $regiao = "REGIÃO CENTRO-OESTE";
                        break;

                    case "es":
                    case "mg":
                    case "rj":
                    case "sp":
                        $regiao = "REGIÃO SUDESTE";
                        break;

                    case "pr":
                    case "rs":
                    case "sc":
                        $regiao = "REGIÃO SUL";
                        break;
                }
                echo "Você mora na <span class='foco'>$regiao</span>";
            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>