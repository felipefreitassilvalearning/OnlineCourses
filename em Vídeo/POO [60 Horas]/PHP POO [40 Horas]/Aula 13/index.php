<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 13 - Polimorfismo de Sobrecarga - PHP POO</title>
</head>

<body class="flex">
    <header>
        <h1>Aqui vão aparecer meus códigos PHP</h1>
    </header>
    <main class="flex">
        <pre>
            <?php
                echo "<br>";

                // require_once 'Animal.php';
                require_once '../Aula 12/Mamifero.php';
                require_once 'Lobo.php';
                require_once 'Cachorro.php';

                // $animal = new Animal();
                $mamifero = new Mamifero();
                $lobo = new Lobo();
                $cachorro = new Cachorro();

                $mamifero -> emitirSom();
                $lobo -> emitirSom();
                $cachorro -> emitirSom();
                hr();
                $cachorro -> reagirFrase("Olá");
                $cachorro -> reagirFrase("Vai Apanhar");
                $cachorro -> reagirHoraMin(11, 45);
                $cachorro -> reagirHoraMin(21, 00);
                $cachorro -> reagirDono(true);
                $cachorro -> reagirDono(false);
                $cachorro -> reagirIdadePeso(2, 12.5);
                $cachorro -> reagirIdadePeso(17, 4.5);

                function hr() {
                    $hr = "-------------------<br>";
                    print($hr);
                }
            ?>
        </pre>
    </main>
    <footer>
        <h6>Layout por Felipe Freitas</h6>
    </footer>
</body>

</html>