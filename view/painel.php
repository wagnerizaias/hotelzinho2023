<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/teste.css">
    <title>cadastro</title>

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

        <li><a href="painel_adm.php" >Consulta</a></li>
        <li><a href="painel.php" >volta</a></li>
        <li><a href="sair.php" >Sair</a></li>

    </ul>

</nav>

<br><br>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login </title>
    <link rel="stylesheet" href="css/teste.css" />

</head>


</div><br>
    
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistema de Login</title>
    


</head>

<?php
session_start();

?>

<br><br><br>
<h1>Olá, <?php echo $_SESSION['usuario'];?></h1>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Testando conexão ao banco de dados </title>
</head>
<body>

<h1><label>Consulta a Banco de Dados completo:</label></h1><br>

</form>
</body>
</html>
</html>
<body>
    

<div class="holder">

<div class="tr">
<?php
echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Endereco</th>";
echo "<th>CPF</th>";
echo "<th>Telefone</th>";
echo "<th>Email</th>";
echo "<th>Horario</th>";
echo "<th>Criança</th>";
echo "<th>Nascimento</th>";
echo "<th>Mensagem</th>";
echo "</tr>";


$strcon=mysqli_connect('localhost', 'root', '', 'hotelzinho');
$sql = "SELECT * FROM cadastr";
$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($resultado))
{
$id = $registro['id'];
$nome = $registro['nome'];
$endereco = $registro['endereco'];
$cpf = $registro['cpf'];
$telefone = $registro['telefone'];
$email = $registro['email'];
$horario = $registro['horario'];
$crianca = $registro['crianca'];
$nascimento = $registro['nascimento'];
$mensagem = $registro['mensagem'];

echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$nome."</td>";
echo "<td>".$endereco."</td>";
echo "<td>".$cpf."</td>";
echo "<td>".$telefone."</td>";
echo "<td>".$email."</td>";
echo "<td>".$horario."</td>";
echo "<td>".$crianca."</td>";
echo "<td>".$nascimento."</td>";
echo "<td>".$mensagem."</td>";
echo "</tr>";
}

mysqli_close($strcon);
echo "</table>";
?>
</div>
</div>
<body>

<br>

<form class="formulario"  action="../Controller/excluir.php" method="POST">
<h1> <?php echo "<span>"; echo " Olá,"; echo "</span>"; echo "<span>"; echo $_SESSION['usuario']; echo "</span>";?> <br><br></h1>

<div id="ex">
<div class="field"> 
    <h1>Excluir Pré-Cadastro:</h1><br>
<h1><label>Digite o Código ID:</label><input type="text" name="codigo_trecho"></h1><br>
<input type="submit" value="Excluir " name="acao"><br><br>
</form>
</div>
</div>


<br><br>
</form></h1>



    <div id="areaa">
  
    
        <h1>Seja bem vindo:</h1>

        <h1>Ficha Cadastral do Aluno:</h1><BR>


   
        <form action="../controller/cadastrar.php" method ="post" >  
    
        <div class="field">
        <label for="Nome">responsal:</label>
        <input type="text" id="responsal" name="responsalvel" placeholder="*Digite nome responsal*" required>
        </div>
        <div class="field">
        <label for="Endereço"> Seu endereco:</label>
        <input type="text" id="Endereço" name="Endereco" placeholder="*Digite seu endereço*" required>
        </div>
        <div class="field">
        <label for="Digite seu CPF">CPF:</label>
        <input type="text" id="CPF" name="CPF" placeholder="*Digite seu CPF*" required>
        </div>
        <div class="field">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="*Digite seu Telefone">
        </div>
        <div class="field">
        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" placeholder="*Digite seu E-Mail*" required>
        </div>
        <div class="field">
        senha:  <input type="password" name="senha"
        placeholder="Digite sua Senha"><br>
        Confirma:<input type="password" name="senha"
        placeholder="*Digite sua Senha*"><br> 
        </div>
        <div class="field"> 
        <label for="Horario">Horário:</label>       
        <input type="text"id="horario" name="horario" placeholder="*Digite Manha ou Tarde*"><br>  
        </div>
        <div class="field">
        <label for="Criança">Criança:</label>
        <input type="text" id="nome" name="nome" placeholder="*Digite nome criança*" required>
        </div>
        <div class="fied">
        <label for="data">Nascimento da Criança:</label>
        <input id="date"type='date' name="date" placeholder="">
        </div>
        <label for="data">Mensagem</label>
        <textarea name="mensagem" id="mensagem" placeholder="*Mensagem*" required></textarea><br>
        <input type="submit" value="cadastro" name="Enviar"><br>
    </form><br>
 
   
</div><br>
<div>

</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<br><br><br><br><br><br><br><br><br><br><br><br><br>






<footer id="rodape"> 
   <h4 style="color: blue;">Feito por:BIT...</h4>
   </footer>

  </body> 
</html>