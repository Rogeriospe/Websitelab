<?php
    error_reporting(0);
    
    include_once("config.php");
    
    $nome = $_POST["nome"];
    $produto = $_POST["produto"];
    $data = $_POST["data_produto"];
    

    $sql = "INSERT INTO controle(nome, produto, data_produto) 
        VALUES ('$nome', '$produto', '$data')";
        

         if (mysqli_query($conexao, $sql))
         {
            echo "Cadastro realizado com sucesso!";
        } 
        
        else {
            echo "Erro ao cadastrar: " . mysqli_connect_error();
        }
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <div class="form">
    <form action="website-tela produto.php" method="POST">

    </div>
    <div class="main-login">
        
        <div class="left-login">
            <h1><br> Cadastre o Reagente no Banco de Dados.</h1>
            <img src="laboratorio-cadastro.svg" class= login-image alt="laboratorio">
       </div>

        <div class="right-login">
            <div class="card-login">
                <h1>CADASTRE O PRODUTO</h1>

                <div class="textfield">
                    <label for=">Usuário">Técnico Responsavel</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                </div>

                <div class="textfield">
                    <label for=">Produto">Reagentes químicos</label>
                    <input type="text" name="produto" id="produto" placeholder="Digite o produto">
                </div> 

                <div class="textfield">
                    <label for=">date">Data do produto</label>
                    <input type="date" name="data_produto" id="data_produto" placeholder="Validade">
                </div> 

                
                <button class="btn-login">Confirma</button>       
             </div>
             
        </div>
    </div>
</body>
</html>