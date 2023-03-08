<?php
session_start();
include('../model/conexao1.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
header('Location: adm.php');
exit();
}



$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email, senha from cadastro where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
$_SESSION['usuario'] = $email;
header('Location: painel.php');
exit();
} else {
$_SESSION['nao_autenticado'] = true;
header('Location: adm.php');
exit();
}