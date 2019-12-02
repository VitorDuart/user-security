<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="box">
        <div class="box2">
        <img class="image" src="images/google.png" width="74" height="24">
            <h3 class="h3">Login</h3>
            <form class="box1" action="./controllers/login.php" method="POST">
                <input class="input" placeholder="Username" type="text" name="username">
                <input class="input" placeholder="Password" type="text" name="password">
                <a href="">Esqueceu a senha?</a>
                
                <p>Não está no seu computador? Use o modo visitante para 
                fazer login com privacidade. Saiba mais</p>
                <div class="box3">
                    <a id="link" href="./pages/cadastropage.php">Criar conta</a>
                    <input id="button" type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </div>
</body>
</html> 

