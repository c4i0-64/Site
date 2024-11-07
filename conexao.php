<?php
    $servidor = "127.0.0.1";
    $porta = "3306"; //padtao do mysql
    $usuario = "root";
    $senha = "fucapi";
    $banco = "catalogoMB1";

    try {
        $conn = new PDO("mysql:host=$servidor;port=$porta;dbname=$banco", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
    }
?>
