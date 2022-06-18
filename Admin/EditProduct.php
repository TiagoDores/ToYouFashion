<?php
include('../config.php');

//«««««««««««««««««VARIABLES»»»»»»»»»»»»»»»»»»
$name = $_POST['name'];
$category = $_POST['category'];
$size = $_POST['size'];
$price = $_POST['price'];
$image = $_FILES['image']['name'];
$id = $_GET['id'];


//««««««««««««««««««««««««««««««««««««««««««««

if ($image != '') {
    $folder = "../img/products/";
    if (move_uploaded_file($_FILES['image']['tmp_name'], $folder . $image)) {
        
    }
}

$sql = "UPDATE `products` SET `name`='$name',`category`='$category',`size`='$size',`price`='$price',
    `image`='$image' WHERE  id = '$id'";

$resultado = $conexao->query($sql);

echo $sql;

if ($resultado) {
    $msg = "Successful Editing";
} else {
    $msg = "Error when Editing";
}

//header("location:Produtos.php?msg=$msg");
$conexao->close();
