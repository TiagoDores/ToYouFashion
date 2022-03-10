<?php
    include "../config.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM `produto` WHERE IdProduto = '$id'";
    $resultado = $conexao->query($sql);
    
    if ($resultado) {
        $msg = "Registo Eliminado";
    }else{
        $msg = "Erro ao eliminar Registo";
    }
    header("location:UserList.php?msg»=$msg");
    $conexao->close();
