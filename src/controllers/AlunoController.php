<?php
    include_once "src/models/Aluno.php";
    
    class AlunoController {
        public function getAluno() {
            $aluno = new Aluno;
            return $aluno->read();
        }

        public function createAluno($nome, $email, $curso, $situacao, $ano_semestre_ingresso) {
            $aluno = new Aluno;
            $aluno->create($nome, $email, $curso, $situacao, $ano_semestre_ingresso);
        }

        /* public function getTaskId() {
            $task = new Task;
            return $task->read()[0]["id"];
        } */

        public function updateAluno($id, $nome, $email, $curso, $situacao, $ano_semestre_ingresso) {
            $aluno = new Aluno;
            $aluno->update($id, $nome, $email, $curso, $situacao, $ano_semestre_ingresso);
        }

        public function deleteAluno($id) {
            $aluno = new Aluno;
            $aluno->delete($id);
        }
    }
?>