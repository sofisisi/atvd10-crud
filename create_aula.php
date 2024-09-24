<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_professor_aula = $_POST['nome_professor_aula'];
    $idade_professor = $_POST['idade_professor'];
    $nome_aula = $_POST['nome_aula'];
    $sala_aula = $_POST['sala_aula'];

    $idade_professor = $_POST['idade_professor'];
    $sql = "INSERT INTO aulas (nome_professor_aula, idade_professor, nome_aula, sala_aula ) VALUES ('$nome_professor_aula', '$idade_professor', '$nome_aula', '$sala_aula' )";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<form method="post" action="create_aula.php">
    Nome do professor : <input type="text" name="nome_professor_aula" required>
    Idade do professor : <input type="number" name="idade_professor" required>
    Nome da aula : <input type="text" name="nome_aula" required>
    Numero da sala : <input type="number" name="sala_aula" required>
    <input type="submit" value="Adicionar">
</form>

<a href="read.php">Ver registros.</a>