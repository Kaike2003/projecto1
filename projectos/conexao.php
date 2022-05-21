<?php

$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'projecto';

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

/*
if ($conexao->connect_errno) {
    echo "ERRO";
} else{
    echo "Conexão efetuada";
}

*/



?>