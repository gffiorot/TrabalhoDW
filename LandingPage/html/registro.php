<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografia da senha

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        // Se der certo, manda pro login
        echo "<script>alert('Cadastro realizado!'); window.location.href='login.php';</script>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"> 
    <title>Criar Conta - Programum</title>
    <link rel="icon" href="../images/IconFinal.png" type="image/x-icon">
</head>
<body>
     <header>
        <img src="../images/IconFinal.png" alt="Programum Icon" class="logo">
        <a href="login.php" class="botao-login">Login</a>
        <a href="catalogo.html" class="botao-catalogo">Catalogo de cursos</a>
        <h1 class="titulo-pagina">Cadastro</h1>
    </header> 
    <main>
        <h2>Crie sua conta e comece a aprender!</h2>
        
        <form id="formRegistro" method="POST" action="">
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="campo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="campo">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button class="botaoRegistrar" type="submit">Cadastrar e Continuar</button>
        </form>

        <p class="loginLink">Já tem uma conta? <a href="login.php">Faça Login</a></p>
    </main>
    

</body>
</html>