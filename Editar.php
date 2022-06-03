<?php
    include('config.php');

    $name= $_POST['name'];
    $address= $_POST['address'];
    $zipcode= $_POST['zipcode'];
    $telephone= $_POST['telephone'];
    $nif= $_POST['nif'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);
    $id = $_GET['id'];

    $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`telephone`='$telephone',
    `address`='$address',`zipcode`='$zipcode',`nif`='$nif' WHERE  id = '$id'";
    
    $resultado = $conexao -> query ($sql);

    echo $sql;

    if ($resultado) {
        $msg="Edição Bem Sucedida";
    }else {
        $msg="Erro ao Editar";
    }

    //header("location:formConta.php?msg=$msg");
    $conexao->close();
?>