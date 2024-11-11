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
    <title>Cadastrar vaga</title>
</head>
<body>
    <h1>Listar vaga</h1>
    <div>
        <a href="./home.php">Voltar</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome Empresa</th>
            <th>Numero Whatsapp</th>
            <th>Email Contato</th>
            <th>Descritivo Vaga</th>
            <th>Curso</th>
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
</body>
</html>