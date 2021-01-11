<?php
    $ConexaoBanco = mysqli_connect("localhost", "root", "", "produto");
    if(!$ConexaoBanco){
        echo "Deu erro ao se conectar ao banco";
    }
?>