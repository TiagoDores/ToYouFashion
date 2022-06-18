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

                                        $sql = "SELECT * FROM `users` WHERE id = $id";
                                        $user = $conexao->query($sql);
                                        if ($user->num_rows > 0) {
                                            $user = $user->fetch_assoc();
                                        }
                                    ?>
                                    <form class="row contact_form" action="EditUser.php?id=<?= $id; ?>" method="post" novalidate="novalidate">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>" placeholder="Nome" required>
                                                    <label for="name">Nome</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="address" name="address" value="<?= $user['address'] ?>" placeholder="address" required>
                                                    <label for="address">Morada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="zipcode" name="zipcode" value="<?= $user['zipcode'] ?>" placeholder="Codigo-Postal" required>
                                                    <label for="zipcode">Codigo-Postal</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="country" name="country" value="<?= $user['country'] ?>" placeholder="Pais" required>
                                                    <label for="country">Pais</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="telephone" name="telephone" value="<?= $user['telephone'] ?>" placeholder="Telemóvel" required>
                                                    <label for="telephone">Telemóvel</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" placeholder="Email" required>
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="passsword" name="password" value="<?= $user['password'] ?>" placeholder="Password" required>
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="nif" name="nif" value="<?= $user['nif'] ?>" placeholder="NIF" required>
                                                    <label for="nif">NIF</label>
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