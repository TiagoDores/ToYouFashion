<?php
    $servidor='localhost';
    $utilizador='root';
    $password='';
    $basedados='dbtoyoufashion';

    $conexao = mysqli_connect($servidor,$utilizador,$password,$basedados);

    if($conexao -> connect_error){
        die("Erro ao ligar á base de dados" . $conexao->connect_error);
    }

    mysqli_set_charset($conexao,"utf8");

?>