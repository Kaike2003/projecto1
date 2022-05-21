<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])) {
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM pessoa WHERE nome ='$nome' and senha='$senha' ";

    $result = $conexao->query($sql);


    if(mysqli_num_rows($result) <1){
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');

    } else {
        $_SESSION['nome'];
        $_SESSION['senha'];
        header('Location: sistema.php');
    }
    

}else
{
    header('Location : login.php');
}



?>
