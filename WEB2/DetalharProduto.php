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
         <br><br><br><br>

    <table border = 1>
            <tr>
                <th><h6>ID</h6></th>
                <th><h6>Nome</h6></th>
                <th><h6>Preço</h6></th>
                <th><h6>Descrição</h6></th>
                <th><h6>Categoria</h6></th>
            </tr>
    <?php

        require_once "ConexaoB.php"; 

        $idproduto = $_GET['idproduto'];
        $Comando = "SELECT * FROM Produto WHERE idproduto = $idproduto";
        $Result = mysqli_query($ConexaoBanco, $Comando);
        $Dados = array(); 
        while ($Dados = mysqli_fetch_assoc($Result)){
    ?>
     
                <tr>
                    <td><h6><?=$Dados['idproduto']?></h6></td>
                    <td><h6><?=$Dados['Nomeproduto']?></h6></td>
                    <td><h6><?=$Dados['Precoproduto']?></h6></td>
                    <td><h6><?=$Dados['Descricaoproduto']?></h6></td>
                    <td><h6><?=$Dados['Idcategoria']?></h6></td>
                </tr>
                <?php }?>
        </table>
        <!--Links de navegação rapida-->
        


    <br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br>
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
