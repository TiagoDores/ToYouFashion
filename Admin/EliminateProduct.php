<?php
    include "../config.php";
    $id = $_GET['id'];
    
    $sql_delete = "DELETE FROM `products` WHERE `id` = '$id'";
    $resultado = $conexao->query($sql_delete);

    //echo $sql_delete;
    
    if ($resultado) {
        $msg = "Registo Eliminado";
    }else{
        $msg = "Erro ao eliminar Registo";
    }
    header("location:Produtos.php?msg»=$msg");
    $conexao->close();