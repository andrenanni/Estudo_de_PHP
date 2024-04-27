<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Professores</title>
</head>
<body>
    <div class="form">
        <h2>Cadastro de Professores</h2>
        <form action="cadastro_professores.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" require><br><br>
            <label for="disciplina">Disciplina:</label>
            <input type="text" id="disciplina" nome="disciplina" require><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $disciplina = $_POST["disciplina"];

        $conexao = mysqli_connect("localhost", "root", "", "banco");
        $query = "INSERT INTO alunos (nome, disciplina) VALUES ('$nome', '$disciplina')";
        mysqli_query($conexao, $query);
        mysqli_close($conexao);
    }
?>