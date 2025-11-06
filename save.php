<?php 
    include("config.php");

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $sql_insert = "INSERT INTO usuarios (nome,senha) VALUES ('$nome','$senha')";
    $sql_query = $mysqli->query($sql_insert);
    
    header("Location: homepage.php");
    exit;
?>