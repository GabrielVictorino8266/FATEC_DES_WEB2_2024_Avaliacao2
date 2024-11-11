<?php
require_once __DIR__ . "/classes/Login.php";
require_once __DIR__ . "/classes/Cadastro.php";
$validador = new Login();
$validador->verificar_logado();

$listagem = new Cadastro();
$vagas = $listagem->getVagas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="text-center">
    <div class="cover-container d-flex w-75 h-100 p-3 mx-auto flex-column">
        <h1>Listar vaga</h1>
        <div>
            <a href="./home.php">Voltar</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th scope="col">Nome Empresa</th>
                <th scope="col">Numero Whatsapp</th>
                <th scope="col">Email Contato</th>
                <th scope="col">Descritivo Vaga</th>
                <th scope="col">Curso</th>
            </tr>
            <?php foreach($vagas as $vaga){ ?>
                <tr>
                    <td><?=$vaga["id"]?></td>
                    <td><?=$vaga["nome_empresa"]?></td>
                    <td><?=$vaga["numero_whatsapp"]?></td>
                    <td><?=$vaga["email_contato"]?></td>
                    <td><?=$vaga["descritivo_vaga"]?></td>
                    <td><?=$vaga["curso"]?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>