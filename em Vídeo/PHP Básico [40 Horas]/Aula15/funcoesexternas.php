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
            include "funcoes.php";
            // ou require para dar erro fatal caso não ache
            echo "<h1>Testando novas funções</h1>";
            ola();
            mostraValor(4);
            echo "<h2>Finalizando o arquivo</h2>";
        ?>
    </div>
  </body>
</html>