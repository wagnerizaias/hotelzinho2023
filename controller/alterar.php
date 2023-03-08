

<?php  
      
 if ( isset($_POST['altera']) ){
          
  include_once '../Model/crud.php' ;  

    $cod_trecho= $_POST['codigo_trecho'];
    $nome= $_POST ['responsalvel'];
    $endereco= $_POST ['endereco'];
    $cpf= $_POST ['cpf'];
    $telefone= $_POST ['telefone' ];
    $email= $_POST ['email'];
    $senha=md5($_POST['senha']);
    $confirma=md5( $_POST ['senha']);
    $horario= $_POST ['horario'];
    $crianca= $_POST ['nome'];
    $nascimento= $_POST ['date'];
    $mensagem= $_POST ['mensagem'];
    
    
    

    
    $alterar = new crud();
    
    

$alterar->alterar($cod_trecho, $nome, $endereco, $cpf, $telefone, $email, $senha, $confirma, $horario, $crianca, $nascimento, $mensagem);
}      
   