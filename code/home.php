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
</head>
<body>
    <center>
        <h2>Vagas de Estágio</h2>
    </center>
    
    <br>
    <button onclick="window.location.href='cadastrar.php'">Cadastrar vaga</button>
    <button onclick="window.location.href='remover.php'">Remover vaga</button>
    <button onclick="window.location.href='listar.php'">Visualizar vagas</button>
    <a href="login.php">Logout</a>
</body>
</html>