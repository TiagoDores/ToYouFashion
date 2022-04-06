<?php

    include("config.php");
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    

    $sql = "SELECT * FROM `cliente` WHERE `Email` = '$email' AND `Password` ='$password'";
    $resultado = $conexao->query($sql);

    //echo($sql);


    if ($resultado->num_rows >0) {
        $conta = $resultado->fetch_assoc();
        session_start();
        $_SESSION['user'] = $conta['Nome'];

        if ($conta['Admin'] == 1) {
            header("location:Admin/index.php");
        } else{
            header("location:index.php");
        }   
    }else {
        $msg="Email e/ou Password incorretos";
        header("location:formlogin.php?msg=$msg");
    }
?>