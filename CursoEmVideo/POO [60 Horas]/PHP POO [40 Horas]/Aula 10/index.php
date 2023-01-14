<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/style.css">
    <title>Aula 10 - Herança 101 - PHP POO</title>
</head>

<body class="flex">
    <header>
        <h1>Aqui vão aparecer meus códigos PHP</h1>
    </header>
    <main class="flex">
        <pre>
            <?php
                echo "<br>";
                // require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';

                // $p1 = new Pessoa();
                $p2 = new Aluno();
                $p3 = new Professor();
                $p4 = new Funcionario();
        
                // $p1 -> setNome("Pedro");
                $p2 -> setNome("Maria");
                $p3 -> setNome("Cláudio");
                $p4 -> setNome("Fabiana");
        
                // $p1 -> setSexo("M");
                $p4 -> setSexo("F");
                $p2 -> setIdade(18);
        
                $p2 -> setCurso("Informática");
                $p3 -> setSalario(2500.75);
                $p4 -> setSetor("Estoque");
        
                // p1 -> receberAum(550.20);
                // p2 -> mudarTrabalho();
                // p4 -> cancelarMatr();
        
                // print_r($p1);
                // print("--------------------------"."<br>");
                print_r($p2);
                print("--------------------------"."<br>");
                print_r($p3);
                print("--------------------------"."<br>");
                print_r($p4);
            ?>
        </pre>
    </main>
    <footer>
        <h6>Layout por Felipe Freitas</h6>
    </footer>
</body>

</html>