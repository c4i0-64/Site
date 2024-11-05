<?php
include('conexao.php'); // conexao com banco de dados

//receber os dados do formulario
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmarSenha'];

// preparar a consultar SQL
$sql = "INSERT INTO  cadastro (nome, cpf ,email,endereco,senha,confimarSenha) VALUES (:nome, :cpf:, :endereco, :email, :senha, :confirmarSenha)";

$stmt =$conn-> prepare($sql);

$stmt ->bindParan(':nome', $nome);
$stmt ->bindParan(':cpf', $cpf);
$stmt ->bindParan(':endereco',$endereco);
$stmt ->bindParan(':email',$email);
$stmt ->bindParan(':senha',$senha);
$stmt ->bindParan(':confirmarSenha',$confirmarSenha);

if($stmt->execute()){
    echo "Usuário cadastro com sucesso";
    header("Location: login.html");
} else{
    echo "Erro ao cadastrar usuário" . $conn ->errorInfo();

}
$conn= null;
?>
