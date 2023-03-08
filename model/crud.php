<?php

require "conexao.php";

 session_start(); 

class crud {    

 function inserir_Usuario($nome, $endereco, $cpf, $telefone, $email, $horario, $crianca, $nascimento, $mensagem){
 

   $conn= conectar();   

   $pegaEmail = mysqli_query($conn, "SELECT * FROM cadastr WHERE nome = '$nome'");	
	
	if(mysqli_num_rows($pegaEmail) ==1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Email já existe');window.location.href='../view/contato.html';</script>";
	

   }else{

   $sql = "INSERT INTO cadastr (nome, endereco, cpf, telefone, email, horario, crianca, nascimento, mensagem) values('$nome', '$endereco', '$cpf', '$telefone', '$email',  '$horario', '$crianca', '$nascimento', '$mensagem')";

    mysqli_query($conn,$sql);   

    echo"<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso');window.location.href='../View/hotelzinho.html';</script>";

   }
  
}
  
   function selecionar_Usuario($email,$horario){
       
   
        $conn= conectar();  
 
        $result_usuario = "SELECT * FROM cadastro1  WHERE email= '$email' && senha = '$horario' LIMIT 1";
        
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
       
        if(isset($resultado)){
		
            $_SESSION['usuarioEmail'] = $resultado['email'];            		
            $_SESSION['usuarioSenha'] = $resultado['senha'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['aluno'] = $resultado['crianca'];  
            $_SESSION['nascimento'] = $resultado['nascimento'];

            header("Location: ../View/perfil_usuario.php");           
   
        
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/login.html';</script>";
         
        }
    

  }
  
  function inserir_Usuari($nome, $endereco, $cpf, $telefone, $email, $senha, $confirma,$horario, $crianca, $nascimento, $mensagem){ 

    $conn= conectar();   
 
    $sql = "INSERT INTO Cadastro1 (nome,endereco,cpf,telefone,email,senha,confirma_senha, horario,crianca,nascimento,mensagem) values('$nome', '$endereco', '$cpf', '$telefone', '$email', '$senha', '$confirma','$horario', '$crianca', '$nascimento', '$mensagem')";
 
     mysqli_query($conn,$sql);   

     echo"<script language='javascript' type='text/javascript'>alert('Cadastrado com sucesso');window.location.href='../View/painel_adm.php';</script>";
 
   }

   

   public function excluir_Livro ($codigo_trecho){

    $conn= conectar();   
    
    $cod_livro= mysqli_query($conn, "SELECT * FROM cadastr WHERE id = '$codigo_trecho'");	
    
    if(mysqli_num_rows($cod_livro) == 0){
              
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir');window.location.href='../View/painel.php';</script>";
    }
           else{	
    
                  $result_livro = "DELETE FROM cadastr WHERE id = '$codigo_trecho'";
                  
                  mysqli_query($conn, $result_livro);
      
      if(mysqli_affected_rows($conn) != 0){
          
        echo"<script language='javascript' type='text/javascript'>alert('Excluído com sucesso');window.location.href='../View/painel.php';</script>";
                     
              }else{
                  
                  header("Location:../view/painel.php");
                   
                  
              }
    }
  
    
   }

   
   public function alterar($cod_trecho, $nome, $endereco, $cpf, $telefone, $email, $senha, $confirma, $horario, $crianca, $nascimento, $mensagem){

    $conn= conectar(); 
    
  	$pegacod_trecho = mysqli_query($conn, "SELECT * FROM cadastro1 WHERE id = '$cod_trecho'");

         if(mysqli_num_rows($pegacod_trecho) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este Código NÃO esta cadastrado em nossos registros');window.location.href='../View/painel_adm.php'</script>";

	      }else{		

		
          $result_livro = "UPDATE cadastro1 SET nome=' $nome', endereco='$endereco', cpf='$cpf', telefone='$telefone', email='$email', senha='$senha', confirma_senha='$confirma',horario='$horario', crianca='$crianca', nascimento='$nascimento', mensagem='$mensagem' WHERE  id= '$cod_trecho'";

         mysqli_query($conn,$result_livro);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('Cadastro alterado com sucesso!');window.location.href='../View/painel_adm.php'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este trecho');window.location.href='../View/painel_adm.php'</script>";
                     
                  
                     
              }


        }




   }
  
  public function alterar_senha( $email, $senha, $confirma){

    $conn= conectar(); 
    
  	$pegacod_trecho = mysqli_query($conn, "SELECT * FROM cadastro1 WHERE email= '$email'");

         if(mysqli_num_rows($pegacod_trecho) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este Código NÃO esta cadastrado em nossos registros');window.location.href='../View/senha.html'</script>";

	      }else{		

		
          $result_livro = "UPDATE cadastro1 SET  senha='$senha', confirma_senha='$confirma' WHERE email = '$email'";

         mysqli_query($conn,$result_livro);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('Cadastro alterado com sucesso!');window.location.href='../View/login.html'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este trecho');window.location.href='../View/senha.html'</script>";
                     
                  
                     
              }


        }




   }
  }
  


