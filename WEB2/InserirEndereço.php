<?php
    require "../Banco/ConexaoB.php";
    
    $IdCliente = $_POST['IdCliente'];
    $Estado = $_POST['Estado'];
    $Cidade = $_POST['Cidade'];
    $Bairro = $_POST['Bairro'];
    $Rua = $_POST['Rua'];
    $Numero = $_POST['Numero'];

        $BancoSql = "INSERT INTO Endereco (IdCliente, Estado, Cidade, Bairro, Rua, Numero)
        VALUES ('$IdCliente','$Estado','$Cidade','$Bairro','$Rua','$Numero')";
        $Inserir = mysqli_query($ConexaoBanco, $BancoSql);
            if($Inserir == true){
                echo "Registro do Endereco feito com sucesso!";
            }else{
                die("Registro falhou!".mysqli_error($ConexaoBanco));
            }

?>
