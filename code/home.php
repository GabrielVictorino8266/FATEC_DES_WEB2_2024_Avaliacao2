<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<header class="masthead mb-auto">
    <div class="inner">
    <nav class="nav nav-masthead justify-content-center">
        <button class="nav-link" onclick="window.location.href='cadastrar.php'">Cadastrar vaga</button>
        <button class="nav-link" onclick="window.location.href='remover.php'">Remover vaga</button>
        <button class="nav-link" onclick="window.location.href='listar.php'">Visualizar vagas</button>
    </nav>
    <a href="login.php" class="masthead-brand">Logout</a>
    </div>

</header>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div role="main" class="inner cover">
            <h2 class="cover-heading">Vagas de Estágio</h2>
        </div>

    </div>
        



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>