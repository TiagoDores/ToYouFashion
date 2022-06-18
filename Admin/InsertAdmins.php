<?php

    include('../config.php');
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);

    

    $sql = "INSERT INTO `admin`(`name`, `email`, `password`)
    VALUES ('$name', '$email', '$password')";

    $resultado=$conexao->query($sql);

    if ($resultado) {
        $msg="Registo Inserido";
        header("location:AdminList.php?msg=$msg");
    }else {
        $msg="Erro a inserir registo";
        header("location:AdminList.php?msg=$msg");
    }
    $conexao->close();
?>