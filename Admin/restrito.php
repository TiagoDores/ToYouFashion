<?php

    if(!isset($_SESSION['user'])) 
    {    
        header("Location: formLogin.php");
    }

?>