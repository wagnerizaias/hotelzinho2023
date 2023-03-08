   


</body>
<?php
session_start();
?>
 
<!DOCTYPE html>
<html>


<head>

<body>

<nav id="menu-h">
    <ul>
        <li>
            <a href="hotelzinho.html">
                Home
            </a>
        </li>
        <li><a href="loginprofessor.html">Professor</a></li>
        <li><a href="https://api.whatsapp.com/send?phone=5519987075090&app">whatsapp</a></li>

        <li><a href="mailto:wagnerizaias1@gmail.com?subject=Assunto" >Clique email</a></li>

    </ul>
</nav>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login </title>
    <link rel="stylesheet" href="css/teste.css" />

</head>
<body>
 <div id="ad"><br>
 <h2> Login ADM</h2>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box"><br>
                        <form action="login.php" method="POST">
                         <div class="field">
                            <h3>Nome </h3>
                                <div class="control">
                                <h1><input name="email" name="text" class="input is-large" placeholder="Seu usuário" autofocus=""required>
                                </div>
                            </div></h1>
 
                            <h2><div class="field">
                                <div class="control">
                                <h3>Senha </h3>   
                                <h1><input name="senha" class="input is-large" type="password" placeholder="Sua senha"required></h1>
                                </div></h2>
                            </div><br>
                            <h1><button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button></h1>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
                </div><br><br><br><br><br><br><br><br><br><br><br>
    <footer id="rodape"> 
<h4 style="color: blue;">Feito por:BIT...</h4>
</footer>
  

</body>
 
</html>