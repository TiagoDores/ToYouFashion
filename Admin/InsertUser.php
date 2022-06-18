<?php

    include('../config.php');
    $name= $_POST['name'];
    $address= $_POST['address'];
    $zipcode= $_POST['zipcode'];
    $country= $_POST['country'];
    $telephone= $_POST['telephone'];
    $nif= $_POST['nif'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);

    

    $sql = "INSERT INTO `users`(`name`, `email`, `password`, `telephone`, `address`, `zipcode`, `country`, `nif`)
    VALUES ('$name', '$email', '$password', '$telephone', '$address', '$zipcode', '$country', '$nif')";

    $resultado=$conexao->query($sql);

    if ($resultado) {
        $msg="Registo Inserido";
        header("location:UsersList.php?msg=$msg");
    }else {
        $msg="Erro a inserir registo";
        header("location:UsersList.php?msg=$msg");
    }
    $conexao->close();
?>