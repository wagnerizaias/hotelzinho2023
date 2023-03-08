<?php  
      
if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   

$cod_trecho= $_POST['codigo_trecho'];


$excluir = new crud();

$excluir->excluir_Livro($cod_trecho);
}      
   