<!DOCTYPE html>
<html>
<head>
         <title> Makeup Store </title> 
    </head>
    <body> 

    <div id="linha1"> 
 
     <div><h2> <a href="cadastrodeusuario.php"> Cadastro de Usuario</a></h2></div> 
     <div><h2> <a href="cadastrodeproduto.php"> Cadastro de Produto</a></h2></div>
     <div><h2> <a href="paginadelogin.html"> Cadastro de Login</a></h2></div>  
     <div><h2> <a href="mapadosite.html"> Sobre a empresa</a></h2></div> 

    </div> 

    <body>  

    <?php
        
        require_once "ConexaoB.php"; 

        $BancoSql = "SELECT * FROM Categoria";
        $Li = mysqli_query($ConexaoBanco, $BancoSql);
        $Dados = array();
    ?>           
        <br><br><br><br>
        <h1>Cadastro de produto</h1>
        
        <div id="log">
            <form action="InserirProd.php" method="POST">
                <input type="text" placeholder="Nome do Produto..." name="Nomeproduto"><br>
                <!--<input type="text" placeholder="Descricao do Produto..." name="Descricao"><br>-->
                <textarea name="Descricaoproduto"></textarea><br>
		</div>
                <select name="Categoria"><br>
                <option>Escolha Categoria</option>
                <?php
                    while($Dados = mysqli_fetch_assoc($Lista)){    
                ?>      
                    <option value="<?=$Dados['Idcategoria']?>"><?=$Dados['Descricaocategoria']?></option>
                <?php 
                    }
                ?>
                </select><br>
                <div id="log"> <input type="number" placeholder="Preço do Produto..." name="Preco"><br></div>
                <button type="submit"> Cadastrar </button>
            </form>
			
			<br><br><br><br><br><br><br><br>
        
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