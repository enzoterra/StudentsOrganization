<style>
    <?php
        include "home.css";
    ?>
</style>

<body>
    <?php
        $componentsPath = "src/views/components";
        $title = "Listagem dos Alunos";
        include "$componentsPath/Header/header.php";
    ?>

    <content>
        <?php
            include "$componentsPath/Title/title.php";
            include "$componentsPath/CreateAlunoButton/createalunobutton.php";
            include "$componentsPath/Alunos/aluno.php";
        ?>
    </content>
</body>