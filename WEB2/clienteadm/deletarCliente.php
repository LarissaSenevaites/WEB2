<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MAKESL.com</title>
    </head>
<body>
    <?php
    require "../../Banco/ConexaoB.php";
    $IdCliente = $_GET['IdCliente'];
    $Comando = "DELETE FROM Cliente WHERE IdCliente = $IdCliente";
    $Result = mysqli_query($ConexaoBanco, $Comando);
    if ($Result){
        echo "Cliente excluido com sucesso!";
    }else{
        echo "Erro ao excluir Cliente";
    }
?>
    <br>
    <a href="index.php">Voltar</a>
        
         <div  class="rodape" >

           <div><h2><a id="adm" href="paginaAdm.php">Administrador</a></h2></div>
           <div class="a4"><p>AJUSTE E SUPORTE</p></div>
            <div class="a4"> <p>Politica de privacidade</p></div>
              <div class="a4"> <p>Politica de pagamento</p></div>
             <div class="a4"> <p>Troca e devoluçao</p></div>
          
        
            
           </div>
</body>
</html>

