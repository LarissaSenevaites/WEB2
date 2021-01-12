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

    $idproduto = $_POST["idproduto"];
    $nomeproduto = $_POST["nomeproduto"];    
    $descricaoproduto = $_POST["descricaoproduto"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];


    $BancoSql = "UPDATE produto SET nomeproduto ='$nomeproduto', descricaoproduto ='$descricaoproduto',
     idcategoria ='$categoria', preco ='$preco' WHERE idproduto = '$idproduto'";
        $Update = mysqli_query($ConexaoBanco, $BancoSql);
            if($Update == true){
                echo "Produto atualizado com secesso!";
            }else{
                die("Atualização falhou!".mysqli_error($ConexaoBanco));
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