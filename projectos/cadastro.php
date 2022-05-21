<?php

include_once('conexao.php');

if(isset($_POST['submit'])){
    /* Verificando os dados se estão chegando
    print_r('Nome: ' . $_POST['nome']);
    print_r('idade:' . $_POST['idade']);
    print_r('Morada:' . $_POST['morada']);
    print_r('Senha:' . $_POST['senha']);
    print_r('Email:' . $_POST['email']);
     */


$nome = $_POST['nome'];
$morada = $_POST['morada'];
$idade = $_POST['idade'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$result = mysqli_query($conexao, "INSERT INTO pessoa(nome,idade,morada,senha,email) VALUES ('$nome', '$idade','$morada','$senha','$email')");


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com banco de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="divpai">
        <fieldset>
            <legend>Cadastrar</legend>
        <form action="cadastro.php" method="post">
            <div class="inputs editinputs">
                <label for="nome">nome</label>
                <input type="text" name="nome" id="nome" placeholder="Insira seu Nome" class="edit_input">
            </div>

            <div  class="inputs">
                <label for="senha">senha</label>
                <input type="password" name="senha" id="senha" placeholder="Insira uma Senha" class="edit_input" >
            </div>


            <div  class="inputs">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Insira seu Email" class="edit_input" >
            </div>
            

            <div  class="inputs">
                <label for="idade">Idade</label>
                <input type="date" name="idade" id="idade" placeholder="Idade" >
            </div>

            <div  class="inputs editinputs">
                <label for="morada">Morada</label>
                <input type="morada" name="morada" id="morada" placeholder="Insira sua Morada" class="edit_input" >
            </div>

            <div>
                <input type="submit" value="Cadastrar" class="submit" name="submit">
            </div>
        </form>
    </fieldset>

    </div>
</body>
</html>