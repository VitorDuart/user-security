<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/style_cadastro.css">
</head>
<body>
    <div class="box">
        <div class=box2>
            <img class="image" src="../images/google.png" width="74" height="24">
            <h3 class="h3">Crie a sua conta</h3>   
            <form class="box1" action="../controllers/cadastro.php" method="POST">
                <input class="input" placeholder="Name" type="text" name="username">
                <input class="input" placeholder="Password" name="password">
                
                <input id="button" type="submit" value="Cadastrar">
            </form>

            <a class="a"href="../index.php">Faça login</a>
            <p>
                *Esteja ciente dos termos de uso. 
                <a href="">Saiba mais.</a>
            </p>
        </div>
        
    </div>
</body>

