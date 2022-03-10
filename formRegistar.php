<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>To You Fashion | Registar</title>
    <link rel="icon" href="img/logo/icon.png" type="image/png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
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
</head>

<body>

    <?php
    include("Preloader.php");
    include("Header.php");
    ?>

    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Registar</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================Register_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div>
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Bem-vindo ao nosso site! <br>
                                    Por Favor Registe-se agora</h3>
                                <form class="row " action="Registar.php" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="nome" name="nome" value="" placeholder="Nome" required>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group p_star">
                                            <input type="text" class="form-control" id="morada" name="morada" value="" placeholder="Morada" required>
                                        </div>
                                        <div class="form-group p_star">
                                            <input type="text" class="form-control" id="codigopostal" name="codigopostal" value="" placeholder="Código Postal" required>
                                        </div>
                                        <div class="form-group p_star">
                                            <input type="text" class="form-control" id="pais" name="pais" value="" placeholder="Pais" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group p_star">
                                            <!--<select class="form-select">

                                            </select>-->
                                            <input type="text" class="form-control" id="telemovel" name="telemovel" value="" placeholder="Telemóvel">
                                        </div>
                                        <div class="form-group p_star">
                                            <input type="text" class="form-control" id="nif" name="nif" value="" placeholder="NIF">
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="f-option" name="selector">
                                            <label for="f-option">Lembrar-me</label>
                                        </div>
                                        <button type="submit" value="submit" class="btn_3">
                                            Sing in
                                        </button>
                                        <a class="lost_pass" href="#">forget password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Register_part end =================-->
    </main>

    <?php
    include("Footer.php");
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

    <!-- Scroll up, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>