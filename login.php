<?php

    include("config.php");
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` ='$password'";
    $resultado = $conexao->query($sql);

    //echo($sql);


    if ($resultado->num_rows >0) {
        $conta =$resultado->fetch_assoc();
        session_start();
        $_SESSION['user'] = $conta;
        header('location:formConta.php');
    }else {
        $msg="Email e/ou Password Incorretos";
        header("location:formLogin.php?msg=$msg");
    }
?>

