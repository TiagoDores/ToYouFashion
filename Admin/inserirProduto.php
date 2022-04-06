<?php

include('../config.php');
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$tamanho = $_POST['tamanho'];
$preco = $_POST['preco'];


//»»»»»»»»»»»»»»»»»»»»Produtos»»»»»»»»»»»»»»»»»»»»»»
$sql = "INSERT INTO produtos(Nome, Categoria, Tamanho, Preco) 
    VALUES ('$nome', '$categoria', '$tamanho', '$preco')";

$resultado = $conexao->query($sql);

$sql_lastproduct = "SET @last_id_in_produtos = 'LAST_INSERT_ID()'";
//»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»

//»»»»»»»»»»»»»»»»»»»»Imagens»»»»»»»»»»»»»»»»»»»»»»
$targteDir = "../img/Produtos/";
$fileNames = $_FILES['imagemproduto']['name'];

if(!empty($fileNames)){ 
    foreach ($_FILES['imagemproduto']['name'] as $key => $value) {    
        // File upload path 
        $fileName = basename($_FILES['imagemproduto']['name'] [$key]);  
        $targetFilePath = $targteDir.$fileName;

        //Check whether file type is valid
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            //Upload file to server
            if (move_uploaded_file($_FILES['imagemproduto']['tmp_name'][$key], $targetFilePath)) {
                // Image db insert sql 
                $insertValuesSQL .="('".$fileName."', NOW()),";
            }else{
                $erro_Upload .= $_FILES['imagemproduto']['name'] [$key].' | ';
            }

        
        $sql_imagem = "INSERT INTO imagens(CaminhoImagem) 
            VALUES ('$imagem')";
        
        
        $resultado_imagem = $conexao->query($sql_imagem);
        
        $sql_lastimage = "SET @last_id_in_imagens = 'LAST_INSERT_ID()'";
        
        $sql_produtosimagens = "INSERT INTO produtoimagens(IdProduto,IdImagem) 
            VALUES ('$sql_lastproduct','$sql_lastimage)";
        
        $resultado_produtosimagens = $conexao->query($sql_produtosimagens);
        
    }
    
}


//»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»

if ($resultado && $resultado_imagem && $resultado_produtosimagens) {
    $msg = "Registo Inserido";
} else {
    $msg = "Erro a inserir registo";
}
//header("location:Produtos.php?msg=$msg");
$conexao->close();

?>