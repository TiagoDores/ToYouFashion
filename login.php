<?php

    include("config.php");
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` ='$password'";
    $resultado = $conexao->query($sql);

    //echo($sql);


    if ($resultado->num_rows >0) {
        $conta = $resultado->fetch_assoc();
        session_start();
        $_SESSION['user'] = $conta['name'];

        if ($conta['admin'] == 1) {
            header("location:Admin/index.php");
        } else{
            header("location:index.php");
        }   
    }else {
        $msg="Email e/ou Password incorretos";
        header("location:formlogin.php?msg=$msg");
    }
?>