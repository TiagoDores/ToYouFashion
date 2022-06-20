<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <?php
    session_start();
    include("Navbar.php");
    include("layoutSlidenav.php");
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <div class="row">
                    <!-- /.col-->
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                </div>
                                <?php
                                    include('../config.php');
                                    $sql = "SELECT count(*) AS qtd FROM users";
                                    $resultado = $conexao->query($sql);

                                    if ($resultado->num_rows > 0) {
                                        while ($a = $resultado->fetch_assoc()) {
                                        echo '<div class="fs-4 fw-semibold">' . $a['qtd'] . '</div><small class="text-medium-emphasis text-uppercase fw-semibold">Clientes</small>';
                                        }
                                    }
                                    $conexao->close();
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>
                                </div>
                                <?php
                                    include('../config.php');
                                    $sql = "SELECT count(*) AS qtd FROM products";
                                    $resultado = $conexao->query($sql);

                                    if ($resultado->num_rows > 0) {
                                        while ($a = $resultado->fetch_assoc()) {
                                        echo '<div class="fs-4 fw-semibold">' . $a['qtd'] . '</div><small class="text-medium-emphasis text-uppercase fw-semibold">Productos</small>';
                                        }
                                    }
                                    $conexao->close();
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card bg-info">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                </div>
                                <?php
                                    include('../config.php');
                                    $sql = "SELECT count(*) AS qtd FROM orders";
                                    $resultado = $conexao->query($sql);

                                    if ($resultado->num_rows > 0) {
                                        while ($a = $resultado->fetch_assoc()) {
                                        echo '<div class="fs-4 fw-semibold">' . $a['qtd'] . '</div><small class="text-medium-emphasis text-uppercase fw-semibold">Encomendas</small>';
                                        }
                                    }
                                    $conexao->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row-->

                <img src="../img/logo/logo.png">

            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Tiago Dores</div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/chart-area-demo.js"></script>
    <script src="assets/js/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>