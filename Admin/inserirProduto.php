<?php

include('../config.php');
$name = $_POST['name'];
$category = $_POST['category'];
$size = $_POST['size'];
$price = $_POST['price'];
$image = $_POST['imageproduct'];

//»»»»»»»»»»»»»»»»»»»»Imagem»»»»»»»»»»»»»»»»»»»»»»

if ($image != '') {
    $folder = "../img/products/";
    if (move_uploaded_file($_FILES['image']['tmp_name'], $folder . $image)) {
        
    }
}

//»»»»»»»»»»»»»»»»»»»»Produtos»»»»»»»»»»»»»»»»»»»»»»
$sql = "INSERT INTO products(name, category, size, price, image) 
    VALUES ('$name', '$category', '$size', '$price','$image')";

$resultado = $conexao->query($sql);

echo $sql;

if ($resultado) {
    $msg = "Registo Inserido";
} else {
    $msg = "Erro a inserir registo";
}
//header("location:Produtos.php?msg=$msg");
$conexao->close();
