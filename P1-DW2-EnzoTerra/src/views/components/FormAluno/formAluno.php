<style>
    <?php
        include "formAluno.css"
    ?>
</style>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/styles/style.css">
</head>

<?php
    include_once "src/controllers/AlunoController.php";
    if (isset($_POST["name"])) {
        $aluno = new AlunoController;
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $curso = $_POST["curso"];
        $situacao = $_POST["situacao"];
        $ano_semestre_ingresso = $_POST["ano_semestre_ingresso"];
        $aluno->createAluno($nome, $email, $curso, $situacao, $ano_semestre_ingresso);
        header("location:index.php");
    }
?>

<main>

    <form action=""  method="POST" enctype="multipart/form-data" class="row g-3 needs-validation">

        <!-- Nome -->
        <div class="col-2 col-md-4">
            <label for="validationCustom01" class="form-label">Nome</label>
            <input type="text" name="name" maxlength="100" class="form-control" id="validationCustom01" required>
            <div class="invalid-feedback">
                Por favor, colocar nome do aluno
            </div>        
        </div>

        <!-- Email -->
        <div class="col-2 col-md-4">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" name="email" maxlength="100" class="form-control" id="validationCustom01">      
        </div>

        <div class="col-12"></div>

        <!-- Curso -->
        <div class="col-2 col-md-3">
            <label for="validationCustom01" class="form-label">Curso</label>
            <input type="text" name="curso" maxlength="100" class="form-control" id="validationCustom01" required>   
        </div>

        <!-- Situacao -->
        <div class="col-2 col-md-2">
            <label for="validationCustom01" class="form-label">Situação</label>
            <select class="form-select" name="situacao" id="validationCustom04" required>
                <option selected disabled value="">Escolher...</option>
                <option>Em Curso</option>
                <option>Aprovado</option>
                <option>Reprovado</option>
            </select>
        </div>

        <!-- Ano de Ingresso -->
        <div class="col-2 col-md-2">
            <label for="validationCustom01" class="form-label">Ano de Ingresso</label>
            <input type="text" name="ano_semestre_ingresso" maxlength="100" class="form-control" id="validationCustom01">      
        </div>

        <div class="col-12"></div>

        <!-- Botao -->
        <div class="col-2">
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>