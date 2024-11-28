<?php
include_once 'classeConexao.php';

class Produto
{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    public function getId() {
        return $this->id;
    }

    public function setId($iid) {
        $this->id = $iid;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoqui) {
        $this->estoque = $estoqui;
    }

    function salvar() {
        try {
            $this->conn = new Conexao();
            $sql = $this->conn->prepare("INSERT INTO produto VALUES (null, ?, ?)");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar o registro: " . $exc->getMessage();
        }
    }

  function alterar() {
        try {
            $this->conn = new Conexao();
            $sql = $this->conn->prepare("SELECT * FROM produto WHERE id = ?");
            @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
           
        } catch (PDOException $exc) {
            echo "Erro ao alterar: " . $exc->getMessage();
        }
    }

    function alterar2() {
        try {
            $this->conn = new Conexao();
            $sql = $this->conn->prepare("UPDATE produto SET nome = ?, estoque = ? WHERE id = ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);  
            @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_INT); 
            @$sql->bindParam(3, $this->getId(), PDO::PARAM_INT); 
    
            if ($sql->execute()) {
                return "Registro alterado com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao alterar o registro: " . $exc->getMessage();
        }
    }

   function consultar() {
        try {
            $this->conn = new Conexao();
            $sql = $this->conn->prepare("SELECT * FROM produto WHERE Nome like ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta: " . $exc->getMessage();
        }
    }

    function exclusao() {
        try {
            $this->conn = new Conexao();
            $sql = $this->conn->prepare("DELETE FROM produto WHERE id = ?");
            @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR);
            
            if ($sql->execute() == 1) {
                return "Excluído com sucesso!";
            } else {
                return "Erro na exclusão!";
            }
            $this->conn = null;

        } catch (PDOException $exc) {
            echo "Erro ao excluir: " . $exc->getMessage();
        } 
            
        
    }

    public function listar() {
        try {
            $this->conn = new Conexao();
            $sql = $this->conn->query("SELECT * FROM produto ORDER BY Nome"); 
            return $sql->fetchAll();
        } catch (PDOException $exc) {
             echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
}
?>
