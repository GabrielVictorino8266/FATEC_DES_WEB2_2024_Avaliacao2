<?php
require_once __DIR__ . "/classes/Login.php";
require_once __DIR__ . "/classes/Cadastro.php";
$validador = new Login();
$validador->verificar_logado();

if(!isset($_GET['register'])){
    $_GET['register'] = '';
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_empresa = $_POST["nome_empresa"];
    $descritivo_vaga = $_POST["descritivo_vaga"];
    $numero_whatsapp = $_POST["numero_whatsapp"];
    $email_contato = $_POST["email_contato"];
    $curso = $_POST["curso"];

    if(isset($nome_empresa,$descritivo_vaga, $numero_whatsapp, $curso, $email_contato)){
        $cadastrar = new Cadastro();
        $cadastrar->cadastrarVaga($nome_empresa,$numero_whatsapp, $email_contato, $descritivo_vaga, $curso);
        echo "Cadastro realizado com !";
    }else{
        echo "Content invalid. There are undefined variables.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <div class="form-signin w-50 m-auto">
        <h1>Cadastrar vaga</h1>
        <div>
            <a href="./home.php">Voltar</a>
        </div>
        <form action="" method="post"class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="nome_empresa" id="nome_empresa" required>
                <label for="nome_empresa">Nome da Empresa:</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="numero_whatsapp" id="numero_whatsapp" required>
                <label for="numero_whatsapp">Número Whatsapp</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="email" name="email_contato" id="email_contato" required>
                <label for="email_contato">Email para contato:</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="descritivo_vaga" id="descritivo_vaga" required>
                <label for="descritivo_vaga">Descrição da vaga.</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="number" name="curso" id="curso" min="1" max="2" required>
                <label for="curso">Curso:</label>
            </div>
            <div class="row">
                <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
            </div>
            <div class="row">
                <button class="btn btn-secondary w-100 py-2" type="reset">Clear</button>
            </div>
            <?php
            if(isset($_GET['register']) && $_GET['register'] != ''){
                if($_GET['register'] == 'success'){
                    echo "Cadastro realizado com sucesso!";
                }else if($_GET['register'] == 'error'){
                    echo "Cadastro falhou!";
                }
            }
            ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>