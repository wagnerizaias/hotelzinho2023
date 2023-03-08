<?php  
      
 if ( isset($_POST['acao']) ){
          
  include_once '../Model/crud.php' ;  

  
  
    $email= $_POST ['email'];
    $senha=md5($_POST['senha']);
    $confirma=md5( $_POST ['senha']);
   
    
    

    
    $alterar = new crud();
    
    

$alterar->alterar_senha($email, $senha, $confirma);
}      