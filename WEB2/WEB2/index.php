<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Makeup Store</title>
    </head>
    <body>
    <div id="linha1">
        <div><h2><a href="cadastrodeusuario.php">Cadastro de usuario</a></h2></div>
        <div><h2><a href="cadastrodeproduto.php">Cadastro de produto</a></h2></div>
        <div><h2> <a href="paginadelogin.html">Cadastro de login</a></h2></div>
        <div><h2> <a href="mapadosite.html">Sobre a empresa</a></h2></div>
        
    </div>
		
        <div class="linha">
        <?php 
        require "ConexaoB.php";
        $BancoSql = "SELECT * FROM produto";
        $Lista = mysqli_query($ConexaoBanco, $BancoSql);
        $Dados = array(); 
        if(empty($Lista)){
            echo "Nenhum Produto Cadastrado";
        }else{
            while ($Dados = mysqli_fetch_assoc($Lista)){
    ?>
        
            <div class="produto">
                
                
            </div>

    <?php
            }
        }
    ?>

<div  class="rodape" >

<div><h2><a id="adm" href="paginaAdm.php">Administrador</a></h2></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="a4"><p>AJUSTE E SUPORTE</p></div>
<div class="a4"> <p>Politica de privacidade</p></div>
<div class="a4"> <p>Politica de pagamento</p></div>
<div class="a4"> <p>Troca e devoluçao</p></div>

</div>
    </div>
    </body>
</html>