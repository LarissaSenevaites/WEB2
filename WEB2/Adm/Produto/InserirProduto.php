<!DOCTYPE html>
<html>
    <head>
         
        <title>Makeup Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>  
    <?php
    
    require_once "ConexaoB.php"; 

    $Idproduto = $_POST["Idproduto"];
    $Nomeproduto = $_POST["Nomeproduto"];    
    $Descricaoproduto = $_POST["Descricaoproduto"];
    $Categoria = $_POST["Categoria"];
    $Preco = $_POST["Preco"];

    $BancoSql = "INSERT INTO Produto (Idproduto,Idcategoria, Nomeproduto,Descricaoproduto,Precoproduto)
    VALUES (NULL,'$Idcategoria','$Nomeproduto','$Descricao','$Preco')";
    $Inserir = mysqli_query($ConexaoBanco, $BancoSql);
        if($Inserir == true){
            echo "Registro feito com secesso!";
        }else{
            die("Registro falhou!".mysqli_error($Conexao_Banco));
        }
?>
<br>

   
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

