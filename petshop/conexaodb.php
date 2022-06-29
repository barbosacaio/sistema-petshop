<?php
// Variáveis da configuração do banco de dados
    $host = "localhost";
    $database = "petshop";
    $usuariodb = "root";
    $senhadb = "";
    $conexao = new PDO("mysql:host=$host;dbname=$database", $usuariodb , $senhadb);
?>