<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/home.css">
    <style>
        h3{
        font-size: 80px;
        font-weight: bold;
        color: white;

        }

        .subtitle{
            font-size: 30px;
            font-weight: 300;
            color: white;
        }

        main{
            display: flex;
            flex-direction: column;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo-image">
            <img src="Logo (sem fundo).png" alt="Logo da empresa">
        </div>

        <nav>
            <a href="./Cadastro-cliente.html">Cliente</a>
            <a href="./Cadastro-funcionario.html">Funcionario</a>
            <a href="./Cadastro-fornecedor.html">fornecedor</a>
            <a href="./cadastro-despesas.html">despesas</a>
            <a href="" id="a-account">
                <?php 
                    session_start();
                    if (isset($_SESSION['nm_funcionario'])) {
                        $nome = $_SESSION['nm_funcionario'];
                        echo "Olá, " . htmlspecialchars($nome);
                    } else {
                        echo "Visitante";
                    }
                ?>
            </a>
        </nav>
    </header>
    <main>
        <h3 class="title">Boas vindas!<h3>
        <p class="subtitle">Tecshop<p>
    </main>
</body>
</html>
