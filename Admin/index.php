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
    require_once('restrito.php');
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
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                </div>
                                <div class="fs-4 fw-semibold">87.500</div><small class="text-medium-emphasis text-uppercase fw-semibold">Visitors</small>
                                <div class="progress progress-thin mt-3 mb-0">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                </div>
                                <div class="fs-4 fw-semibold">385</div><small class="text-medium-emphasis text-uppercase fw-semibold">New Clients</small>
                                <div class="progress progress-thin mt-3 mb-0">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>
                                </div>
                                <div class="fs-4 fw-semibold">1238</div><small class="text-medium-emphasis text-uppercase fw-semibold">Products sold</small>
                                <div class="progress progress-thin mt-3 mb-0">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-pie"></i></div>
                                </div>
                                <div class="fs-4 fw-semibold">28%</div><small class="text-medium-emphasis text-uppercase fw-semibold">Returning Visitors</small>
                                <div class="progress progress-thin mt-3 mb-0">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                </div>
                                <div class="fs-4 fw-semibold">5:34:11</div><small class="text-medium-emphasis text-uppercase fw-semibold">Avg. Time</small>
                                <div class="progress progress-thin mt-3 mb-0">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-medium-emphasis text-end mb-4">
                                    <div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                                </div>
                                <div class="fs-4 fw-semibold">972</div><small class="text-medium-emphasis text-uppercase fw-semibold">Comments</small>
                                <div class="progress progress-thin mt-3 mb-0">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-user me-1"></i>
                        Lista de Utilizadores
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>IdCliente</th>
                                    <th>Nome</th>
                                    <th>Morada</th>
                                    <th>Codigo Postal</th>
                                    <th>Telemóvel</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>NIF</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>IdCliente</th>
                                    <th>Nome</th>
                                    <th>Morada</th>
                                    <th>Codigo Postal</th>
                                    <th>Telemóvel</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>NIF</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                include('../config.php');
                                $sql = "SELECT * FROM `users`";
                                $resultado = $conexao->query($sql);

                                if ($resultado->num_rows > 0) {
                                    while ($a = $resultado->fetch_assoc()) {
                                        echo '<tr>
                                            <td>' . $a['id'] . '</td>
                                            <td>' . $a['name'] . '</td>
                                            <td>' . $a['address'] . '</td>
                                            <td>' . $a['zipcode'] . '</td>
                                            <td>' . $a['telephone'] . '</td>
                                            <td>' . $a['email'] . '</td>
                                            <td>' . $a['password'] . '</td>
                                            <td>' . $a['nif'] . '</td>
                                            <td> <a class="btn btn-info href="formEditarUtilizador.php?id=' . $a['id'] . '"><i class="fas fa-pen"></i></a></td>
                                            <td> <a onclick=\'return confirm("Tem a certeza que deseja eliminar o registo?")\'
                                            class="btn btn-danger" href="eliminarUser.php?id=' . $a['id'] . '"><i class="fas fa-trash"></i></a></td>
                                        </tr>';
                                    }
                                }
                                $conexao->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
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