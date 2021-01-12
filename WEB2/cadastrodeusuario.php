<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>MAKESL.com</title>
         <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
       
        <h2>Makeup Store</h2><br>
   <div id="linha1">
            <div><h2><a href="cadastrodeusuario.php">Cadastro de usuario</a></h2></div>
           
            <div><h2><a href="cadastrodeproduto.php">Cadastro de produto</a></h2></div>
          
            <div><h2> <a href="paginadelogin.html">Cadastro de login</a></h2></div>
            <div><h2> <a href="mapadosite.html">Sobre a empresa</a></h2></div>
         
        </div> 
        
         <h1>CADASTRO DO USUARIO</h1>
         <h2>Ainda não é cadastrado no site?</h2>
         <p>Faça agora mesmo o seu cadastro, é simples e rápido!</p>
         <div id="logi">
          <form  action="InserirCliente.php" method="POST"><br>
          <input type="text" placeholder="Nome" name="Nome"><br>
          <input type="text" placeholder="Sobrenome" name="Sobrenome"><br>
          <input type="number" placeholder="Telefone" name="Telefone"><br>
          <input type="email" placeholder="Email" name="Email"><br>
          <input type="password" placeholder="Senha" name="Senha"><br>
          <input type="password" placeholder="Confirme a Senha" name="SenhaRepeticao"><br>
    </div>
    <br>
    <button type="submit">Cadastre-se</button>
    </form><br>
         <a href="index.php">Voltar</a>
        
         <div  class="rodape" >

           <div><h2><a id="adm" href="paginaAdm.php">Administrador</a></h2></div>
           <div class="a4"><p>AJUSTE E SUPORTE</p></div>
            <div class="a4"> <p>Politica de privacidade</p></div>
              <div class="a4"> <p>Politica de pagamento</p></div>
             <div class="a4"> <p>Troca e devoluçao</p></div>
          
        
            
           </div>
        </div>
    </body>
</html>
