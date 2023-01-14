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
        $c = 1;
        do {
            echo "$c ";
            $c++;
        } while($c<=10);
      
        $c = 10;
        do {
            echo "$c ";
            $c--;
        } while($c>=1);  
    ?>
</div>
</body>
</html>