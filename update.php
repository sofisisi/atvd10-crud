<?php
    include 'db.php';

    $id_aula = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome_professor_aula = $_POST['nome_professor_aula'];
        $idade_professor = $_POST['idade_professor'];
        $nome_aula = $_POST['nome_aula'];
        $sala_aula = $_POST['sala_aula'];

        $sql = "UPDATE aulas SET nome_professor_aula='$nome_professor_aula', idade_professor='$idade_professor', nome_aula='$nome_aula', sala_aula='$sala_aula' WHERE id_aula=$id_aula";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn ->close();
        header ("Location: read.php");
        exit();
    }

    $sql = "SELECT * FROM aulas WHERE id_aula=$id_aula";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="POST" action="update.php?id=<?php echo $row['id_aula'];?>">
        Nome do professor : <input type="text" name="nome_professor_aula" required>
        Idade do professor : <input type="number" name="idade_professor" required>
        Nome da aula : <input type="text" name="nome_aula" required>
        Numero da sala : <input type="number" name="sala_aula" required>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>