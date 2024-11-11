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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <div class="form-signin w-35 m-auto">
        <h1>Remover vaga</h1>
        <div>
            <a href="./home.php">Voltar</a>
        </div>
        <form action="" method="POST" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="id" name="id" placeholder="Insira o ID da vaga"required><br><br>
                <label for="id" >ID da vaga:</label>
            </div>

            <input class="btn btn-primary w-100 py-2" type="submit" value="Remover">
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
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>