<!DOCTYPE html>
<html>
    <head>
        <title>Entrar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="login">
            <form class="formlogin" method="POST" action="login.php">
                <h1><img height="170"  src="img/logoempresa.png"></h1>
                <h2 class="central">Insira Seus Dados</h2>
                <label>Insira seu login:</label><input placeholder="Login" class="form-control" id="exampleFormControlInput1" type="text" name="login" id="login"><br>
                <label>Insira sua senha:</label><input placeholder="Senha" class="form-control" id="exampleFormControlInput1" type="password" name="senha" id="senha"><br>
                <button type="button" class="btn btn-secondary">Entrar</button>
            </form>
        </div>
    </body>
</html>