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
            echo "String length: <br>";
            $txt = "Quantos caracteres tenho?";
            $qtdCaracteres = strlen($txt);
            echo $txt.":".$qtdCaracteres;

            echo "<br><br>Trims: <br>";
            $txtOrg = "   José da Silva  ";
            echo strlen($txtOrg)."<br>";
            $txt = trim($txtOrg);
            echo strlen($txt)."<br>";
            $txt = ltrim($txtOrg);
            echo strlen($txt)."<br>";
            $txt = rtrim($txtOrg);
            echo strlen($txt)."<br>";


            echo "<br>Explode: <br>";
            $site = "Curso em vídeo";
            $vetor = explode(" ", $site);
            print_r($vetor);


            echo "<br><br>String Split: <br>";
            $nome = "Felipe";
            $vetor = str_split($nome);
            print_r($vetor);


            echo "<br><br>Implode || Join: <br>";
            $novoVetor[0] = "Curso";
            $novoVetor[1] = "em";
            $novoVetor[2] = "Vídeo";
            $texto = implode("_", $novoVetor);
            print_r($texto);
            echo " || ";
            $texto = join("_", $novoVetor);
            print_r($texto);


            echo "<br><br>Char: <br>";
            $letra = chr(68);
            echo "A letra de código 68 é: $letra";


            echo "<br><br>Ord<br>";
            $codigo = ord('c');
            echo "O código da letra c é: $codigo";
        ?>
    </div>
  </body>
</html>