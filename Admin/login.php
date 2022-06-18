<?php

    include("../config.php");
    $email = $_POST['email'];
    $password = ($_POST['password']);

    echo $email;
    echo $password;

    $sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` ='$password'";
    $resultado = $conexao->query($sql);

    echo($sql);


    if ($resultado->num_rows >0) {
        $conta = $resultado->fetch_assoc();
        session_start();

        print_r(session_start());
        
       // $_SESSION['admin'] = $conta['name'];

        header("location:index.php");
    }else {
        $msg="Email e/ou Password incorretos";
       // header("location:formlogin.php?msg=$msg");
    }
?>



