<?php 
    session_start(); 
    if(!isset($_SESSION['cart'])){ 
        $_SESSION['cart'] = array(); 
    } //adiciona produto 
    
    if(isset($_GET['action'])){ 
        //ADICIONAR CARRINHO 
        if($_GET['action'] == 'add'){ 
            $id = intval($_GET['id']); 
            if(!isset($_SESSION['cart'][$id])){ 
                $_SESSION['cart'][$id] = 1; 
            } else { 
                $_SESSION['cart'][$id] += 1; 
            } 
            header('location:formCart.php');
        } //REMOVER CARRINHO 
    
        if($_GET['action'] == 'del'){ 
            $id = intval($_GET['id']); 
            if(isset($_SESSION['cart'][$id])){ 
                unset($_SESSION['cart'][$id]); 
            } 
        } //ALTERAR QUANTIDADE 
        if($_GET['action'] == 'up'){ 
            if(is_array($_POST['prod'])){ 
                foreach($_POST['prod'] as $id => $qtd){
                        $id  = intval($id);
                        $qtd = intval($qtd);
                        if(!empty($qtd) || $qtd <> 0){
                            $_SESSION['cart'][$id] = $qtd;
                        }else{
                            unset($_SESSION['cart'][$id]);
                        }
                }
            }
        }
         
        
   }
   ?>
