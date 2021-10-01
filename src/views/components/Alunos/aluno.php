<style>
    <?php
        include "aluno.css"
    ?>
</style>


<section id="aluno-section">
    <?php include_once "src/controllers/AlunoController.php";
    $aluno = new AlunoController;
    $lista = $aluno->getAluno();
    $lenght = count($lista);
    for ($i = 0; $i<$lenght; $i++){
        echo '
        <div class="aluno-box">

        <div class="linha">

        <!-- Nome -->
        <div class="icon-aluno aluno-button">
            <img src="public/assets/icons/person-circle.svg" class="icon">
        </div>
        <p class="aluno-text"  id="text-nome">'.
            $lista[$i]["nome"]
        .'</p>


        <!-- Email -->
        <div class="icon-aluno aluno-button" id="text-email">
            <img src="public/assets/icons/envelope.svg" class="icon">
        </div>
        <p class="aluno-text">'.
            $lista[$i]["email"]
        .'</p>
        </div>

        <div class="linha">
        <!-- Curso -->
        <div class="icon-aluno aluno-button">
            <img src="public/assets/icons/curso.svg" class="icon">
        </div>
        <p class="aluno-text">'.
            $lista[$i]["curso"]
        .'</p>


        <!-- Situação -->
        <div class="icon-aluno aluno-button">
            <img src="public/assets/icons/card-checklist.svg" class="icon">
        </div>
        <p class="aluno-text">'.
            $lista[$i]["situacao"]
        .'</p>

        <div id="space"></div>

        <!-- Ano Ingresso -->
        <div class="icon-aluno aluno-button">
            <img src="public/assets/icons/calendar-check.svg" class="icon">
        </div>
        <p class="aluno-text">'.
            $lista[$i]["ano_semestre_ingresso"]
        .'</p>
        </div>
        
        <!-- <div class="botao">
        <button title="Editar Aluno" class="edit-aluno-button aluno-button" onclick="toggleModalDisplay("#update-task-modal")">
            <img src="public/assets/icons/pencil-square.svg" class="icon" id="icon_edit" alt="Edit student button icon">
        </button>
        </div> -->

        </div>';
    }
    ?>
</section>