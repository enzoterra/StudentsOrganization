<?php
    include_once "src/connection/Database.php";
    
    class Aluno{
        protected $table="aluno";

        public function create($nome, $email, $curso, $situacao, $ano_semestre_ingresso) {
            $db = new Database;
            $connection = $db->getConnection();
            $sql = "INSERT INTO $this->table (nome, email, curso, situacao, ano_semestre_ingresso) VALUES ('$nome', '$email', '$curso', '$situacao', '$ano_semestre_ingresso')";

            $stmt = $connection->prepare($sql);
            $stmt->execute();
        }

        public function read() {
            $db = new Database;
            $connection = $db->getConnection();
            $sql = "SELECT * FROM $this->table";
            $stmt = $connection->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $query = $stmt->fetchAll();

            return $query;
        }

        public function update($id, $nome, $email, $curso, $situacao, $ano_semestre_ingresso) {
            $db = new Database;
            $connection = $db->getConnection();
            $sql = "UPDATE $this->table SET nome='$nome', email='$email', curso='$curso', situacao='$situacao', ano_semestre_ingresso='$ano_semestre_ingresso' WHERE $this->table.id = $id";

            $stmt = $connection->prepare($sql);
            $stmt->execute();
        }

        public function delete($id) {
            $db = new Database;
            $connection = $db->getConnection();
            $sql = "DELETE FROM $this->table WHERE $this->table.id = $id";

            $stmt = $connection->prepare($sql);
            $stmt->execute();
        }
    }
?>