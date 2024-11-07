<?php

include('conexao.php'); // Conexão com o banco de dados

// Receber os dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmarSenha'];

// Preparar a consulta SQL
$sql = "INSERT INTO cadastro (nome, cpf, endereco, email, senha, confirmarSenha) VALUES (:nome, :cpf, :endereco, :email, :senha, :confirmarSenha)";

// Criar um objeto de consulta PDO
$stmt = $conn->prepare($sql);

// Vincular os valores aos parâmetros da consulta
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':endereco', $endereco);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':confirmarSenha', $confirmarSenha);

// Executar a consulta
if ($stmt->execute()) {
    echo "Usuário cadastrado com sucesso!";
    header('Location: login.html');
} else {
    echo "Erro ao cadastrar usuário: " . $conn->errorInfo();
}

// Fechar a conexão com o banco de dados
$conn = null;
?>
