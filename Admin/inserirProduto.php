<?php

include('../config.php');
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$tamanho = $_POST['tamanho'];
$preco = $_POST['preco'];
$image = $_POST['imagemproduto'];

//»»»»»»»»»»»»»»»»»»»»Imagem»»»»»»»»»»»»»»»»»»»»»»

if ($image != '') {
    $folder = "../img/Produtos/";
    if (move_uploaded_file($_FILES['image']['tmp_name'], $folder . $image)) {
        
    }
}

//»»»»»»»»»»»»»»»»»»»»Produtos»»»»»»»»»»»»»»»»»»»»»»
$sql = "INSERT INTO produtos(Nome, Categoria, Tamanho, Preco, Imagem) 
    VALUES ('$nome', '$categoria', '$tamanho', '$preco','$image')";

$resultado = $conexao->query($sql);

echo $sql;

if ($resultado) {
    $msg = "Registo Inserido";
} else {
    $msg = "Erro a inserir registo";
}
//header("location:Produtos.php?msg=$msg");
$conexao->close();
