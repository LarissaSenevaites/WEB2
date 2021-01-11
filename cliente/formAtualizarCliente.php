<!DOCTYPE html>
    <head>
    
        <meta charset="UTF-8">
        <title>Makeup Store</title>
    
   
    </head>
    <body>
   <h2>Makeup Store</h2>
      <div id="linha1">
        <div><h2><a href="cadastrodeusuario.php">Cadastro de usuario</a></h2></div>
        <div><h2><a href="cadastrodeproduto.php">Cadastro de produto</a></h2></div>
        <div><h2> <a href="paginadelogin.html">Cadastro de login</a></h2></div>
        <div><h2> <a href="mapadosite.html">Sobre a empresa</a></h2></div>
        
    </div>

        <?php
            $IdCliente= $_GET['IdCliente'];
        require "../Banco/ConexaoB.php";
        $Comando = "SELECT * FROM Cliente WHERE IdCliente = $IdCliente";
        $Result = mysqli_query($ConexaoB, $Comando);
        $Dados = array();
        $Dados = mysqli_fetch_assoc($Result);
?>
		<h1>Cadastre-se</h1>
			<div id="log">
            <form  action="atualizarCliente.php" method="POST"><br>
            <input type="hidden" value="<?=$IdCliente?>" name="Id">
            <input type="text" placeholder="Nome" name="Nome" value="<?=$Dados['Nome']?>"><br>
            <input type="text" placeholder="Sobrenome" name="Sobrenome" value="<?=$Dados['Sobrenome']?>"><br>
            <input type="number" placeholder="Telefone" name="Telefone" value="<?=$Dados['Telefone']?>"><br>
            <input type="email" placeholder="Email" name="Email" value="<?=$Dados['Email']?>"><br>
            <input type="password" placeholder="Senha" name="Senha"><br>
            <input type="password" placeholder="Confirme a Senha" name="SenhaRepeticao"><br>
			</div>
          <button type="submit">Cadastrar</button>
          </form>
        
        <br>
        
         <div  class="rodape" >
	 <div><h2><a id="adm" href="paginaAdm.php">Administrador</a></h2></div>
        <div class="a4"><p>AJUSTE E SUPORTE</p></div>
        <div class="a4"> <p>Politica de privacidade</p></div>
        <div class="a4"> <p>Politica de pagamento</p></div>
        <div class="a4"> <p>Troca e devoluçao</p></div>
       
    </div>
    </body>

