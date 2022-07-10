<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 11 - Herança 101 - PHP POO</title>
</head>

<body class="flex">
    <header>
        <h1>Aqui vão aparecer meus códigos PHP</h1>
    </header>
    <main class="flex">
        <pre>
            <?php
                echo "<br>";
                require_once '..//Aula 10//Pessoa.php';
                require_once '..//Aula 10//Aluno.php';
                require_once '..//Aula 10//Professor.php';
                require_once '..//Aula 10//Funcionario.php';
                require_once 'Visitante.php';
                require_once 'Bolsista.php';

                $v1 = new Visitante();
                $v1 -> setNome("Juvenal");
                $v1 -> setIdade(33);
                $v1 -> setSexo("M");
                print_r($v1);
                hr();

                $a1 = new Aluno();
                $a1 -> setNome("Pedro");
                $a1 -> setMatricula(1111);
                $a1 -> setIdade(16);
                $a1 -> setSexo("M");
                $a1 -> setCurso("Informática");
                $a1 -> pagarMensalidade();
                print_r($a1);
                hr();

                $b1 = new Bolsista();
                $b1 -> setMatricula(1112);
                $b1 -> setNome("Jubileu");
                $b1 -> setBolsa(12.5);
                $b1 -> setCurso("Administração");
                $b1 -> setIdade(17);
                $b1 -> pagarMensalidade();
                print_r($b1);
                hr();

                function hr() {
                    $hr = "-------------------------------------------<br>";
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