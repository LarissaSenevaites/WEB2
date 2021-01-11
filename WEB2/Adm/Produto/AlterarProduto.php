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

    <?php

    require_once "ConexaoB.php"; 

    $Idproduto = $_POST["Idproduto"];
    $Nomeproduto = $_POST["Nomeproduto"];    
    $Descricaoproduto = $_POST["Descricaoproduto"];
    $Categoria = $_POST["Categoria"];
    $Preco = $_POST["Preco"];


    $BancoSql = "UPDATE Produto SET Nomeproduto ='$Nomeproduto', Descricaoproduto ='$Descricaoproduto',
     Idcategoria ='$Categoria', Precoproduto ='$Preco' WHERE Idproduto = '$Idproduto'";
        $Update = mysqli_query($Conexao, $BancoSql);
            if($Update == true){
                echo "Produto atualizado com secesso!";
            }else{
                die("Atualização falhou!".mysqli_error($Conexao));
            }
?>
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