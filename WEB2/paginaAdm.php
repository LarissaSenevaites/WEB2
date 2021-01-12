<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Administrador - Makeup Store</title>

        <div id="linha1"> 
 
 <div><h2> <a href="cadastrodeusuario.php"> Cadastro de Usuario</a></h2></div> 
 <div><h2> <a href="cadastrodeproduto.php"> Cadastro de Produto</a></h2></div>
 <div><h2> <a href="paginadelogin.html"> Cadastro de Login</a></h2></div>  
 <div><h2> <a href="mapadosite.html"> Sobre a empresa</a></h2></div> 

</div> 
		
	</head>
	<body>
        <br>
			<div>
            <table border=1 >
			<thead>
            <tr>
                <th><h6>Nome</h6></th>
                <th><h6>Preço</h6></th>
                <th><h6>Detalhar</h6></th>
                <th><h6>Update</h6></th>
                <th><h6>Deletar</h6></th>
            </tr>
			</thead>
			
    <?php 

        require_once "ConexaoB.php"; 

        $BancoSql = "SELECT * FROM produto";
        $Li = mysqli_query($ConexaoBanco, $BancoSql);
        $Dados = array(); 

        if(empty($Li)){
            echo "Nenhum Produto Cadastrado";
        }else{
            while ($Dados = mysqli_fetch_assoc($Li)){
    ?>
     
                <tr>
                    <td><?=$Dados['nomeproduto']?></td>
                    <td><?=$Dados['preco']?></td>
                    <td><a href = "DetalharProduto.php?Idproduto= <?=$Dados['idproduto']?>">Detalhar</a></td>
                    <td><a href = "FormularioAlterarProduto.php?Idproduto= <?=$Dados['idproduto']?>">Update</a></td>
                    <td><a href = "DeletarProduto.php?Idproduto= <?=$Dados['idproduto']?>">Deletar</a></td>
                    
                </tr>
                <?php }}?>
        </table>

        <br>

        <table border = 1>
		<thead>
            <tr>
            <th><h6>Nome</h6></th>
                <th><h6>Email</h6></th>
                <th><h6>Detalhar</h6></th>
                <th><h6>Update</h6></th>
                <th><h6>Deletar</h6></th>
            </tr>
		</thead>
		
    <?php

        require_once "ConexaoB.php"; 

        $BancoSql = "SELECT * FROM cliente";
        $Li = mysqli_query($ConexaoBanco, $BancoSql);
        $Dados = array(); 
        if(empty($Li)){
            echo "Nenhum Cliente Cadastrado";
        }else{
            while ($Dados = mysqli_fetch_assoc($Li)){
    ?>
     
                <tr>
                    <td><?=$Dados['Nome']?></td>
                    <td><?=$Dados['Email']?></td>
                    <td><a href = "detalharCliente.php?IdCliente= <?=$Dados['IdCliente']?>">Detalhar</a></td>
                    <td><a href = "formAtualizarCliente.php?IdCliente= <?=$Dados['IdCliente']?>">Update</a></td>
                    <td><a href = "deletarCliente.php?IdCliente= <?=$Dados['IdCliente']?>">Deletar</a></td>
                    
                </tr>
                <?php }}?>
        </table>
<br>
     
	
        <table border = 1>
		<thead>
            <tr>
                <th><h6>ID</h6></th>
                <th><h6>DESCRICAO</h6></th>
                <th><h6>DELETAR</h6></th>
            </tr>
		</thead>
    <?php 

        require_once "ConexaoB.php"; 

        $BancoSql = "SELECT * FROM categoria";
        $Li = mysqli_query($ConexaoBanco, $BancoSql);
        $Dados = array(); 
        if(empty($Li)){
            echo "Nenhum Cliente Cadastrado";
        }else{
            while ($Dados = mysqli_fetch_assoc($Li)){
    ?>
     
                <tr>
                    <td><?=$Dados['idcategoria']?></td>
                    <td><?=$Dados['descricao']?></td>
                    <td><a href = "DeletarCategoria.php?idcategoria= <?=$Dados['idcategoria']?>">Deletar</a></td>
                    
                </tr>
                <?php }}?>
        </table>

    </body>
</html>