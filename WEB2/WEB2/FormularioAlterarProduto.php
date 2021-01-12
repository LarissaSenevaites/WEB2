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

<?php
    $idproduto= $_GET['idproduto'];
    //ConexãoBanco
    require_once "ConexaoB.php"; 
    $Comando = "SELECT * FROM produto WHERE idproduto = $idproduto";
    $Result = mysqli_query($ConexaoBanco, $Comando);
    $Dados = array();
    $Dados = mysqli_fetch_assoc($Result);
?>


        <br><br><br><br>
        <h1>Cadastro de produto</h1>
        
        <div>
            <form action="AlterarProduto.php" method="POST">
                <input type="hidden" name="idproduto" value="<?=$idproduto?>">
                <div id="log"><input type="text" placeholder="Nome do Produto" name="nomeproduto" value="<?=Dados['Nomeproduto']?>"><br>
                <textarea name="descricao" value="<?=Dados['descricao']?>"></textarea><br></div>
                <select name="Categoria"><br>
                <option>Escolha uma Categoria</option>
                <?php
                    while($Dados = mysqli_fetch_assoc($Lista)){    
                ?>      
                    <option value="<?=$Dados['idcategoria']?>"><?=$Dados['descricaocategoria']?></option>
                <?php 
                    }
                ?>
                </select><br>
                <div id="log"><input type="number" placeholder="Preço do Produto" name="Preco" value="<?=$Dados['PrecoProduto']?>"><br></div>
                <button type="submit"> Atualizar </button>
            </form>
        </div>
      
        <div  class="rodape" >

<div><h2><a id="adm" href="paginaAdm.php">Administrador</a></h2></div>
<div class="a4"><p>AJUSTE E SUPORTE</p></div>
<div class="a4"> <p>Politica de privacidade</p></div>
<div class="a4"> <p>Politica de pagamento</p></div>
<div class="a4"> <p>Troca e devoluçao</p></div>

</div>
    </div> 
</html>