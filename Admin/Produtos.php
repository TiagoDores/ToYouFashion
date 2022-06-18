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
                <h1 class="mt-4">Produtos</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Produtos</li>
                </ol>
                <div class="mt-5 mb-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalInsertProduct">
                        <a><i class="fas fa-plus"></i> Adicionar um Novo Produto</a>
                    </button>
                </div>
                <div class="modal fade" id="ModalInsertProduct">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Adicionar um Novo Produto</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <form action="InsertProduct.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name" value="" placeholder="Nome" required>
                                                <label for="name">Nome</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="image">Imagem:</label>
                                                <input class="form-control" type="file" name="image" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <select class="form-select p-3" name="category">
                                                    <option value="">Selecione uma Categoria</option>
                                                    <option value="Man">Homem</option>
                                                    <option value="Women">Mulher</option>
                                                    <option value="Children">Criança</option>
                                                    <option value="Accessories">Acessórios</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="size" name="size" value="" placeholder="Tamanho" required>
                                                <label for="name">Tamanho</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="price" name="price" value="" placeholder="Preço">
                                                <label for="price">Preço</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="description">Descrição:</label>
                                                <textarea class="form-control" rows="4" id="description" name="description"></textarea>
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

                <!-- Table -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-user"></i>
                        Produtos
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>IdProduto</th>
                                    <th>Nome</th>
                                    <th>Categoria</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>IdProduto</th>
                                    <th>Nome</th>
                                    <th>Categoria</th>
                                    <th>Preço</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                include('../config.php');
                                $sql = "SELECT * FROM `products`";
                                $resultado = $conexao->query($sql);

                                if ($resultado->num_rows > 0) {
                                    while ($a = $resultado->fetch_assoc()) {
                                        echo '<tr>
                                            <td>' . $a['id'] . '</td>
                                            <td>' . $a['name'] . '</td>
                                            <td>' . $a['category'] . '</td>
                                            <td>' . $a['price'] . '</td>
                                            <td>
                                                <a class="btn btn-info" href="FormEditProducts.php?id='.$a['id'].'"><i class="fas fa-pen"></i></a>
                                            </td>
                                            <td> 
                                                <a class="btn btn-danger" onClick=\'javascript: return confirm ("Tem a certeza que deseja eliminar o registo?");\' 
                                                    href="EliminateProduct.php?id='.$a['id'].'"><i class="fas fa-trash"></i></a>
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
                <!-- Table End -->

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