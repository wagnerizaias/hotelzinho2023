<?php

if ( isset($_POST['Enviar']) ){
       
 include_once '../model/crud.php';


$nome= $_POST ['responsalvel'];
$endereco= $_POST ['Endereco'];
$cpf= $_POST ['CPF'];
$telefone= $_POST ['telefone' ];
$email= $_POST ['email'];
$horario = $_POST ['horario'];
$crianca= $_POST ['nome'];
$nascimento= $_POST ['date'];
$mensagem= $_POST ['mensagem'];



$inserir = new crud ();

$inserir->inserir_Usuario($nome, $endereco, $cpf, $telefone, $email, $horario, $crianca, $nascimento, $mensagem);
       

}

