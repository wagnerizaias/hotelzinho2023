
<!DOCTYPE html>
<html lang="pt-br">
<head>
 
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../view/css/teste.css">
<title>Document</title>
</head>
  
<body>
<input type="checkbox" id="check">
<label for="check" id="icone"><img src="../view/imagem/ba.JPG"alt= " imagem" height="30" width="40"></label>
<div class="barra"><br>	
<nav>
<a href=""><div class="link">Home</div></a>
<a href="../view/contato.html"><div class="link">Cadastro</div></a>
<a href="Login.html"><div class="link">Login</div></a>
 
</nav>	
</div><br>

<h1>Seja bem vindo:</h1>
<form>
<h1>Hotelzinho Infantil <br>Jardim da Alegria</h1><br>
<h1><a href="contato.html" target="_blank" title="Inscrições abertas">Inscrições abertas</a></h1>
</form><br>
<h2> + Info:(19)98707-5090</h2>
<h3> Disponíveis ligue e agende uma visita 😍😍🎊🤩🤩♥️ </h3><br>



<?php
echo "<table border=1>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Endereco</th>";
echo "<th>CPF</th>";
echo "<th>Telefone</th>";
echo "<th>Email</th>";
echo "<th>Criança</th>";
echo "<th>Nascimento</th>";
echo "<th>Mensagem</th>";
echo "</tr>";

$strcon=mysqli_connect('localhost', 'root', '', 'hotelzinho');
$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($resultado))
{
$nome = $registro['nome'];
$endereco = $registro['endereco'];
$cpf = $registro['cpf'];
$telefone = $registro['telefone'];
$email = $registro['email'];
$crianca = $registro['crianca'];
$nascimento = $registro['nascimento'];
$mensagem = $registro['mensagem'];

echo "<tr>";
echo "<td>".$nome."</td>";
echo "<td>".$endereco."</td>";
echo "<td>".$cpf."</td>";
echo "<td>".$telefone."</td>";
echo "<td>".$email."</td>";
echo "<td>".$crianca."</td>";
echo "<td>".$nascimento."</td>";
echo "<td>".$mensagem."</td>";
echo "</tr>";
}

mysqli_close($strcon);
echo "</table>";
?>