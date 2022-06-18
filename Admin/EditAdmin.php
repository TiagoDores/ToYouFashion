<?php
include('../config.php');

//«««««««««««««««««VARIABLES»»»»»»»»»»»»»»»»»»
$name = $_POST['name'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
$telephone = $_POST['telephone'];
$nif = $_POST['nif'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$id = $_GET['id'];


//««««««««««««««««««««««««««««««««««««««««««««

$sql = "UPDATE `users` SET `name`= '$name',`email`= '$email',`password`= '$password',`telephone`= '$telephone',`address`= '$address',`zipcode`= '$zipcode',
`country`= '$country',`nif`= '$nif' WHERE id= '$id'";

$resultado = $conexao->query($sql);

//echo $sql;

if ($resultado) {
    $msg = "Successful Editing";
} else {
    $msg = "Error when Editing";
}

header("location:UsersList.php?msg=$msg");
$conexao->close();
