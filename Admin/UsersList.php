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
        include("Navbar.php");
        include("layoutSlidenav.php");
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Utilizadores</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Lista de Utilizadores</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-user me-1"></i>
                        Lista de Utilizadores
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Numero de Cliente</th>
                                    <th>Nome</th>
                                    <th>Morada</th>
                                    <th>Codigo Postal</th>
                                    <th>Pais</th>
                                    <th>Telemóvel</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>NIF</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Numero de Cliente</th>
                                    <th>Nome</th>
                                    <th>Morada</th>
                                    <th>Codigo Postal</th>
                                    <th>Pais</th>
                                    <th>Telemóvel</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>NIF</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    include('../config.php');
                                    $sql = "SELECT * FROM `cliente` WHERE `Admin` = '0'";
                                    $resultado = $conexao->query($sql);

                                    if ($resultado->num_rows > 0) {
                                        while ($a = $resultado->fetch_assoc()) {
                                            echo '<tr>
                                            <td>' . $a['IdCliente'] . '</td>
                                            <td>' . $a['Nome'] . '</td>
                                            <td>' . $a['Morada'] . '</td>
                                            <td>' . $a['Codigopostal'] . '</td>
                                            <td>' . $a['Pais'] . '</td>
                                            <td>' . $a['Telefone'] . '</td>
                                            <td>' . $a['Email'] . '</td>
                                            <td>' . $a['Password'] . '</td>
                                            <td>' . $a['NIF'] . '</td>
                                            <td> <a class="btn btn-info" href="formEditarUtilizador.php?id=' . $a['IdCliente'] . '"><i class="fas fa-pen"></i></a></td>
                                            <td> <a onclick=\'return confirm("Tem a certeza que deseja eliminar o registo?")\'
                                            class="btn btn-danger" href="eliminarUser.php?id=' . $a['IdCliente'] . '"><i class="fas fa-trash"></i></a></td>
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