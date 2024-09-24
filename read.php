<?php

include 'db.php';

$sql = "SELECT * FROM professores";

$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    echo "<table border='1'>
        <tr>
            <th> Id </th>
            <th> Nome do professor </th>
        </tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
                    <td> {$row['id_professor']} </td>
                    <td> {$row['nome_professor']} </td>
                    <td>
                        <a href='update.php?id={$row['id_professor']}'>Editar</a> |
                        <a href='delete.php?id={$row['id_professor']}'>Excluir</a>
                    </td>
                </tr>";
        }
    echo "</table>";
}else{
    echo "Nenhum registro encontrado.";
}

$sql = "SELECT * FROM aulas";

$result = $conn -> query($sql);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="alert.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    
    if ($result -> num_rows > 0){
        echo "<table border='1'>
            <tr>
                <th> Id </th>
                <th> Nome do professor </th>
                <th> Idade do professor </th>
                <th> Nome da aula </th>
                <th> Numero da sala </th>
            </tr>";
            while($row = $result -> fetch_assoc()){
                echo "<tr>
                        <td> {$row['id_aula']} </td>
                        <td> {$row['nome_professor_aula']} </td>
                        <td> {$row['idade_professor']} </td>
                        <td> {$row['nome_aula']} </td>
                        <td> {$row['sala_aula']} </td>
                        <td>
                            <a href='update.php?id={$row['id_aula']}'>Editar</a> 
                            <a href='delete.php?id={$row['id_aula']}' onclick='funcao_alert(); return false;'>Excluir</a>
                        </td>
                    </tr>";
            }
        echo "</table>";
    }else{
        echo "Nenhum registro encontrado.";
    }
    
    $conn -> close();
    
    
    ?>
    <br> <a href="create_professor.php">Inserir novo registro de professor.</a> <br> 
    <br> <a href="create_aula.php">Inserir novo registro de aula.</a>

    
</body>
</html>

