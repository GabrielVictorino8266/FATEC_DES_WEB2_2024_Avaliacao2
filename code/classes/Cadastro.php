<?php
require_once __DIR__ . "/database.php";

class Cadastro{
    private $connection;

    public function __construct(){
        $connection = new Connection();
        $this->connection = $connection->getConnection();
    }

    public function cadastrarVaga($nome_empresa, $numero_whatsapp, $email_contato, $descritivo_vaga, $curso){
        if(isset($nome_empresa, $numero_whatsapp, $email_contato, $descritivo_vaga, $curso)){
            $query = "INSERT INTO vagas (nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso)
            VALUES (:nome_empresa, :numero_whatsapp, :email_contato, :descritivo_vaga, :curso)";

            $stmt = $this->connection->prepare($query);  
            $stmt->bindParam(":nome_empresa", $nome_empresa, PDO::PARAM_STR);
            $stmt->bindParam(":numero_whatsapp", $numero_whatsapp, PDO::PARAM_STR);
            $stmt->bindParam(":email_contato", $email_contato, PDO::PARAM_STR);
            $stmt->bindParam(":descritivo_vaga", $descritivo_vaga, PDO::PARAM_STR);
            $stmt->bindParam(":curso", $curso, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $stmt->fetchAll(PDO::FETCH_ASSOC);
                header("Location: ./cadastrar.php?register=success");
                exit;
            }else{
                return false;
            }
        }else{
            return "Content invalid. There are undefined variables.";
        }    
    }
    public function deletarVaga($id){
        if(isset($id)){
            $query = "DELETE FROM vagas WHERE id = :id";
            $stmt = $this->connection->prepare($query);  
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            if($stmt->execute()){
                header("Location: ./remover.php?delete=success");
            }else{
                header("Location: ./remover.php?delete=error");
            }
            
        }else{
            return "Content invalid. The id attributte is undefined.";
        }    
    }

    public function getVagas(){
        $query = "SELECT * FROM vagas";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return [];
        }
    }
}