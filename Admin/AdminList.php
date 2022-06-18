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
                <h1 class="mt-4">Admins</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Lista de Admins</li>
                </ol>
                <div class="mt-5 mb-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalInsertAdmin">
                        <a><i class="fas fa-plus"></i> Adicionar um Novo Admin</a>
                    </button>
                </div>
                <div class="modal fade" id="ModalInsertAdmin">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Adicionar um Novo Admin</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <form action="InsertAdmins.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
                                                <label for="name">Nome</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="passsword" name="password" placeholder="Password" required>
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Adicionar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- The Modal to Insert End-->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-user me-1"></i>
                        Lista de Admins
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>IdAdmin</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>IdAdmin</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                include('../config.php');
                                $sql = "SELECT * FROM `admin`";
                                $resultado = $conexao->query($sql);

                                if ($resultado->num_rows > 0) {
                                    while ($a = $resultado->fetch_assoc()) {
                                        echo '<tr>
                                            <td>' . $a['id'] . '</td>
                                            <td>' . $a['name'] . '</td>
                                            <td>' . $a['email'] . '</td>
                                            <td>' . $a['password'] . '</td>
                                            <td>
                                                <a class="btn btn-info" href="FormEditAdmin.php?id=' . $a['id'] . '"><i class="fas fa-pen"></i></a>
                                            </td>
                                            <td> 
                                                <a class="btn btn-danger" onClick=\'javascript: return confirm ("Tem a certeza que deseja eliminar o registo?");\' 
                                                    href="EliminateAdmin.php?id=' . $a['id'] . '"><i class="fas fa-trash"></i></a>
                                            </td>
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