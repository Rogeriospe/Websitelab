<?php
    session_start();

    print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))

        include_once("config.php");
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];


    $sql = "SELECT * FROM user WHERE usuario = '$usuario' and senha = '$senha'";

    $result = $conexao->query($sql);
    

    if(mysqli_num_rows($result) <1)
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location: sistema.php');
    }
    else
    {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('location: sistema.php');
    }


?>

