<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];
			$_SESSION['nome'];
			$_SESSION['aluno'];
			$_SESSION['nascimento'];


if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: logout.php");
                
		exit;
		}else{
			
?>
<br><br><br><br><br>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Horizontal</title>
    <link rel="stylesheet"   href="../view/css/teste.css"> 
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

            
            <li><a href="#"><?php echo "<span>"; echo " "; echo "</span>"; echo "<span>"; echo $_SESSION['aluno']; echo "</span>";?></a></li></a>
            <li><a href="sala.php">Sala</a></li>
            <li><a href ="sair.php">Deslogar </a></li>
        </ul>
    </nav>

</body>

<head>
<title>Perfil Usuário </title>
 <meta charset="UTF-8">
 <link rel="stylesheet"   href="../view/css/teste.css"> 
 <link rel="stylesheet"   href="../view/css/real"> 
</head>
<body>
<div>

<h1><?php echo "<span>"; echo "Email: "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
</h1><br>
<h2><fieldset>
<legend> Area responsalvel.</legend>
<?php echo "<span>"; echo "Seja bem vinda, "; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?><br>
<a href="">Aluna(o).</a>
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['aluno']; echo "</span>";?>


</fieldset></h2>
<h2>Aviso ou alteração Sua vida.<br></h2>
    <form action="/enviar" method="post" accept-charset="utf-8" enctype="multipart/form-data" accept="image/png|image/jpg|application/pdf">
      <fieldset>
      <legend>Deixe seus dados que entraremos em contato</legend>
      <label>Nome:</label> <input type="text" placeholder="Nome" name="nome" required><br>
      <label>Telefone:</label> <input type="email" placeholder="Telefone" name="Telefone" required><br>
      <label>Email:</label> <input type="email" placeholder="Email" name="email" required><br>
      <label>Documento:</label> <input type="file" name="receita" required><br>
      <input type="submit" value="Enviar">
      </fieldset>
    </form><br>


<h3><a href="https://drive.google.com/file/d/1FPuPvlyEyMt-XFsKOQkb1wWRZUsIyrdO/view?usp=sharing"
   download="https://drive.google.com/file/d/1FPuPvlyEyMt-XFsKOQkb1wWRZUsIyrdO/view?usp=sharing">
  Faça o downlo da Atividade..
</a></h3><br>

<div class="holder"> 
<div id="vi">
<h2><a href="#" title="Download movie">Nome do filme  </a><br>

<h1><iframe width="300" height="200" src="https://www.youtube.com/embed/VbvVC8_Rp54" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="300" height="200" src="https://www.youtube.com/embed/tQvwiOWpj7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="300" height="200" src="https://www.youtube.com/embed/Sh1AWQw_KcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="300" height="200" src="https://www.youtube.com/embed/Mr5q-X_Sc6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="300" height="200" src="https://www.youtube.com/embed/pBsfpU9zWNI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></h1>
</div>
</div>	
<br>
 







<style type="text/css">
.escondida {
    display:none;
}
</style>

<script type="text/javascript">
function abrir() {
    var main = document.getElementById("central");
    var iten = main.getElementsByTagName("input");
    if (iten) {
        for (var i=0;i<iten.length;i++) {
            iten[i].onclick = function() {
                var el = document.getElementById(this.id.substr(7,7));
                if (el.style.display == "block")
                    el.style.display = "none";
                else
                    el.style.display = "block";
            }
        }
    }
}
window.onload=abrir;
</script>

<div id="central">
	<!-- Botao -->
    <h1><input type="button" value="Abrir / fechar calendario " id="receita1">
	<!-- conteudo escondido -->
    <div id="1" class="escondida"> 
		<!-- Aqui fica o seu form -->
					
					<!-- INICIO DO FORMULÁRIO -->
					
					<form id="formulario" method="post" action="enviar.php">
					


          <div class="month">
<div id="us">


  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>calendário<span style="font-size:12px"></span></li>
    <li>Novembro/2022<span style="font-size:8px"></span></li>
    <h4><script>
      date = new Date().toLocaleDateString();
      document.write(date);
      </script></h4>
  </ul><br>
          <ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>


<ul class="days">
  <li></li>
  
  <li>1</li>
  <li><span class="ac">2</span></li>
  <li>3</li>
  <li>4</li>
  <li><span class="ac">5</span></li>
  <li><span class="ac">6</span></li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10 <br> reunião</span></li>
  <li>11</li>
  <li><span class="ac">12</span></li>
  <li><span class="ac">13</span></li>
  <li>14</li>
  <li><span class="ac">15</span></li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li><span class="ac">19</span></li>
  <li><span class="ac">20</span></li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li><span class="ac">26</span></li>
  <li><span class="ac">27</span></li>
  <li>28</li>
  <li>29</li>
  <li><span class="active">30 <br> Festa</span></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul> 
</div>
</div>

</div><br><br><br>


						
	
	
	</div>

</div>


</body>
</html>
<?php 

}?>	
<br><br><br><br><br><br>