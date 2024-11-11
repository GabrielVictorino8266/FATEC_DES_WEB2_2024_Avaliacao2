<?php
class Connection{
    private $host = "localhost";
    private $dbname = "vagas";
    private $user = "root";
    private $password = "";
    private $connection;

    public function __construct(){
        $this->connect();
    }

    private function connect(){
        try{
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",
                $this->user,
                $this->password
            );
        }catch(PDOException $e){
            echo "An error occurred in database: " . $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->connection;
    }

    public function closeConexao(){
        return $this->conexao = NULL;
    }

    public function __destruct(){
        $this->closeConexao();
    }
}