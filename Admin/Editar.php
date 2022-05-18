<?php
    include('../config.php');

    $name= $_POST['name'];
    $address= $_POST['address'];
    $zipcode= $_POST['zipcode'];
    $telephone= $_POST['telephone'];
    $nif= $_POST['nif'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);
    $id = $_GET['id'];

    session_start();
    if (!isset($_SESSION['user'])){
        header("location:index.php?msg= Conta Indisponivel");
    }

    $cliente = $_SESSION['user'];

    $id = $cliente['id'];

    $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`telephone`='$telephone',
    `address`='$address',`zipcode`='$zipcode',`nif`='$nif' WHERE  id = '$id'";
    
    $resultado = $conexao -> query ($sql);

    if ($resultado) {
        $msg="Edição Bem Sucedida";
    }else {
        $msg="Erro ao Editar";
    }

    header("location:UsersList.php?msg=$msg");
    $conexao->close();
?>