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
            echo "strtolower: <br>";
            $txt = "Felipe Freitas Silva";
            echo strtolower($txt);

            echo "<br><br>strtoupper: <br>";
            $txt = "Felipe Freitas Silva";
            echo strtoupper($txt);

            echo "<br><br>ucfirst: <br>";
            $txt = "Felipe Freitas Silva";
            echo ucfirst(strtolower($txt));

            echo "<br><br>ucwords: <br>";
            $txt = "felipe freitas silva";
            echo ucwords($txt);

            echo "<br><br>strrev: <br>";
            $txt = "felipe freitas silva";
            echo strrev($txt);

            echo "<br><br>strpos: <br>";
            $txt = "felipe freitas silva";
            $procurada = "silva";
            $numero = strpos($txt, $procurada);
            echo "A string $procurada foi encontrada na posição $numero";

            echo "<br><br>stripos: <br>";
            $txt = "felipe freitas silva";
            $procurada = "Silva";
            $numero = stripos($txt, $procurada);
            echo "A string $procurada foi encontrada na posição $numero";

            echo "<br><br>substr_count: <br>";
            $txt = "felipe freitas silva";
            $procurada = "e";
            $numero = substr_count($txt, $procurada);
            echo "A string $procurada foi encontrada $numero vez(es).";

            echo "<br><br>substr: <br>";
            $txt = "felipe freitas silva";
            $txt = substr($txt, 0, 6);
            echo $txt."<br>";
            $txt = "felipe freitas silva";
            $txt = substr($txt, 6);
            echo $txt."<br>";
            $txt = "felipe freitas silva";
            $txt = substr($txt, -5);
            echo $txt."<br>";
            $txt = "felipe freitas silva";
            $txt = substr($txt, -13, 7);
            echo $txt."<br>";

            // not working
            // echo "<br><br>str_pad: <br>";
            // $txt = "felipe freitas silva";
            // $novo = str_pad($txt, 50, " ", STR_PAD_LEFT);
            // print("Meu nome é $novo agora.");

            echo "<br><br>str_repeat: <br>";
            $txt = str_repeat("=", 30);
            echo "O texto gerado foi $txt";

            echo "<br><br>str_ireplace: <br>";
            $nome = "Felipe Freitas Silva";
            $nomeNovo = str_replace("Freitas", "gros", $nome);
            echo "Nome antigo: $nome<br>";
            echo "Nome novo: $nomeNovo";
            echo "<br>";
            $nome = "Felipe Freitas Silva";
            $nomeNovo = str_ireplace("silva", "chrysostomo", $nome);
            echo "Nome antigo: $nome<br>";
            echo "Nome novo: $nomeNovo";
        ?>
    </div>
  </body>
</html>