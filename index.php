<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <header>
        <div class="logo-image">
            <img src="Logo (sem fundo).png" alt="Logo da empresa">
        </div>

        <nav>
            <a href=""></a>
            <a href=""></a>
        </nav>
    </header>
    <main>
        <section>
            <form action="./php/logon.php" method="post">
                <div class="form-header">
                    <h1>Login</h1>
                </div>

                <div class="row">
                    <div class="input-group">
                        <label for="text">Nome</label>
                        <input id="text" name="name" type="text" placeholder="Digite seu nome" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <label for="password">Senha</label>
                        <input id="password" name="senha" type="number" placeholder="Digite sua senha" required>
                    </div>
                </div>



                <div class="continue-button">
                    <button type="submit"><a href="">Continuar</a></button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
