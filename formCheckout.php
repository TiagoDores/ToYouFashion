<!doctype html>
<html lang="pt-pt">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>To You Fashion | Checkout</title>
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
  include("config.php");
  include("configcarrinho.php")
  ?>
  <main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
      <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap text-center">
                <h2>Checkout</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================Checkout Area =================-->
    <section class="checkout_area section_padding">
      <div class="container">         
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Detalhes de Faturação</h3>
              <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="firstname" name="name" />
                  <span class="placeholder" data-placeholder="Primeiro Nome"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="lastname" name="name" />
                  <span class="placeholder" data-placeholder="Ultimo Nome"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="telephone" name="telephone" />
                  <span class="placeholder" data-placeholder="Telemóvel"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="email" name="email" />
                  <span class="placeholder" data-placeholder="Email"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">Country</option>
                    <option value="2">Country</option>
                    <option value="4">Country</option>
                  </select>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="address1" name="address1" />
                  <span class="placeholder" data-placeholder="Morada 01"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="city" name="city" />
                  <span class="placeholder" data-placeholder="Cidade"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">District</option>
                    <option value="2">District</option>
                    <option value="4">District</option>
                  </select>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Código-Postal" />
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Meu Pedido</h2>
                <?php  
                  echo '
                    <ul class="list">
                      <li>
                        <a href="#">Product
                          <span>Total</span>
                        </a>
                      </li>
                    
                    ';
            
                    $total = 0;
                    foreach ($_SESSION['cart'] as $id => $qtd) {
                      $sql   = "SELECT *  FROM products WHERE id= '$id'";
                      $qr = $conexao->query($sql);
                      if ($qr->num_rows > 0) {
                        $ln = $qr->fetch_assoc();
                        $name  = $ln['name'];
                        $price = $ln['price'];
                        $sub   = $ln['price'] * $qtd;
                        $total += (float) $sub;
                        echo '
                              <li>
                                <a href="#">' . $name . '
                                  <span class="middle">x ' . $qtd . ' </span>
                                  <span class="last">' . $sub . '</span>
                                </a>
                              </li>
                              ';
                      }
                    }
                  
                  echo '</ul>';
            
                  echo '
                      <ul class="list list_2">
                          <li>
                            <a href="#">Subtotal
                              <span>'. $total.'</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">Shipping
                              <span>Flat rate: $50.00</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">Total
                              <span>'. $total.'</span>
                            </a>
                          </li>
                        </ul>
                      ';
                ?>

                <h3><br> Tipos de Pagamento</h3>
                <div class="payment_item">
                  <div class="radion_btn">
                    <input type="radio" id="f-option5" name="selector" />
                    <label for="f-option5">Multimanco</label>
                    <div class="check"></div>
                  </div>
                </div>
                <div class="payment_item">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Cartão de Crédito </label>
                    <div class="check"></div>
                  </div>
                </div>
                <div class="payment_item">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Paypal </label>
                    <div class="check"></div>
                  </div>
                </div>
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" required/>
                  <label for="f-option4">I’ve read and accept the </label>
                  <a href="TermosCondições.php">terms & conditions*</a>
                </div>
                <a class="btn_3" href="#">Proceed to Paypal</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->
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

</body>

</html>