<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="">
    <div class="d-flex align-items-center py-4 bg-body-tertiary">
    <div class="form-signin w-25 m-auto"> <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Logo_fatec_araras.png" alt=""><h2 class="textlogin">Login</h2>
    <form action="login.php" method="POST">
        <label for="login">Login:</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Insira seu login"required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha"required><br><br>
        <input class="btn btn-primary w-100 py-2" type="submit" value="Entrar">
    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>