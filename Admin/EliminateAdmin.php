<?php
    include "../config.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM `admin` WHERE id = '$id'";
    $resultado = $conexao->query($sql);
    
    if ($resultado) {
        $msg = "Registo Eliminado";
    }else{
        $msg = "Erro ao eliminar Registo";
    }
    header("location:AdminList.php?msg»=$msg");
    $conexao->close();
?>