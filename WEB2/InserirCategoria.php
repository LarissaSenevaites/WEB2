<?php
    require_once "ConexaoB.php"; 

    $categoria = $_POST['categoria'];

    $BancoSql = "INSERT INTO categoria (idcategoria, descricaocategoria)
    VALUES (NULL,'$categoria')";
    $Inserir = mysqli_query($ConexaoBanco, $BancoSql);
    
        if($Inserir == true){
            echo "Registro da categoria feito com sucesso!";
        }else{
            die("Registro falhou!".mysqli_error($ConexaoBanco));
        }
?>