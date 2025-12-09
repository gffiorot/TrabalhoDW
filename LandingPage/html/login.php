<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verifica a senha criptografada
        if (password_verify($senha, $row['senha'])) {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            header("Location: biblioteca.php"); // Manda para a biblioteca
            exit();
        } else {
            echo "<script>alert('Senha incorreta!');</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"> 
    <title>Fazer login - Programum</title>
    <link rel="icon" href="../images/IconFinal.png" type="image/x-icon">
</head>
<body>
   <header>
        <img src="../images/IconFinal.png" alt="Programum Icon" class="logo">
        <a href="catalogo.html" class="botao-catalogo">Catalogo de cursos</a>
        <h1 class="titulo-pagina">Login</h1>
    </header> 
    <main>
        <h2>Faça login para continuar a aprender!</h2>
        
        <form id="formLogin" method="POST" action="">

            <div class="campo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="campo">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button class="botaoLogin" type="submit">Continuar</button>
        </form>

        <p class="loginLink">Não tem uma conta? <a href="registro.php">Se cadastre agora</a></p>
        
    </main>
    
</body>
</html>