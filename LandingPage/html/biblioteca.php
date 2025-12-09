<?php
session_start();
if(!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}


if(isset($_GET['sair'])){
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blibliotca.css">
    <title>Meus cursos</title>
    <link rel="icon" href="../images/IconFinal.png" type="image/x-icon">
</head>
<body>
    <header>
        <img src="../images/IconFinal.png" alt="Programum Icon" class="logo">
        <a href="catalogo.html" class="botao-catalogo">Catalogo</a>
        <a href="?sair=true" class="botao-catalogo botao-sair">Sair</a>      
        <h1 class="titulo-pagina">Olá, <?php echo $_SESSION['nome']; ?>!</h1>
    </header> 
    <main>

        <h2 class="titulo-sessao">Continuar de Onde Parou:</h2>
       
        <div class="container1">
            
            <div class="curso-card">
                <div class="curso-imagem">
                    <img src="../images/python.png" alt="Curso de Python">
                </div>
                <div class="curso-info">
                    <h3>Curso de Python 3 do básico ao avançado</h3>
                    <p class="instrutor">Peter Parker</p>
                    <div class="progresso">
                        <span class="restante">2 horas restante</span>
                        <span class="percentual">90% concluido</span>
                    </div>
                    <button class="botao-continuar">Continuar</button>
                </div>
            </div>

            </div>

        <h2 class="titulo-sessao">Cursos Concluídos:</h2>
        <div class="container2">
            <div class="curso-card">
                <div class="curso-imagem">
                    <img src="../images/htss.png" alt="Curso de HTML e CSS">
                </div>
                <div class="curso-info">
                    <h3>Curso Completo de HTML5 e CSS3 na Prática</h3>
                    <p class="instrutor">Diana Prince</p>
                    <div class="progresso">
                        <span class="percentual">100% concluído</span>
                    </div>
                    <button class="botao-continuar">Revisitar Curso</button>
                </div>
            </div>
        </div>
        
    </main>
    <script src="../script.js"></script>
</body>
</html>