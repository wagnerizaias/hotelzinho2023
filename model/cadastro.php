<?php

 include ("conexao.php");

   $nome= $_POST['login'];
   $sobrenome = $_POST['sobrenome'];
   $email = $_POST['email'];
   $senha = MD5($_POST['senha']);


$sql = "INSERT INTO cadastro (nome, sobrenome, email, senha)
     VALUES ('$nome','$sobrenome', '$email', '$senha')";


if(mysqli_query($conexao, $sql )){
   echo "Usuario cadastrado com sucesso";
   header('Location: index.php');
}
else{
    echo "erro" .mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>