<?php
$host = "localhost";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $dbName = "JGArtFoliobd";
    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    $pdo->exec($sql);
    echo "Banco de dados 'JGArtFolio' criado com sucesso!<br>";

    $pdo->exec("USE $dbName");

    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
                id INT AUTO_INCREMENT PRIMARY KEY,
                usuario VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                senha VARCHAR(255) NOT NULL
            )";
    $pdo->exec($sql);
    echo "Tabela 'usuarios' criada com sucesso!<br>";

    $sql = "CREATE TABLE IF NOT EXISTS solicitacao (
                id_pedido INT AUTO_INCREMENT PRIMARY KEY,
                titulo VARCHAR(50) NOT NULL,
                estilo VARCHAR(50) NOT NULL,
                descricao VARCHAR(999) NOT NULL,
                publico ENUM('sim', 'nao') NOT NULL
            )";
    $pdo->exec($sql);
    echo "Tabela 'solicitacao' criada com sucesso!<br>";

    $pdo = null;
} catch (PDOException $e) {
    die("Erro ao criar o banco de dados: " . $e->getMessage());
}
?>
