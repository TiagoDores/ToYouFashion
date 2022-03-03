<?php
    include "../config.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM `cliente` WHERE IdCliente = '$id'";
    $resultado = $conexao->query($sql);
    
    if ($resultado) {
        $msg = "Registo Eliminado";
    }else{
        $msg = "Erro ao eliminar Registo";
    }
    header("location:UserList.php?msg»=$msg");
    $conexao->close();
?>