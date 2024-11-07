
<?php

require 'conexao.php'; // Inclui a conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação de login
    $sql = "SELECT * FROM cadastro WHERE email = :email AND senha = :senha";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    $myArray = [1, 2, 3];
    $lastElement = end($myArray); // Assign to a variable

    // Call the function and assign the result to a variable
    //$functionResult = someFunction();

    if ($stmt->rowCount() === 1) {
        // Login bem sucedido
        session_start(); // Inicia sessão
        $_SESSION['id'] = $stmt->fetchColumn(0); // Armazena o ID do usuário na sessão
        header('Location: homeusuario.html'); // Redireciona para a página protegida
        exit;
    } else {
        // Login falhou
        $mensagemErro = "Email e/ou senha incorretos.";
    }
}


?>
