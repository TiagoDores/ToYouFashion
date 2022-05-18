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
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Criar Conta</h3>
                                </div>
                                <div class="card-body">
                                    <form class="row contact_form" action="inserirProduto.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="nome" name="nome" value="" placeholder="Nome" required>
                                                    <label for="nome">Nome</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="categoria">Categoria do Produto:</label>
                                                <select class="form-control" name="categoria">
                                                    <option value="">-------------</option>
                                                    <option value="Homem">Homem</option>
                                                    <option value="Mulher">Mulher</option>
                                                    <option value="Crianca">Criança</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="tamanho" name="tamanho" value="" placeholder="Tamanhos" required>
                                                    <label for="tamanho">Tamanhos</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="preco" name="preco" value="" placeholder="Preço">
                                                    <label for="preco">Preço</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="imagemproduto">Anexar Imagens:</label>
                                            <input class="form-control" type="file" name="imagemproduto" required>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button type="submit" value="submit" class="btn btn-primary">
                                                Inserir Produto
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