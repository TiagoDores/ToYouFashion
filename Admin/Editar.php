<?php
    include('../config.php');

    $nome= $_POST['nome'];
    $morada= $_POST['morada'];
    $codigopostal= $_POST['codigopostal'];
    $telemovel= $_POST['telemovel'];
    $nif= $_POST['nif'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);
    $id = $_GET['id'];

    session_start();
    if (!isset($_SESSION['user'])){
        header("location:index.php?msg= Conta Indisponivel");
    }

    $cliente = $_SESSION['user'];

    $idcliente = $cliente['IdCliente'];

    $sql = "UPDATE `cliente` SET `Nome`='$nome',`Email`='$email',`Password`='$password',`Telefone`='$telemovel',
    `Morada`='$morada',`Codigopostal`='$codigopostal',`NIF`='$nif' WHERE  IdCliente = '$id'";
    
    $resultado = $conexao -> query ($sql);

    if ($resultado) {
        $msg="Edição Bem Sucedida";
    }else {
        $msg="Erro ao Editar";
    }

    header("location:UsersList.php?msg=$msg");
    $conexao->close();
?>