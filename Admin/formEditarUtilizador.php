<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">

    <?php
        session_start();
        if (!isset($_SESSION['user'])) {
            header("location: index.php?msg= Conta Indisponivel");
        }

        include('../config.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM `users` WHERE IdCliente = '$id'";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            $cliente = $resultado->fetch_assoc();
        }

        $conexao->close();
    ?>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Editar Dados da Conta</h3>
                                </div>
                                <div class="card-body">
                                    <form class="row contact_form" action="Editar.php?id=<?=$id?>" method="post" novalidate="novalidate">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="nome" name="nome" value="<?=$cliente['Nome']?>" placeholder="Nome" required>
                                                    <label for="nome">Nome</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="morada" name="morada" value="<?=$cliente['Email']?>" placeholder="Morada" required>
                                                    <label for="morada">Morada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="codigopostal" name="codigopostal" value="<?=$cliente['Codigopostal']?>" placeholder="Código Postal" required>
                                                    <label for="codigopostal">Codigo Postal</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="telemovel" name="telemovel" value="<?=$cliente['Telefone']?>" placeholder="Telemóvel">
                                                    <label for="telemovel">Telemóvel</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email" value="<?=$cliente['Email']?>" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="password" class="form-control" id="password" name="password" value="<?=$cliente['Password']?>" placeholder="Password" required>
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="nif" name="nif" value="<?=$cliente['NIF']?>" placeholder="NIF">
                                                    <label for="nif">NIF</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="admin" name="admin" value="<?=$cliente['Admin']?>">
                                            <label class="form-check-label" for="admin">Admin</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button type="submit" value="submit" class="btn_3">
                                                Editar Dados
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
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
</body>

</html>