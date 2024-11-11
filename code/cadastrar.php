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
</head>
<body>
    <h1>Cadastrar vaga</h1>
    <div>
        <a href="./home.php">Voltar</a>
    </div>
    <form action="" method="post">
        <div>
            <label for="nome_empresa">Nome da Empresa:</label>
            <input type="text" name="nome_empresa" id="nome_empresa" required>
        </div>
        <div>
            <label for="numero_whatsapp">Número Whatsapp</label>
            <input type="text" name="numero_whatsapp" id="numero_whatsapp" required>
        </div>
        <div>
            <label for="email_contato">Email para contato:</label>
            <input type="email" name="email_contato" id="email_contato" required>
        </div>
        <div>
            <label for="descritivo_vaga">Descrição da vaga.</label>
            <input type="text" name="descritivo_vaga" id="descritivo_vaga" required>
        </div>
        <div>
            <label for="curso">Curso:</label>
            <input type="number" name="curso" id="curso" min="1" max="2" required>
        </div>
        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
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
</body>
</html>