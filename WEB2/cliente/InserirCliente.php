<?php
    require "../Banco/ConexaoB.php";

    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Telefone = $_POST['Telefone'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $SenhaRepeticao = $_POST['SenhaRepeticao'];

    if($Senha == $SenhaRepeticao){
        $BancoSql = "INSERT INTO Cliente (IdCliente, Nome, Sobrenome, Telefone, Email, Senha)
        VALUES (NULL,'$Nome','$Sobrenome','$Telefone','$Email','$Senha')";
        $Inserir = mysqli_query($ConexaoBanco, $BancoSql);
            if($Inserir == true){
                echo "Registro do Cliente feito com sucesso!";
            }else{
                die("Registro falhou!".mysqli_error($ConexaoBanco));
            }
    }
?>