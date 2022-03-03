<?php

    include('config.php');
    $nome= $_POST['nome'];
    $morada= $_POST['morada'];
    $codigopostal= $_POST['codigopostal'];
    $pais= $_POST['pais'];
    $telemovel= $_POST['telemovel'];
    $nif= $_POST['nif'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);
    $admin = $_POST['admin'];

    

    $sql = "INSERT INTO `cliente`(`Nome`, `Email`, `Password`, `Telefone`, `Morada`, `Codigopostal`, `Pais`, `NIF`, `Admin`)
    VALUES ('$nome', '$email', '$password', '$telemovel', '$morada', '$codigopostal', '$pais', '$nif', '$admin')";

    $resultado=$conexao->query($sql);

    if ($resultado) {
        $msg="Registo Inserido";
        header("location:index.php?msg=$msg");
    }else {
        $msg="Erro a inserir registo";
        header("location:formRegistar.php?msg=$msg");
    }
    $conexao->close();
?>