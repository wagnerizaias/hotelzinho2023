<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];
			$_SESSION['nome'];
			$_SESSION['aluno'];
			$_SESSION['nascimento'];
      $_SESSION['id'] ; 


if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    


		header("Location: logout.php");
                
		exit;
		}else{
			
?>



<head>
<title>Perfil Usuário </title>
 <meta charset="UTF-8">
 <link rel="stylesheet"   href="//../view/css/teste.css"> 
 <link rel="stylesheet"   href="../view/css/real.css"> 
</head>
<body>

    <nav id="menu-h">
        <ul>
            <li>
                <a href="#">
                    Home
                </a>
            </li>

            <li><a href="https://api.whatsapp.com/send?phone=5519987075090&app">whatsapp</a></li>

			<li><a href="mailto:wagnerizaias1@gmail.com?subject=Assunto" >Clique email</a></li>

            
            <li><a href="perfil_usuario.php"><?php echo "<span>"; echo " "; echo "</span>"; echo "<span>"; echo $_SESSION['aluno']; echo "</span>";?></a></li></a>

            <li><a href ="sair.php">Deslogar </a></li>
        </ul>


        
    </nav>



<br><br>


<div>

<h3><HEAD><TITLE>Exibir Data e Hora em HTML </TITLE>
		<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
		<script type="text/javascript">
			jQuery(window).load(function($){
				atualizaRelogio();
			});
		</script>
	</HEAD>
	<BODY>
		<div>
			<output id="data" style="font-family: 'arial black', 'avant garde'; font-size: 24px;"></output>
		
			<output id="hora" style="font-family: 'arial black', 'avant garde'; font-size: 24px;"></output>				
		</div>			
	</BODY>
	<script>
		function atualizaRelogio(){ 
			var momentoAtual = new Date();
			
			var vhora = momentoAtual.getHours();
			var vminuto = momentoAtual.getMinutes();
			var vsegundo = momentoAtual.getSeconds();
			
			var vdia = momentoAtual.getDate();
			var vmes = momentoAtual.getMonth() + 1;
			var vano = momentoAtual.getFullYear();
			
			if (vdia < 10){ vdia = "0" + vdia;}
			if (vmes < 10){ vmes = "0" + vmes;}
			if (vhora < 10){ vhora = "0" + vhora;}
			if (vminuto < 10){ vminuto = "0" + vminuto;}
			if (vsegundo < 10){ vsegundo = "0" + vsegundo;}

			dataFormat = vdia + " / " + vmes + " / " + vano;
			horaFormat = vhora + " : " + vminuto + " : " + vsegundo;

			document.getElementById("data").innerHTML = dataFormat;
			document.getElementById("hora").innerHTML = horaFormat;

			setTimeout("atualizaRelogio()",1000);
		}
	</script>	</h3>



<h1><?php echo "<span>"; echo "Email: "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
</h1>




<h2><fieldset>
<legend> Area aula.</legend>
<a href="">Aluno.</a>
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['aluno']; echo "</span>";?>
<br>





<h2><a href="https://drive.google.com/file/d/1FPuPvlyEyMt-XFsKOQkb1wWRZUsIyrdO/view?usp=sharing">
        <img src="../view/imagem/sabia.jpg" alt=" imagem" height="100" width="120/"></a><br>
<a href="https://drive.google.com/file/d/1FPuPvlyEyMt-XFsKOQkb1wWRZUsIyrdO/view?usp=sharing"
   download="https://drive.google.com/file/d/1FPuPvlyEyMt-XFsKOQkb1wWRZUsIyrdO/view?usp=sharing">
  Faça o download Atividade..</h2>
</a>
<br>

<ul>
  
  
<form action="mailto:wagnerizaias1@gmail.com?subject=Assunto" method="post" enctype="multipart/form-data">
    <label>Imagem de atividade: <input type="file" name="image"></label>
    <input type="submit" value="Submit">
</form>
<br>
<form action="processa_imagem_perfil.php" method="post" enctype="multipart/form-data">
    <label>Documento da atividade: <input type="file" name="image"></label>
    <input type="submit" value="Submit">
</form>
<br>
<form action="processa_imagem_perfil.php" method="post" enctype="multipart/form-data">
    <label>Documento: <input type="file" name="image[]" multiple="multiple"></label>
    <input type="submit" value="Submit">
</form>
<br>

<div class="holder">
<div class="area">
<body>
<?php
echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
//echo "<th>Telefone</th>";
echo "<th>Email</th>";
echo "<th>Criança</th>";
 echo"<th>Chamada</th>";
echo "</tr>";

$strcon=mysqli_connect('localhost', 'root', '', 'hotelzinho');
$sql = "SELECT * FROM cadastro1";
$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($resultado))
{
$id = $registro['id'];
$nome = $registro['nome'];
//$telefone = $registro['telefone'];
$email = $registro['email'];
$crianca = $registro['crianca'];
$mensagem = $registro['mensagem'];


echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$nome."</td>";
//echo "<td>".$telefone."</td>";
echo "<td>".$email."</td>";
echo "<td>".$crianca."</td>";
echo "<td>ok</td>";
echo "</tr>";
}

mysqli_close($strcon);
echo "</table>";

?><br>
</div>
</div>
</div><br>
</body>
<?php 

}?>	
<br><br><br><br><br><br>
