<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eletronic";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com sucesso.<br>";
} catch (PDOException $e) {
    // echo "Conexão falhou: " . $e->getMessage() . "<br>";
    throw new PDOException($e);
}
