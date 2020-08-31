<?php
session_start();
include('conexaoL.php');

if(empty($_POST['usuarios']) || empty($_POST['senha'])) {
    header('Location: index-login.php');
    exit();
}

$usuarios = mysqli_real_escape_string($connexao, $_POST['usuarios']);
$senha = mysqli_real_escape_string($connexao, $_POST['senha']);

$query = "SELECT * FROM controlers WHERE usuarios = '{$usuarios}' AND senha = md5('{$senha}')";

$result = mysqli_query($connexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuarios'] = $usuarios;
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index-login.php');
    exit();
    
}
?>
