<?php
    require "../Banco/ConexaoB.php";

    $IdCliente = $_POST['Id'];
    $Nome = $_POST['nome'];
    $Sobrenome = $_POST['sobrenome'];
    $Telefone = $_POST['telefone'];
    $Email = $_POST['email'];
    $Senha = $_POST['senha'];
    $SenhaRepeticao = $_POST['SenhaRepeticao'];

    if($Senha == $SenhaRepeticao){
    $BancoSql = "UPDATE Cliente SET Nome ='$Nome', Sobrenome ='$Sobrenome',
    Telefone ='$Telefone', Email ='$Email', Senha = $Senha WHERE IdCliente = '$IdCliente'";
       $Update = mysqli_query($ConexaoBanco, $BancoSql);
           if($Update == true){
               echo "Atualização do Cliente feito com sucesso!";
           }else{
               die("Atualização falhou!".mysqli_error($ConexaoBanco));
           }
        }
?>