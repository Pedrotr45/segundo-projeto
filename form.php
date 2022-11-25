<?php

  if(isset($_POST['email'])) {

   // print_r("nome:".$_POST['nome']);
   // print_r("email:".$_POST['email']);
   // print_r("senha:".$_POST['senha']);

    include_once('conexao.php');

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao,"INSERT INTO cliente(nome,email,senha)
     VALUES('$nome','$email','$senha')");

  }



?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Code Max</title>
</head>
<body>
    <!--cabeçalho-->
    <header class="cabeçalho">
        <div class="logo">Code Max</div>
       
     <button class="btn">sign in</button>
            
    

    </header>
    <!--descriçâo-->
    <main class="main-info">
         <div class="main-descrition">
             <h2>Contrate nos</h2>
              <p>Lorem ipsum dolor sit amet, <br>
               consectetur adipisicing elit.<br>
               Ratione esse, est iusto consequuntur<br>
               nisi libero ducimus voluptates distinctio.<br>
               Earum, fugiat.</p>
               <div class="midia-social">
                 <i class="bi bi-facebook"></i>
                 <i class="bi bi-instagram"></i>
                 <i class="bi bi-twitter"></i>
                 <i class="bi bi-linkedin"></i>
              </div>
           </div>
         <div class="form-login">
             <h2>Cadastro Login</h2>

              <form action="form.php" method="POST">
                 <div class="login">
                  <input type="text" name="nome" placeholder="Seu nome..."/>
                    <br><br>
                   <input type="email" name="email" placeholder="Seu email..."/>
                    <br><br>
                   <input type="password" name="senha" placeholder="Sua senha..."/>
                    <br><br>
                   <input type="submit" name="açao" value="Enviar"/>
                  </div>
              </form>
          </div>

        

    </main>
</body>
</html>