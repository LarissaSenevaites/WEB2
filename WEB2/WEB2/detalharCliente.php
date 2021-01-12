<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Makeup Store</title>
        
       <div id="linha1">
            <div><h2><a href="cadastrodeusuario.html">Cadastro de usuario</a></h2></div>
            <div><h2><a href="cadastrodeproduto.html">Cadastro de produto</a></h2></div>
            <div><h2> <a href="paginadelogin.html">Cadastro de login</a></h2></div>
            <div><h2> <a href="mapadosite.html">Sobre a empresa</a></h2></div>
         
        </div> 
    
    </head>
    <body>

	<h1>Cliente</h1>
    <table border = 1>
            <tr>
                <th><h6>ID</h6></th>
                <th><h6>NOME</h6></th>
                <th><h6>SOBRENOME</h6></th>
                <th><h6>TELEFONE</h6></th>
                <th><h6>EMAIL</h6></th>
                <th><h6>SENHA</h6></th>
                <th><h6>ENDEREÇO</h6></th>
            </tr>
    <?php    
        require "ConexaoB.php";
        $IdCliente = $_GET['IdCliente'];
        $Comando = "SELECT * FROM Cliente WHERE IdCliente = $IdCliente";
        $Result = mysqli_query($ConexaoBanco, $Comando);
        $Dados = array(); 
        while ($Dados = mysqli_fetch_assoc($Result)){
    ?>
     
                <tr>
                    <td><h6><?=$Dados['IdCliente']?></h6></td>
                    <td><h6><?=$Dados['Nome']?></h6></td>
                    <td><h6><?=$Dados['Sobrenome']?></h6></td>
                    <td><h6><?=$Dados['Telefone']?></h6></td>
                    <td><h6><?=$Dados['Email']?></h6></td>
                    <td><h6><?=$Dados['Senha']?></td>
                    <td><h6><a href="enderecoCliente.php?Id= <?=$Dados['IdCliente']?>">Endereço</a></h6></td>
                </tr>
                <?php }?>
        </table>
    <br>
	<!--Links de navegação rapida-->
	<a href = "paginaAdm.php">Voltar</a>
     <div  class="rodape" >

           <div><h2><a id="adm" href="paginaAdm.php">Administrador</a></h2></div>
           <div class="a4"><p>AJUSTE E SUPORTE</p></div>
            <div class="a4"> <p>Politica de privacidade</p></div>
              <div class="a4"> <p>Politica de pagamento</p></div>
             <div class="a4"> <p>Troca e devoluçao</p></div>
          
        
            
           </div>
    </body>
</html>