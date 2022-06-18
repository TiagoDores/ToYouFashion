<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Editar</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                        include('../config.php');
                                        $id = $_GET['id'];

                                        $sql1 = "SELECT * FROM `products` WHERE id = $id";
                                        $produtos = $conexao->query($sql1);
                                        if ($produtos->num_rows > 0) {
                                            $product = $produtos->fetch_assoc();
                                        }
                                    ?>
                                    <form class="row contact_form" action="EditProduct.php?id=<?= $id; ?>" method="post" novalidate="novalidate">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name" name="name" value="<?= $product['name'] ?>" placeholder="Nome" required>
                                                    <label for="name">Nome</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/products/<?= $product['image'] ?>" width="100px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <?php
                                                        include('../config.php');
                                                        $sql = "SELECT * FROM `products`";
                                                        $categoria = $conexao->query($sql);
                                                        echo '<select name="category"class="form-select p-3l">';
                                                        if ($categoria->num_rows > 0) {
                                                            while ($c = $categoria->fetch_assoc()) {
                                                                echo '<option value="' . $c['category'] . '">' . $c['category'] . '</option>';
                                                            }
                                                        }
                                                        echo '</select>';
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                    include('../config.php');
                                                    $sql = "SELECT * FROM `productsize`";
                                                    $size = $conexao->query($sql);
                                                    echo '<select name="size"class="form-select p-3l">';
                                                    echo '<option value="' . $s['idsize'] . '">Selecione um Tamanho</option>';
                                                    if ($size->num_rows > 0) {
                                                        while ($s = $size->fetch_assoc()) {
                                                            echo '<option value="' . $s['idsize'] . '">' . $s['size'] . '</option>';
                                                        }
                                                    }
                                                    echo '</select>';
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="price" name="price" value="<?= $product['price'] ?>" placeholder="Preço">
                                                    <label for="price">Preço</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div>
                                                    <label for="description">Descrição:</label>
                                                    <textarea class="form-control" rows="4" id="description" name="description" value="<?= $product['description'] ?>"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" value="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>