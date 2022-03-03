<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Charts - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <?php
    include("Navbar.php");
    include("layoutSlidenav.php");
    ?>
    <div id="layoutSidenav_content">

        <?php
        include('../config.php');
        $sql = "SELECT * FROM `produtos`";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            while ($a = $resultado->fetch_assoc()) {
                echo '<div class="row">
                <div class="col-md-3">
                    <div class="white_card position-relative mb_20 ">
                        <div class="card-body">
                            <img src="../img/product-1.jpg" alt="" class="d-block mx-auto my-4" width="60%">
                            <div class="row my-4">
                                <div class="col"><span class="badge_btn_3  mb-1">' . $a['Designacao'] . '</span> <a href="#" class="f_w_400 color_text_3 f_s_14 d-block"></a></div>
                                <div class="col-auto">
                                    <h4 class="text-dark mt-0">' . $a['Preco'] . '</h4>
                                    <ul class="list-inline mb-0 product-review align-self-center">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning font-16"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ml-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ml-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ml-n2"></i>
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-star-half text-warning font-16 ml-n2"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn_2 btn-block">Add To Cart</button>
                        </div>
    
                    </div>
                </div>
            </div>';
            }
        }
        $conexao->close();
        ?>
        

        <?php
        include("Footer.php");
        ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

</body>

</html>