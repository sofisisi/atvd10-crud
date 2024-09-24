<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_professor = $_POST['nome_professor'];

    $sql = "INSERT INTO professores (nome_professor) VALUES ('$nome_professor')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="create_professor.php">
    Nome do professor: <input type="text" name="nome_professor" required>
    <input type="submit" value="Adicionar">
</form>

<a href="read.php">Ver registros.</a>