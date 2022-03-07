<?php

    include('../config.php');
    $nome= $_POST['nome'];
    $categoria= $_POST['categoria'];
    $tamanho= $_POST['tamanho'];
    $preco= $_POST['preco'];
    $imagem= $_FILES['imagemproduto']['name'];


    if ($imagem !='') {
        $pasta="../img/Produtos/";
        if (move_uploaded_file($_FILES['imagemproduto']['tmp_name'],$pasta.$imagem)) {
            $imagem = $pasta.$imagem;
        }
    }

    $sql = "INSERT INTO produtos(Nome, Categoria, Tamanho, Preco) 
    VALUES ('$nome', '$categoria', '$tamanho', '$preco')";

    $resultado=$conexao->query($sql);

    $sql_imagem = "INSERT INTO imagens(CaminhoImagem) 
    VALUES ('$imagem')";

    echo $sql;
    echo $sql_imagem;

    $resultado=$conexao->query($sql_imagem);

    if ($resultado) {
        $msg="Registo Inserido";
    }else {
        $msg="Erro a inserir registo";
    }
    //header("location:Produtos.php?msg=$msg");
    $conexao->close();
?>
