<?php

include('../config.php');
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$tamanho = $_POST['tamanho'];
$preco = $_POST['preco'];
$imagem = $_FILES['imagemproduto']['name'];


//»»»»»»»»»»»»»»»»»»»»Produtos»»»»»»»»»»»»»»»»»»»»»»
$sql = "INSERT INTO produtos(Nome, Categoria, Tamanho, Preco) 
    VALUES ('$nome', '$categoria', '$tamanho', '$preco')";

$resultado = $conexao->query($sql);
//»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»

//»»»»»»»»»»»»»»»»»»»»Imagens»»»»»»»»»»»»»»»»»»»»»»
if ($imagem != '') {
    $pasta = "../img/Produtos/";
    if (move_uploaded_file($_FILES['imagemproduto']['tmp_name'], $pasta . $imagem)) {
        $imagem = $pasta . $imagem;
    }
}

$sql_lastimage = "SET @last_id_in_imagens = 'LAST_INSERT_ID()'";

$sql_imagem = "INSERT INTO imagens(CaminhoImagem) 
    VALUES ('$imagem')";


$resultado_imagem = $conexao->query($sql_imagem);
$resultadocaminho = $conexao->query($sql);


if ($resultadocaminho->num_rows > 0) {
    while ($a = $resultado->fetch_assoc()) {
       $idproduto = $a['IdProduto'];
       $idimagem = $a['IdImagem'];
    }
$sql = "INSERT INTO produtoimagens(IdProduto,IdImagem) 
    VALUES ('$idproduto','$idimagem)";

}

//»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»

if ($resultado && $resultado_imagem) {
    $msg = "Registo Inserido";
} else {
    $msg = "Erro a inserir registo";
}
header("location:Produtos.php?msg=$msg");
$conexao->close();
