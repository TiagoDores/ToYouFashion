<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="img/logo/logo.png" alt="" width="25%"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="formLoja.php">Produtos</a></li>
                                    <!--<li><a href="#">Paginas</a>
                                        <ul class="submenu">
                                            <li><a href="formCart.php">Carrinho</a></li>
                                            <li><a href="formProduct_details.php">Detalhes produtos</a></li>
                                            <li><a href="formConfirmation.php">Confirmation</a></li>
                                            <li><a href="formCheckout.php">Product Checkout</a></li>
                                        </ul>
                                    </li>--->
                                    <li><a href="formAbout.php">Sobre Nós</a></li>
                                    <li><a href="formContacto.php">Contactos</a></li>

                                    <?php
                                    session_start();
                                    if (isset($_SESSION['user'])) {
                                        $user = $_SESSION['user'];
                                        echo
                                        '<li><a class="text-dark" href="formConta.php">' . $user['name'] . '<span class="flaticon-user" style="margin-left: 7px;"></span></a></li>';
                                        
                                    } else {
                                        echo
                                        '<li><a class="text-dark" href="formlogin.php"><span class="flaticon-user"></span></a></li>';
                                        
                                    }

                                    if (isset($_SESSION['cart'])) {
										echo '<li><a href="formCart.php"><i class="flaticon-shopping-cart"><span class="badge badge-ligth">'. count($_SESSION["cart"]) . '</span></i></a> </li>';
									} else {

										echo '<li><a href="formCart.php"><i class="flaticon-shopping-cart"><span class="badge badge-ligth">0</span></i></a> </li>';
									}


                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
</body>

</html>