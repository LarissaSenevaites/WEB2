<!DOCTYPE html>
    <head>
       
        <meta charset="UTF-8">
        <title>Makeup Store</title>
    <br><br><br>
   
    </head>
    <body>
    
    <h2>Makeup Store</h2><br>
    <div id="linha1">
        <div><h2><a href="cadastrodeusuario.php">Cadastro de usuario</a></h2></div>
        <div><h2><a href="cadastrodeproduto.php">Cadastro de produto</a></h2></div>
        <div><h2> <a href="paginadelogin.html">Cadastro de login</a></h2></div>
        <div><h2> <a href="mapadosite.html">Sobre a empresa</a></h2></div>
        
    </div>

        <?php
            $IdCliente = $_GET['Id'];
        ?>

        <br>
		<h1>Cadastre-se</h1>
        <div id="log">
            <form  action="InserirEndereco.php" method="POST"><br>
            <input type="hidden" name="IdCliente" value="<?=$IdCliente?>"?>
            <input type="text" placeholder="Estado" name="Estado"><br>
            <input type="text" placeholder="Cidade" name="Cidade"><br>
            <input type="text" placeholder="Bairro" name="Bairro"><br>
            <input type="text" placeholder="Rua" name="Rua"><br>
            <input type="number" placeholder="Numero" name="Numero"><br>
			</div><br>
          <button type="submit">Cadastrar</button>
          </form>
        
        
          <div  class="rodape" >
          <div><h2><a id="adm" href="paginaAdm.php">Administrador</a></h2></div>
        <div class="a4"><p>AJUSTE E SUPORTE</p></div>
        <div class="a4"> <p>Politica de privacidade</p></div>
        <div class="a4"> <p>Politica de pagamento</p></div>
        <div class="a4"> <p>Troca e devoluçao</p></div>
  

        
    </div>
    </body>

