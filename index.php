<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="form-login">
        <h1>Entrar</h1>
        <form method="post" action="processar.php">
            <input type="email" placeholder="Usuário" id="email" maxlength="20">
            <input type="password" placeholder="Senha" id="senha" maxlength="6">
            <input type="submit" value="Login" id="login">
            <a href="cadastrar.php">Ainda não é inscrito? <strong>Clique aqui</strong></a>
        </form>
    </div>

</body>
</html>
