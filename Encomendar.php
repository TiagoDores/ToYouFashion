<?php
    include('config.php');
    $NumProdutos = $_POST['numprodutos'];
    $Produtos = $_POST['produtos'];
    $DataEncomenda = $_POST['dataencomenda'];
    $ValorTotal = $_POST['pais'];

    $user = $_SESSION['user'];
    $cliente = $user['Nome'];

    $sql = "INSERT INTO `encomendas`(`IdCliente`, `EstadoEncomenda`, `NumeroProdutos`, `Produtos`, `DataEncomenda`, `ValorTotal`)
    VALUES ('$cliente', 'Pendente', '$NumProdutos', '$Produtos', '$DataEncomenda', '$ValorTotal')";

    $resultado=$conexao->query($sql);

    echo($sql);

    if ($resultado) {
        $msg="Encomenda Bem Sucedida";
        //header("location:index.php?msg=$msg");
    }else {
        $msg="Erro ao Encomendar";
        //header("location:formRegistar.php?msg=$msg");
    }
    $conexao->close();
?>