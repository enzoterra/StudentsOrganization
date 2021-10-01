<style>
    <?php
        include "src/views/pages/CreateAluno/createaluno.css";
    ?>
</style>

<body>
    <?php
        $componentsPath = "src/views/components";
        $title = "Cadastrar novo aluno";
    ?>

    <content>
        <?php
            include "$componentsPath/Title/title.php";
            include "$componentsPath/FormAluno/formAluno.php";
        ?>
    </content>
</body>