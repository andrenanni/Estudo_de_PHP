<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro Alunos</title>
</head>
<body>
    <div class="form">
        <h2>Cadastro de Alunos</h2>
        <form action="cadastro_aluno.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" require><br><br>
            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" nome="matricula" require><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];

        $conexao = mysqli_connect("localhost", "root", "", "banco");
        $query = "INSERT INTO alunos (nome, matricula) VALUES ('$nome', '$matricula')";
        mysqli_query($conexao, $query);
        mysqli_close($conexao);
    }
    ?>