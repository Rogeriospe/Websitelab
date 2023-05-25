<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background: #201b2c;
            text-align: center;
            color: white;
        }
        .box{
            width: 100%;
            padding: 10px 0px;
            margin: 0px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: #2b134b;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #00ff8052;
            box-sizing: border-box;
            font-size: 1vw;
        }
        a{
            text-decoration: none;
            color:white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;

        }

        a:hover{
            background-color: dodgerblue;
          
        }

        .home-image{
             width: 25vw;
             
             
        }
        .h1
            {font-size: 1vw;                
        
        }
        .h2
            {font-size: 1vw;                
        
        }
        .h3{
            font-size: 1vw;
        }
        .acesso{
            width: 100%;
            padding: 40px 0px;
            margin: 0px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: #2b134b;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #00ff8052;
            box-sizing: border-box;
            font-size: 1vw;
        }
    </style>
</head>
<body>
    <h1>PROJETO INTEGRADOR</h1>
    <h2>2023</h2>
    <h3>CONTROLE DO LABORATORIO DE QUÍMICA</h3>
    <img src="laboratorio-home.svg" class= home-image alt="laboratorio-home">

    <div class="box">
        <a href="Website-tela login.php">Login</a>
        <a href="Website-tela produto.php">Cadastrar produto</a> 
    </div>
    <div class="acesso">
        <a href="Website-tela cadastro.php">Primeiro acesso</a>
   </div>
    
</body>
</html>