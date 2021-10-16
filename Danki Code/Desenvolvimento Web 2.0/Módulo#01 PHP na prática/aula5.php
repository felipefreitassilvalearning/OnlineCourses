<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Forms</title>
</head>
<body>
    <?php
        if(isset($_POST['acao'])){
            echo 'Post: '.$_POST['nome'];
            echo '<br>';
            echo 'Chave: '.$_POST['chave'];
            echo '<br>';
            echo 'Mensagem: '.$_POST['conteudo'];
        }else if(isset($_GET['nome'])){
            echo 'Get: '.$_GET['nome'];
        }else{
            echo 'Falha no formulário, tente novamente ou entre em contato com o suporte.';
        }
    ?>
    <form action="" method="post">
        <input type="text" name="nome">
        <input type="hidden" name="chave" value="123456">
        <textarea name="conteudo"></textarea>
        <input type="submit" name="acao" value="Enviar">
    </form>

    <?php
        echo '<br>=====================================================<br>';

        if(isset($_POST['acao'])){
            echo $_FILES['arquivo']['name'];
        }else{
            echo 'Falha no formulário, tente novamente ou entre em contato com o suporte.';
        }
    ?>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="file" name="arquivo">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>