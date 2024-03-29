<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>To You Fashion | Loja</title>
    <link rel="icon" href="img/logo/icon.png" type="image/png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap icons-->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles_product.css" rel="stylesheet" />

</head>


<body>
    <?php
    include("Preloader.php");
    include("Header.php");
    ?>
    <main>
        <!--================Single Product Area =================-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <?php

                    include('config.php');
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `products` WHERE id = '$id'";
                    $resultado = $conexao->query($sql);

                    if ($resultado->num_rows > 0) {
                        $produto = $resultado->fetch_assoc();
                    }

                    echo '
                        <div class="col-md-6">
                            <img class="card-img-top mb-5 mb-md-0" src="img/products/' . $produto['image'] . '" alt="#" />
                        </div> 
                        <div class="col-md-6">
                            <h1 class="display-5 fw-bolder">' . $produto['name'] . '</h1>
                            <div class="fs-5 mb-5">
                                <span>' . $produto['price'] . ' €</span>
                            </div>
                            <p class="lead">' . $produto['description'] . '</p>
                            <div class="card_area">
                                <div class="product_count_area">
                                    <div class="product_count d-inline-block">
                                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                        <input class="product_count_item input-number" type="text" value="1" min="0" max="">
                                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                    <button class="btn hero-btn flex-shrink-0" type="button">
                                            <i class="bi-cart-fill me-1"></i>
                                            <a href="configcarrinho.php?action=add&id=' . $produto['id'] . '" style="color: #000;"><span>Adicionar <br >ao Carrinho</span></a>
                                    </button>
                                </div>
                            </div>
                        </div>';

                    $conexao->close();

                    ?>

                </div>
            </div>
        </section>
        <!--================End Single Product Area =================-->

        <!--? Popular Items Start -->
        <div class="popular-items section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row">
                <?php
                        include('config.php');
                        $sql = "SELECT * FROM products WHERE NOT id = '$id' ORDER BY RAND() LIMIT 4";
                        $resultado = $conexao->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($a = $resultado->fetch_assoc()) {
                                echo '
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                                        <div class="single-popular-items mb-50 text-center">
                                            <div class="popular-img">
                                                <img src="img/products/' . $a['image'] . '">
                                                <div class="img-cap">
                                                    <a href="configcarrinho.php?action=add&id=' . $a['id'] . '"><span>Adicionar ao Carrinho</span></a>
                                                </div>
                                                <div class="favorit-items">
                                                    <span class="flaticon-heart"></span>
                                                </div>
                                            </div>
                                            <div class="popular-caption">
                                                <h3><a href="formProduct_details.php?id=' . $a['id'] . '">' . $a['name'] . '</a></h3>
                                                <span>' . $a['price'] . ' €</span>
                                            </div>   
                                        </div>
                                    </div>';
                            }
                        }
                        $conexao->close();
                    ?>
                </div>
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="formLoja.php" class="btn view-btn1">Ver Mais Produtos</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->

    </main>
    <?php
    include('Footer.php');
    ?>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scroll up, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <!-- swiper js -->
    <script src="./assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="./assets/js/mixitup.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>


</body>

</html>