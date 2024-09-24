<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "professor_aula_sofia";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
?>