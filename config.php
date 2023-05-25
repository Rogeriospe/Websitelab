<?php
// Configurações do banco de dados
$host = "localhost";
$user = "root";
$pass = '';
$db   = "pibd";


// Conexão com o banco de dados
$conexao = mysqli_connect($host, $user, $pass, $db);

// Verificação de erros na conexão
if (!$conexao) 
    
?>



