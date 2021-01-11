<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Administrador</title>

    </head>
<body>
    <?php

    require_once "ConexaoB.php"; 

    $Idproduto = $_GET['Idproduto'];
    $Comando = "DELETE FROM Produto WHERE Idproduto = $Idproduto";
    $Result = mysqli_query($ConexaoBanco, $Comando);
    if ($Result){
        echo "Produto excluido com sucesso!";
    }else{
        echo "Erro ao excluir Produto";
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

