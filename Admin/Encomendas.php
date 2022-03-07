<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <?php
        include("Navbar.php");
        include("layoutSlidenav.php");
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Encomendas</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Encomendas</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-box-open"></i>
                        Encomendas
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>IdEncomenda</th>
                                    <th>Cliente</th>
                                    <th>Estado</th>
                                    <th>Data da Encomenda</th>
                                    <th>Numero de Produtos</th>
                                    <th>Valor Total</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>IdEncomenda</th>
                                    <th>Cliente</th>
                                    <th>Estado</th>
                                    <th>Data da Encomenda</th>
                                    <th>Numero de Produtos</th>
                                    <th>Valor Total</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    include('../config.php');
                                    $sql = "SELECT * FROM `encomendas`";
                                    $resultado = $conexao->query($sql);

                                    if ($resultado->num_rows > 0) {
                                        while ($a = $resultado->fetch_assoc()) {
                                            echo '<tr>
                                            <td>' . $a['IdEncomenda'] . '</td>
                                            <td>' . $a['IdCliente'] . '</td>
                                            <td>' . $a['EstadoEncomenda'] . '</td>
                                            <td>' . $a['DataEncomenda'] . '</td>
                                            <td>' . $a['NumeroProdutos'] . '</td>
                                            <td>' . $a['ValorTotal'] . '</td>
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
        <?php 
            include("Footer.php");
        ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>