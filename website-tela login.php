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

    <div class="main-login">

        <div class="left-login">
            <h1>Faça login<br> Para consultar os reagentes.</h1>
            <img src="laboratorio.svg" class= login-image alt="laboratorio">
            <form action="Testlogin.php" method="POST">
       </div>

        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>

                <div class="textfield">
                    <label for=">Usuário">Usuário</label>
                    <input type="text" name="usuario" placeholder="Nome">
                </div>

                <div class="textfield">
                    <label for=">senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div> 
                <input class="btn-login" type="submit" name="submit" value="acessar">
                
                </form> 
             </div>
             
        </div>
    </div>
</body>
</html>