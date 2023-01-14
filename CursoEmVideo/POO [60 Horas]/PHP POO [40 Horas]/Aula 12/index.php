<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 12 - Polimorfismo de Sobreposição - PHP POO</title>
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
                require_once 'Mamifero.php';
                require_once 'Reptil.php';
                require_once 'Peixe.php';
                require_once 'Ave.php';
                require_once 'Canguru.php';
                require_once 'Cachorro12.php';
                require_once 'Cobra.php';
                require_once 'Tartaruga.php';
                require_once 'GoldFish.php';
                require_once 'Arara.php';

                // $animal = new Animal();
                $mamifero = new Mamifero();
                $reptil = new Reptil();
                $peixe = new Peixe();
                $ave = new Ave();
                $canguru = new Canguru();
                $cachorro12 = new Cachorro12();
                $cobra = new Cobra();
                $tartaruga = new Tartaruga();
                $goldFish = new GoldFish();
                $arara = new Arara();


                $mamifero -> setPeso(33.5);
                $mamifero -> locomover();
                $mamifero -> emitirSom();
                hr();
                $cachorro -> locomover();
                $cachorro -> emitirSom();
                hr();
                $canguru -> locomover();
                $canguru -> emitirSom();
                hr();
                $ave -> locomover();
                hr();
                $reptil -> locomover();
                hr();
                $peixe -> locomover();
                hr();
                $tartaruga -> locomover(); 


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