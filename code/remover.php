<?php
require_once __DIR__ . "/classes/Cadastro.php";
require_once __DIR__ . "/classes/Login.php";
$validador = new Login();
$validador->verificar_logado();

if(!isset($_GET['delete'])){
    $_GET['delete'] = '';
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $remover = new Cadastro();
    $remover->deletarVaga($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover vaga</title>
</head>
<body>
    <h1>Remover vaga</h1>
    <div>
        <a href="./home.php">Voltar</a>
    </div>
    <form action="" method="POST">
        <label for="id">ID da vaga:</label>
        <input type="text" id="id" name="id" placeholder="Insira o ID da vaga"required><br><br>
        <input type="submit" value="Remover">
        <?php
        if(isset($_GET['delete']) && $_GET['delete'] != ''){
            if($_GET['delete'] == "success") {
                echo "Vaga removida com sucesso!";
            }else{
                echo "Vaga não foi removida!";
            }
        }
        ?>
    </form>
</body>
</html>